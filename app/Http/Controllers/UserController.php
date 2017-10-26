<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;
use App\Http\Requests\UserRequest;
use Alert;

use Illuminate\Http\Request;
// Alert::success('Job Applicant success updated');        
class UserController extends Controller
{
	public function signup()	{
		return view('auth.signup');
	}

    public function signup_store(UserRequest $request)
    {
        //// below code will register and automatic activate accoun
        $fill = [           
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password
        ];

        $defaultUser = Sentinel::registerAndActivate($fill);

        $defaultRole = Sentinel::findRoleByName('applicant');
        
        $defaultUser->roles()->attach($defaultRole);

        Alert::success('Registration Success');
        return redirect()->back(); 
    }

}
