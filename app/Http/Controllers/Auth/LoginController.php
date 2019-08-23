<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
class LoginController extends Controller
{
    public function login()
    {
return view('login');


    }
    public function postlogin(Request $request)
    {
        $user=Sentinel::authenticate($request->all());
        if($user)
        {
        return "mark";
    }
    else
    {
        return view('login')->with('message', 'wrong credentials');
    }

    }

    public function logout()
    {
        Sentinel::logout();
        return view('login');
    }
}