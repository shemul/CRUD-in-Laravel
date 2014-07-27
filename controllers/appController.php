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
		return View::make('home');
	}
	public function getCreate()
	{
		return View::make('create');
	}
	public function postCreate()
	{
		return View::make('home');
	}
	public function getView()
	{
		return View::make('view');
	}
	public function getUpdate()
	{
		return View::make('update');
	}
	public function getDelete()
	{
		return View::make('delete');
	}
	public function postDeleteact()
	{
		$name = Input::get('name');
		$result = DB::delete('SELECT * FROM test_table where name = "hi" ');
		if ($result == 0 ) {
			return "Successfully Deleted ! " . $result;
		} else {
			return "Unsuccessfullt ";
		}

		
	}
	
}
