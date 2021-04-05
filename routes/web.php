<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',function(){
     return view('welcome');

});

Auth::routes();

Route::get('/crud', 'HomeController@index')->name('/crud');


Route::get('service','CustomersController@service');
Route::get('aboutus','CustomersController@aboutus');
Route::get('contactus','CustomersController@contactus');

Route::resource('crud','CrudsController');

Route::get('contactus','ContactsController@create');
Route::post('contactus','ContactsController@store');







Route::resource('crud','CrudsController');


