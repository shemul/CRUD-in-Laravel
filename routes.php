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
Route::get('/create','appController@getCreate');
Route::get('/view','appController@getView');
Route::get('/update','appController@getUpdate');
Route::get('/delete','appController@getDelete');
Route::post('/create','appController@postCreate');
Route::post('/delete/act','appController@postDeleteact');
