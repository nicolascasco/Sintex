<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest:admin', ['except' => ['logout']]);//cambiar esto para que sea 1 sola secion => guest o admin
	}

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	//validate form data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);
    	//attempt to login
    	if (Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)) {
    		//if succes the redirect
    		return redirect()->intended(route('admin.dashboard'));
    	}
    	//if unsuccesfull redirect to form with data
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }

}
