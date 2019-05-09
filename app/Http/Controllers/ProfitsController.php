<?php
/**
 * Created by PhpStorm.
 * User: sharkov
 * Date: 13.04.19
 * Time: 23:12
 */

namespace App\Http\Controllers;

use App\ProfitsDetails;
use Illuminate\Http\Request;
use App\Profits;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use PDF;

class ProfitsController extends Controller
{
    public function addProfits(Request $request){

        $this->middleware("auth");

        $validator = Validator::make($request->all(),[
            "client" => "required",
            "date" => "required",
            "clarification" => "required | string",
            "amount" => "required"
        ],[
            "clarification.string" => "Clarification need to be string !"
        ]);

        if ($validator->fails()){
            $response = ["errors" => $validator->errors()];
            return Response::json($response);
        }

       $profit = Profits::create([
           "client_id" => $request->get("client"),
           "date" => $request->get("date"),
           "clarification" => $request->get("clarification"),
           "amount" => $request->get("amount"),
           "created_by" => Auth::user()->getAuthIdentifier()
       ]);
        $i = 1;
        while (1){
            if ($request->exists('item-'.$i.'')) {
                ProfitsDetails::create([
                    "item_position" => $request->get('item-'.$i.''),
                    "item_price" => $request->get('item-price-'.$i.''),
                    "profit_id" => $profit->id
                ]);
                $i++;
            } else {
                break;
            }
        }
    }

    public function removeProfit(Request $request){

        $this->middleware("auth");
        $profit = Profits::find($request->get("id"));
        $profitDetails = ProfitsDetails::where("profit_id", $profit->id)->get();
        if ($profitDetails) {
            foreach ($profitDetails as $pd) {
                $pd->delete();
            }
            $profit->delete();
        }
    }

    public function printProfit(Request $request){
        $this->middleware("auth");
        $profit = Profits::find($request->get("id"));
        $profitDetails = ProfitsDetails::where("profit_id", $profit->id)->get();
        $pdf = PDF::loadView('profits.print',["profit" => $profit,"profitDetails" => $profitDetails])->setPaper('A4', 'landscape');
        return $pdf->stream('itsolutionstuff.pdf');
    }

    public function loadDataToDataTable(){
        $profits = Profits::with("client");
        return DataTables::of($profits)
            ->addColumn(
                "actions",function ($profits){
                return '<a href="'.route("ProfitsDashboard",["id" => $profits->id]).'" type="button" class="btn btn-primary"><i class="icon s7-menu"></i></a>
                       <a href="'.route("ClientsDashboard",["id" => $profits->id]).'" type="button" class="btn btn-primary"><i class="icon s7-pen"></i></a>
                       <a href="'.route("PrintProfit",["id" => $profits->id]).'" target="_blank" type="button" class="btn btn-primary"><i class="icon s7-print"></i></a>
                       <a type="button" name="'.$profits->id.'" data-url="'.route("RemoveProfit").'" class="btn btn-primary remove-profit"><i class="icon s7-trash"></i></a>
                      ';
            })
            ->addColumn(
                "client", function ($profits){
                return $profits->client->client;
            })
            ->addColumn(
                "date", function ($profits){
                return substr($profits->date,0,10);
            })
            ->addColumn(
                "amount", function ($profits){
                return number_format($profits->amount, 2, ',', ' ') .'‎ €';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function dashboard($id){
        $profit = Profits::findOrFail($id);
        $profitDetails = ProfitsDetails::where("profit_id",$profit->id)->get();
        return view("profits.dashboard",["profit" => $profit, "profitDetails" => $profitDetails]);
    }

    public function loadProfitDetailsData($id){
        $profitDetails = ProfitsDetails::where("profit_id",$id);
        return DataTables::of($profitDetails)
            ->addColumn(
                "actions",function ($profitDetails){
                return '
                       <a href="'.route("ClientsDashboard",["id" => $profitDetails->id]).'" type="button" class="btn btn-primary"><i class="icon s7-pen"></i></a>
                       <a type="button" name="'.$profitDetails->id.'" data-url="'.route("RemoveProfit").'" class="btn btn-primary remove-profit"><i class="icon s7-trash"></i></a>
                      ';
            })
            ->addColumn(
                "amount", function ($profitDetails){
                return number_format($profitDetails->item_price, 2, ',', ' ') .'‎ €';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

}