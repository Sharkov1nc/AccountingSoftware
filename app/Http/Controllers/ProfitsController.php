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
class ProfitsController extends Controller
{
    public function addProfits(Request $request){
        print_r($request->get("client"));
//      return Profits::create([
//           "client_id" => 1,
//           "clarification" => "Some Text Here",
//           "amount" => $request->get("amount"),
//           "created_by" => 1
//       ]);
    }
}