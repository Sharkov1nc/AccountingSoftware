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
use Illuminate\Support\Facades\Response;

class ClientController extends Controller
{
    public function createClient(Request $request){

        Clients::updateOrCreate([
            "client" => $request->get("client"),
            "city" => $request->get("city")
        ],[
           "address" => $request->get("address"),
           "contact_person" => $request->get("contact-person"),
           "type" => $request->get("type") ? true : false,
           "email" => $request->get("email"),
           "phone" => '0'.$request->get("phone")
       ]);
    }

    public function loadDataToDataTable(){
       $clients = Clients::all();
       return DataTables::of($clients)
           ->addColumn(
           "actions",function ($clients){
               return '<a type="button" data-id="'.$clients->id.'" data-action="view" class="btn btn-primary open-client-information"><i class="icon s7-menu"></i></a>
                       <a type="button" data-id="'.$clients->id.'" data-action="edit" class="btn btn-primary edit-client"><i class="icon s7-pen"></i></a>
                       <a type="button" data-id="'.$clients->id.'" class="btn btn-primary remove-client"><i class="icon s7-trash"></i></a>
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

    public function viewOrEditClient(Request $request){
        $client = Clients::find($request->get("id"));
        $response = ["client" => $client];
        return Response::json($response);
    }

    public function removeClient(Request $request){
        Clients::find($request->get("id"))->delete();
    }
}