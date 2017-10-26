<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;
use App\Http\Requests\SessionRequest;
use Alert;

class SessionsController extends Controller
{
    public function login()
    {
        if ($user = Sentinel::check())
        {
    	Alert::success("You has login ".$user->email);
        return redirect('/');
        } else 
        {
        return view('auth.login');
        }
    }
    public function login_store(SessionRequest $request)
    {
        if($user = Sentinel::authenticate($request->all())) 
        {
        	Alert::success("Welcome ".$user->email);
            return redirect()->intended('/');
        } else 
        {
			Alert::error("Login fails");
            return view('auth.login');
        }
    }
    public function logout() 
    {
        Sentinel::logout();
        Alert::success("Logout success");
        return redirect('/');
    }
    
}
