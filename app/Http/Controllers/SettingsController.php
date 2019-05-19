<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Constants;

class SettingsController extends Controller
{
    public function permissionsList(){
       return view("settings",["positions" => Constants::positions,"permissions" => Constants::permissions]);
    }
}
