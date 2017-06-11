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

Route::group(['prefix'=>'admin'],function(){
	Route::get('dashboard','AdminController@index');

	Route::get('blog/{action}/{id?}','AdminController@new_blog');
	Route::post('save/blog','AdminController@save_blog');
	Route::post('action/blog','AdminController@action_blog');

});

Route::get('logout','AuthController@getLogout');
Route::get('login','Auth\AuthController@getLogin');
Route::post('login','Auth\AuthController@postLogin');
Route::get('industries','PageController@show_industries');
Route::get('case/{id?}','PageController@show_cases');
Route::get('mission','PageController@show_mission');
Route::get('team','PageController@show_team');
Route::get('service/{id?}','PageController@show_service');
Route::get("/",'PageController@landing');