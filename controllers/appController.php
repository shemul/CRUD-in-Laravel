<?php

class appController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function getIndex()
	{
		$folks = DB::table('test_table')->get();
		return View::make('index');
	}
	public function getCreate()
	{
		return View::make('create');
	}

	public function postSave()
	{
		$name = Input::get('name');
		var_dump($name);
	}

}
