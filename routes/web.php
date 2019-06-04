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
use App\Http\Middleware\checkAuth;
use App\Http\Middleware\CheckExistsSetup;

// Pages Routes
Route::get("/setup_form",function (){
    return view("register");
})->middleware("guest")->middleware(CheckExistsSetup::class);
Route::get('/', function (){
    return view("dashboard",["tasks" => \App\Tasks::where("recipient",\Illuminate\Support\Facades\Auth::id())]);
})->name("Home")->middleware(checkAuth::class);
Route::get('/profits',function (){
    return view("profits",["Clients" => \App\Clients::all("id","client")]);
})->name("Profits")->middleware(checkAuth::class);
Route::get('/timeline',function (){
    return view("timeline");
})->name("Timeline")->middleware(checkAuth::class);
Route::get('/expenses',function (){
    return view("expenses",["Clients" => \App\Clients::all("id","client")]);
})->name("Expenses")->middleware(checkAuth::class);
Route::get('/clients',function (){
    return view("clients");
})->name("Clients")->middleware(checkAuth::class);
Route::get('/support', function (){
    return view("support");
})->name("Support")->middleware(checkAuth::class);

// Profits Actions Routes

Route::post("/add_profits","ProfitsController@addProfits")->name("AddProfits")->middleware(checkAuth::class);
Route::get("/load_profits_datatable","ProfitsController@loadDataToDataTable")->name("LoadDataTableProfits")->middleware(checkAuth::class);
Route::get("/load_profit_data_to_modal","ProfitsController@loadProfitDataToModal")->name("LoadProfitDataToModal")->middleware(checkAuth::class);
Route::get("/remove_profit","ProfitsController@removeProfit")->name("RemoveProfit")->middleware(checkAuth::class);
Route::get("/profits/remove_profit_detail","ProfitsController@removeProfitDetail")->name("RemoveProfitDetail")->middleware(checkAuth::class);
Route::get("/profits/load_profit_detail_data_to_modal","ProfitsController@loadProfitDetailDataToModal")->name("LoadProfitDetailDataToModal")->middleware(checkAuth::class);
Route::get("/profits/update_profit_detail","ProfitsController@updateProfitDetail")->name("UpdateProfitDetail")->middleware(checkAuth::class);
Route::get("/profits/generate_pdf","ProfitsController@printProfit")->name("PrintProfit")->middleware(checkAuth::class);
Route::get("/profits/dashboard/{id}","ProfitsController@dashboard")->name("ProfitsDashboard")->middleware(checkAuth::class);
Route::get("/profits/load_profit_details_data/{id}","ProfitsController@loadProfitDetailsData")->name("LoadProfitDetailsData")->middleware(checkAuth::class);

// Expenses Actions Routes

Route::post("/add_expenses","ExpensesController@addExpenses")->name("AddExpenses")->middleware(checkAuth::class);
Route::get("/load_expenses_datatable","ExpensesController@loadDataToDataTable")->name("LoadDataTableExpenses")->middleware(checkAuth::class);
Route::get("/load_expense_data_to_modal","ExpensesController@loadExpenseDataToModal")->name("LoadExpenseDataToModal")->middleware(checkAuth::class);
Route::get("/remove_expense","ExpensesController@removeExpense")->name("RemoveExpense")->middleware(checkAuth::class);
Route::get("/expenses/remove_expense_detail","ExpensesController@removeExpenseDetail")->name("RemoveExpenseDetail")->middleware(checkAuth::class);
Route::get("/expenses/load_expense_detail_data_to_modal","ExpensesController@loadExpenseDetailDataToModal")->name("LoadExpenseDetailDataToModal")->middleware(checkAuth::class);
Route::get("/expenses/update_expense_detail","ExpensesController@updateExpenseDetail")->name("UpdateExpenseDetail")->middleware(checkAuth::class);
Route::get("/expenses/generate_pdf","ExpensesController@printExpense")->name("PrintExpense")->middleware(checkAuth::class);
Route::get("/expenses/dashboard/{id}","ExpensesController@dashboard")->name("ExpensesDashboard")->middleware(checkAuth::class);
Route::get("/expenses/load_expense_details_data/{id}","ExpensesController@loadExpenseDetailsData")->name("LoadExpenseDetailsData")->middleware(checkAuth::class);

// Clients Actions Routes

Route::get("/create_client","ClientController@createClient")->name("CreateClient")->middleware(checkAuth::class);
Route::get("/load_clients_datatable","ClientController@loadDataToDataTable")->name("LoadDataTableClients")->middleware(checkAuth::class);
Route::get("/view_edit_client","ClientController@viewOrEditClient")->name("ViewOrEditClient")->middleware(checkAuth::class);
Route::get("/remove_client","ClientController@removeClient")->name("RemoveClient")->middleware(checkAuth::class);

// Settings Actions Routes

Route::post("/settings/create_user","SettingsController@createUser")->name("CreateUser")->middleware(checkAuth::class);
Route::get("/settings/load_users_datatable","SettingsController@loadDataToDataTableUser")->name("LoadDataTableUser")->middleware(checkAuth::class);
Route::get("/settings/view_edit_user","SettingsController@viewOrEditUser")->name("ViewOrEditUser")->middleware(checkAuth::class);
Route::get("/settings/remove_user","SettingsController@removeUser")->name("RemoveUser")->middleware(checkAuth::class);
 //Permissions
Route::get("/settings","SettingsController@permissionsList")->name("Settings")->middleware(checkAuth::class);
Route::get("/settings/set_unset_permissions","SettingsController@setUnsetPermissions")->name("SetUnsetPermissions")->middleware(checkAuth::class);
 // Tasks
Route::get("/settings/create_task","SettingsController@createTask")->name("CreateTask")->middleware(checkAuth::class);
Route::get("/settings/load_tasks_datatable","SettingsController@loadDataToDataTableTask")->name("LoadDataTableTask")->middleware(checkAuth::class);
Route::get("/settings/view_edit_task","SettingsController@viewTask")->name("ViewTask")->middleware(checkAuth::class);
Route::get("/settings/remove_task","SettingsController@removeTask")->name("RemoveTask")->middleware(checkAuth::class);
Route::get("/settings/mark_task_as_completed","SettingsController@markTaskAsCompleted")->name("MarkTaskAsCompleted")->middleware(checkAuth::class);
// Notes
Route::get("/settings/create_note","SettingsController@createNote")->name("CreateNote")->middleware(checkAuth::class);
Route::get("/settings/load_notes_datatable","SettingsController@loadDataToDataTableNote")->name("LoadDataTableNote")->middleware(checkAuth::class);
Route::get("/settings/view_edit_note","SettingsController@viewNote")->name("ViewNote")->middleware(checkAuth::class);
Route::get("/settings/remove_note","SettingsController@removeNote")->name("RemoveNote")->middleware(checkAuth::class);

// Auth Routes

Route::get("/logout_auth","Auth\LoginController@logout")->name("logoutAuth")->middleware(checkAuth::class);
Route::post("/setup","CompanyController@setup")->name("Setup");

Auth::routes();



