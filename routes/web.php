<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view("dashboard");
})->name("Home");
Route::get('/profits',function (){
    return view("profits");
})->name("Profits");
Route::get('/timeline',function (){
    return view("timeline");
})->name("Timeline");
Route::get('/expenses',function (){
    return view("expenses");
})->name("Expenses");
Route::get('/clients',function (){
    return view("clients");
})->name("Clients");
Route::get('/profile', function (){
    return view("profile");
})->name("Profile");
Route::get('/support', function (){
    return view("support");
})->name("Support");
Route::get('/clients/dashboard/{id}', function ($id) {
    return view("clients.dashboard",["Client" => App\Clients::findOrFail($id)]);
})->name("UserDashboard");


Auth::routes();



