<?php
/**
 * Created by PhpStorm.
 * User: sharkov
 * Date: 16.04.19
 * Time: 12:13
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use Yajra\DataTables\DataTables;

class ClientController extends Controller
{
    public function createClient(Request $request){
       return Clients::create([
            "client" => $request->get("client"),
            "contact_person" => $request->get("contact-person"),
            "type" => $request->get("type") ? true : false,
            "phone" => '0'.$request->get("phone"),
            "email" => $request->get("email"),
            "city" => $request->get("city"),
            "address" => $request->get("address")
        ]);
    }

    public function loadDataToDataTable(){
       $clients = Clients::all();
       return DataTables::of($clients)
           ->addColumn(
           "actions",function ($clients){
               return '<a href="'.route("ClientsDashboard",["id" => $clients->id]).'" type="button" class="btn btn-primary"><i class="icon s7-menu"></i></a>
                       <a href="'.route("ClientsDashboard",["id" => $clients->id]).'" type="button" class="btn btn-primary"><i class="icon s7-pen"></i></a>
                       <a href="'.route("ClientsDashboard",["id" => $clients->id]).'" type="button" class="btn btn-primary"><i class="icon s7-print"></i></a>
                       <a href="'.route("ClientsDashboard",["id" => $clients->id]).'" type="button" class="btn btn-primary"><i class="icon s7-trash"></i></a>
                      ';
        })
           ->addColumn(
               "phone",function ($clients){
               return '<a href="tel:0'.$clients->phone.'">0'.$clients->phone.' </a>';
           })
           ->addColumn(
               "type",function ($clients){
               return $clients->type ? "<label class='label label-success'>Legal Entity</label>" : "<label class='label label-info'>Individual</label>";
           })
           ->rawColumns(['actions','phone','type'])
           ->make(true);
    }
}