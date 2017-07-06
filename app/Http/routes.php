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
	/*BLOG*/ 
	Route::get('blog/{action}/{id?}','AdminController@new_blog');
	Route::post('save/blog','AdminController@save_blog');
	Route::post('action/blog','AdminController@action_blog');
	/*SERVICE*/ 
	Route::get('service/{action}/{id?}','AdminController@new_service');
	Route::post('save/service','AdminController@save_service');
	Route::post('action/service','AdminController@action_service');

	Route::get('page/new/{category}','AdminController@show_save_page');

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
Route::get('blog/{id?}','PageController@show_blog');
Route::get('contact','PageController@show_contact');
Route::post('contactus','PageController@save_contact');
Route::get('work','PageController@show_work');