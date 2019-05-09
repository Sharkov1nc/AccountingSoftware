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
    return view("profits",["Clients" => \App\Clients::all("id","client")]);
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
})->name("ClientsDashboard");
Route::post("/add_profits","ProfitsController@addProfits")->name("AddProfits");
Route::get("/create_client","ClientController@createClient")->name("CreateClient");
Route::get("/load_clients_datatable","ClientController@loadDataToDataTable")->name("LoadDataTableClients");
Route::get("/load_profits_datatable","ProfitsController@loadDataToDataTable")->name("LoadDataTableProfits");
Route::get("/remove_profit","ProfitsController@removeProfit")->name("RemoveProfit");
Route::get("/generate_pdf","ProfitsController@printProfit")->name("PrintProfit");
Route::get("/profits/dashboard/{id}","ProfitsController@dashboard")->name("ProfitsDashboard");
Route::get("/profits/load_profit_details_data/{id}","ProfitsController@loadProfitDetailsData")->name("LoadProfitDetailsData");

Auth::routes();



