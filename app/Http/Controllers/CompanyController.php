<?php

namespace App\Http\Controllers;

use App\CompanyInformation;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use Constants;


class CompanyController extends Controller
{
   public function setup(Request $request){

       $validator = Validator::make($request->all(),[
           "company" => "required",
           "manager" => "required | min:6",
           "email" => "required | email | unique:users",
           "password" => "required | confirmed | min:6",
           "city" => "required | min:3",
           "address" => "required | min:6",
           "phone" => "required | min:8",
           "fax" => "required | min:8",
           "public-email" => "required | email",
       ]);

       if ($validator->fails()) {
           return redirect()->route("Setup")
               ->withErrors($validator)
               ->withInput();
       }

       $user = User::create([
           'name' => $request->get("manager"),
           'email' => $request->get("email"),
           'password' => Hash::make($request->get('password')),
           'developer' => false,
           'administrator' => true,
           'position' => 1
       ]);

       CompanyInformation::create([
           "company" => $request->get("company"),
           "city" => $request->get("city"),
           "address" => $request->get("address"),
           "email" => $request->get("public-email"),
           "fax" => $request->get("fax"),
           "phone" => $request->get("phone"),
           "manager_id" => $user->id
       ]);

       Auth::login($user);

       return redirect()->route("Home");

   }

}
