<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/		

Route::get('/','appController@getIndex');
Route::get('app/create','appController@getCreate');
Route::get('app/view','appController@getView');
Route::get('app/update','appController@getUpdate');
Route::get('app/delete','appController@getDelete');
Route::post('app/create','appController@postCreate');
Route::post('app/delete/act','appController@postDeleteact');
Route::get('app/show/{name}','appController@getShow');