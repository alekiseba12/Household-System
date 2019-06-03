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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tenantsForm', 'TenantsController@index');
Route::post('/newtenant', 'TenantsController@create');
Route::get('/mytenants', 'HomeController@show');
Route::get('/showtenant/{ID_NO}', 'TenantsController@show');
Route::get('/houseform', 'HouseController@index');
Route::post('/addhouse', 'HouseController@create');
Route::get('/paymentform', 'PaymentsController@index');
Route::post('/addpayment', 'PaymentsController@create');
Route::get('/edithouse/{house_No}', 'HouseController@edit');
Route::post('/updatehouse{house_No}', 'HouseController@update');
