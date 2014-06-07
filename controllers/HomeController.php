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

	public function showWelcome()
	{
		return View::make('start')->with('title','Welcome');
	}

	public function getIndex()
	{
		if(Auth::user()){
			$username = ucwords(Auth::user()->username);
			return View::make('profile')->with('title',$username);
		}
		return View::make('index')->with('title','Welcome');;
	}


	public function getLogin()
	{
		if(Auth::user()){
			$username = ucwords(Auth::user()->username);
			return View::make('profile')->with('title',$username);
		}

		return View::make('login')->with('title','Login');
	}


	public function getRegister()
	{
		if(Auth::user()){
			$username = ucwords(Auth::user()->username);
			return View::make('profile')->with('title',$username);
		}

		return View::make('register')->with('title','Register');
	}

	public function postRegister()
	{
		$input = Input::all();
		$rules = array('username' => 'required|unique:users','email' => 'required|unique:users|email','password' => 'required','dob' => 'required');
		$input['dob'] = $input['year'].'-'.$input['month'].'-'.$input['day'];
		$v = Validator::make($input,$rules);
		//Log::error(print_r($input,1));
		if($v->passes())
		{
			$password = $input['password'];
			$password = Hash::make($password);

			$user = new User();
			$user->username = $input['username'];
			$user->email = $input['email'];
			$user->password = $password;
			$user->dob = $input['dob'];
			$user->save();
			return Redirect::to('login')->with('title','Login');;

		}else{
			return Redirect::to('register')->withInput()->withErrors($v)->with('title','Login');
		}
	}

	public function postLogin()
	{
		$input = Input::all();
		$rules = array('email' => 'required|email','password' => 'required');
		$v = Validator::make($input,$rules);
		if($v->passes())
		{
			$password = $input['password'];
			$email = $input['email'];
			$credentials = array('email' => $input['email'], 'password' =>   $password);

			if(Auth::attempt($credentials))
			{
               
                $username = ucwords(Auth::user()->username);
			    return Redirect::to('profile')->with('title',$username);

			}
			else
			{
                 
				return Redirect::to('login')->with('title','Login');

			}
			
		}else{

            Log::error("failed validation");
			return Redirect::to('login')->withErrors($v)->with('title','Login');

		}
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/')->with('title','Welcome');;
	}

	public function getProfile()
	{
		if(Auth::user()){
			$username = ucwords(Auth::user()->username);
			return View::make('profile')->with('title',$username);
		}

		return Redirect::to('login')->with('title','Login');
	}

}