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

route::get('apps', 'appController@getIndex');
route::get('apps/create', 'appController@getCreate');
route::post('apps/save', 'appController@postSave');