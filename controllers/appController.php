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
		$result = Person::create(['id'=>'12','name'=>'hi']);
		
	}
	public function postCreate()
	{
		return View::make('home');
	}
	public function getView()
	{
		$result = Person::all();
		die(var_dump($result->toArray()));
	}
	public function getUpdate()
	{
		return View::make('update');
	}
	public function getDelete()
	{
		$result = Person::delete(['name'=>'hi']);
	}
	public function postDeleteact()
	{
		
		

		
	}

	public function getShow($name)
	{
		//$result = DB::table('people')->find($name);
		$result = Person::find($name);
	//	die(var_dump($result->toArray()));
		if (null == $result) {
			return "Errrr";
		} else {
			return $result->name;
		}
		
	}
	
}
