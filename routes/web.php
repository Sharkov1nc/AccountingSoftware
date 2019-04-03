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


Auth::routes();
Route::get('/setup','HomeController@setup')->name('Setup');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
