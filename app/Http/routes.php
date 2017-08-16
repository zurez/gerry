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
	Route::post('page/save','AdminController@save_page');
	Route::post('page/delete','AdminController@delete_page');
	Route::post('action/service','AdminController@action_service');
	Route::get('email/{action}','AdminController@email');
	Route::get('page/new/{category}','AdminController@show_save_page');
	Route::get('page/all/{category}','AdminController@show_page_all');
	Route::get('page/edit/{page_id}','AdminController@edit_page');

	/*SETTINGS*/
	Route::post('settings/site','AdminController@save_page_settings'); 
	Route::get('settings/profile','AdminController@show_profile_settings'); 
	Route::post('settings/profile','AdminController@save_profile_settings'); 
	Route::post('send/mail','EmailController@send_mail');
	Route::post('case/save','AdminController@save_case');
	Route::post('case/delete','AdminController@delete_case');
	Route::get('case/edit/{case_id}','AdminController@edit_case');

	Route::post('save/file','AdminController@save_file');


});
Route::get('zohoverify/verifyforzoho.html',function(){
	echo "1500995617029";
});
Route::get('privacy','PageController@show_privacy');
Route::get('logout','PageController@getLogout');
Route::get('login','Auth\AuthController@getLogin');
Route::post('login','Auth\AuthController@postLogin');
// Route::get('sector','PageController@show_industries');
Route::get('case/{id?}','PageController@show_cases');
Route::get('mission','PageController@show_mission');
Route::get('team','PageController@show_team');
Route::get('service/{id?}','PageController@show_service');
Route::get('sector/{id?}','PageController@show_sector');
Route::get("/",'PageController@landing');
Route::get('blog/{id?}','PageController@show_blog');
Route::get('contact','PageController@show_contact');
Route::post('contactus','PageController@save_contact');
Route::get('work','PageController@show_work');
Route::get('case/pdf/download/{id}','PageController@download_pdf');
Route::get('funding','PageController@show_funding');