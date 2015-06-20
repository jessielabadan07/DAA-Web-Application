<?php

class HomeController extends BaseController {

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

	public $restful = true;

	// /public/home
	public function index(){
		return "Welcome, DAA!";
	}

	public function about(){
		return view('home.about');
	}

	public function get_index(){
		$title = "DAA Page";
		$View = View::make('home.index', array(
			'name'=> 'Jess',
			'url' => 'http://www.jessielabadan.com'
		))->with('title',$title);
		return $View;
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

}
