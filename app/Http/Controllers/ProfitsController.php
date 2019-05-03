<?php
/**
 * Created by PhpStorm.
 * User: sharkov
 * Date: 13.04.19
 * Time: 23:12
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Profits;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class ProfitsController extends Controller
{
    public function addProfits(Request $request){
       Profits::create([
           "client_id" => $request->get("client"),
           "date" => $request->get("date"),
           "clarification" => $request->get("clarification"),
           "amount" => $request->get("amount"),
           "created_by" => Auth::user()->getAuthIdentifier()
       ]);
    }

    public function loadDataToDataTable(){
        $profits = Profits::with("client");
        return DataTables::of($profits)
            ->addColumn(
                "actions",function ($profits){
                return '<a href="'.route("UserDashboard",["id" => $profits->id]).'" type="button" class="btn btn-primary"><i class="icon s7-menu"></i></a>
                       <a href="'.route("UserDashboard",["id" => $profits->id]).'" type="button" class="btn btn-primary"><i class="icon s7-pen"></i></a>
                       <a href="'.route("UserDashboard",["id" => $profits->id]).'" type="button" class="btn btn-primary"><i class="icon s7-print"></i></a>
                       <a href="'.route("UserDashboard",["id" => $profits->id]).'" type="button" class="btn btn-primary"><i class="icon s7-trash"></i></a>
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
}