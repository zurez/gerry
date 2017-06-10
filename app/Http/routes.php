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

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::get('dashboard','AdminController@index');

});

Route::get('logout','AdminController@logout');
Route::get('login','AdminController@get_login');
Route::post('login','AdminController@post_login');
Route::get('industries','PageController@show_industries');
Route::get("/",'PageController@landing');