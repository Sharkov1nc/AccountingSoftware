<?php
/**
 * Created by PhpStorm.
 * User: sharkov
 * Date: 23.05.19
 * Time: 23:42
 */

namespace App\Http\Controllers;

use App\ExpensesDetails;
use Illuminate\Http\Request;
use App\Expenses;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use PDF;

class ExpensesController extends Controller {

    public function addExpenses(Request $request){

        $validator = Validator::make($request->all(),[
            "client" => "required",
            "date" => "required",
            "clarification" => "required | string",
        ],[
            "clarification.string" => "Clarification need to be string !"
        ]);

        if ($validator->fails()){
            $response = ["errors" => $validator->errors()];
            return Response::json($response);
        }
        $expenseSum = 0;
        $expense = Expenses::firstOrCreate([
            "client_id" => $request->get("client"),
            "date" => $request->get("date"),
            "clarification" => $request->get("clarification"),
        ],[
            "amount" => null,
            "created_by" => Auth::user()->getAuthIdentifier()
        ]);
        $this->removeAllExpenseDetails($expense->id);
        $i = 1;
        while (1){
            if ($request->exists('item-'.$i.'') && ( $request->get('item-'.$i.'') != "" && $request->get('item-price-'.$i.'') != "")) {
                $pD = ExpensesDetails::create([
                    "item_position" => $request->get('item-'.$i.''),
                    "item_price" => $request->get('item-price-'.$i.''),
                    "expense_id" => $expense->id
                ]);
                $expenseSum += $pD->item_price;
                $i++;
            } else {
                break;
            }
        }
        $expense->amount = $expenseSum;
        $expense->save();
    }

    public function loadExpenseDataToModal(Request $request){
        $expense = Expenses::find($request->get("id"));
        $expenseDetails = ExpensesDetails::where("expense_id",$expense->id)->get();
        $response = ["expense" => $expense,"expenseDetails" => $expenseDetails,"pdCount" => count(iterator_to_array($expenseDetails))];
        return Response::json($response);
    }

    public function removeExpense(Request $request){

        $this->middleware("auth");
        $expense = Expenses::find($request->get("id"));
        $expenseDetails = ExpensesDetails::where("expense_id", $expense->id)->get();
        if ($expenseDetails) {
            foreach ($expenseDetails as $pd) {
                $pd->delete();
            }
            $expense->delete();
        }
        return;
    }

    function removeAllExpenseDetails($id){
        ExpensesDetails::where("expense_id",$id)->delete();
    }

    public function printExpense(Request $request){
        $this->middleware("auth");
        $expense = Expenses::find($request->get("id"));
        $expenseDetails = ExpensesDetails::where("expense_id", $expense->id)->get();
        $pdf = PDF::loadView('s.print',["expense" => $expense,"expenseDetails" => $expenseDetails])->setPaper('A4', 'landscape');
        return $pdf->stream('itsolutionstuff.pdf');
    }

    public function loadDataToDataTable(){
        $expense = Expenses::with("client");
        return DataTables::of($expense)
            ->addColumn(
                "actions",function ($expense){
                return '<a href="'.route("ExpensesDashboard",["id" => $expense->id]).'" type="button" class="btn btn-primary"><i class="icon s7-menu"></i></a>
                       <a data-name="'.$expense->id.'" type="button" class="btn btn-primary update-expense"><i class="icon s7-pen"></i></a>
                       <a href="'.route("PrintExpense",["id" => $expense->id]).'" target="_blank" type="button" class="btn btn-primary"><i class="icon s7-print"></i></a>
                       <a type="button" name="'.$expense->id.'" data-url="'.route("RemoveExpense").'" class="btn btn-primary remove-expense"><i class="icon s7-trash"></i></a>
                      ';
            })
            ->addColumn(
                "client", function ($expense){
                return $expense->client->client;
            })
            ->addColumn(
                "date", function ($expense){
                return substr($expense->date,0,10);
            })
            ->addColumn(
                "amount", function ($expense){
                return number_format($expense->amount, 2, ',', ' ') .'‎ €';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function dashboard($id){
        $expense = Expenses::findOrFail($id);
        $expenseDetails = ExpensesDetails::where("expense_id",$expense->id)->get();
        return view("expenses.dashboard",["expense" => $expense, "expenseDetails" => $expenseDetails]);
    }

    public function loadExpenseDetailsData($id){
        $expenseDetails = ExpensesDetails::where("expense_id",$id);
        return DataTables::of($expenseDetails)
            ->addColumn(
                "actions",function ($expenseDetails){
                return '
                       <a type="button" name="'.$expenseDetails->id.'" class="btn btn-primary update-expense-detail"><i class="icon s7-pen"></i></a>
                       <a type="button" name="'.$expenseDetails->id.'" class="btn btn-primary remove-expense-detail"><i class="icon s7-trash"></i></a>
                      ';
            })
            ->addColumn(
                "amount", function ($expenseDetails){
                return number_format($expenseDetails->item_price, 2, ',', ' ') .'‎ €';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function removeExpenseDetail(Request $request){
        $ed = ExpensesDetails::find($request->get("id"));
        $expense = Expenses::find($ed->expense_id);
        $expense->amount -= $ed->item_price;
        $expense->save();
        $ed->delete();
        return;
    }
    public function loadExpenseDetailDataToModal(Request $request){
        $expenseDetails = ExpensesDetails::find($request->get("id"));
        $response = ["expenseDetail" => $expenseDetails];
        return Response::json($response);
    }

    public function updateExpenseDetail(Request $request){

        $validator = Validator::make($request->all(),[
            "item" => "required",
            "item-price" => "required"
        ]);

        if ($validator->fails()){
            $response = ["errors" => $validator->errors()];
            return Response::json($response);
        }

        $ed = ExpensesDetails::find($request->get("pd-id"));
        $ed->update([
            "item_position" => $request->get("item"),
            "item_price" => $request->get("item-price")
        ]);
        $ed->updateExpenseAmount();

    }

}