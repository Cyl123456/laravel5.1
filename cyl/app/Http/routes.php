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
    return view('welcome');
});
Route::get('biaodan',function(){
	return view('biaodan');
});
Route::post('form',function(){
	return "111";
});
Route::delete('del',function(){
	return '222';
});
Route::put('pt',function(){
	return '333';
});
