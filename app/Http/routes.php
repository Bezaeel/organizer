<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});



Route::auth();

Route::get('phonebook/create', 'info@create');
Route::post('phonebook/store', 'info@store');
Route::get('phonebook',[
	'middleware'=>'auth',
	'uses'=>'info@index'
]);
Route::get('phonebook/details/{id}', 'info@show');
Route::get('phonebook/edit/{id}', 'info@edit');
Route::patch('phonebook/update/{id}', 'info@update');
Route::get('phonebook/delete/{id}', 'info@destroy');





