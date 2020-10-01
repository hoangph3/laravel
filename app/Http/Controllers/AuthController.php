<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request['username'];
        $password = $request['password'];
        if(Auth::attempt(['username'=>$username, 'password'=>$password]))
        {
            if(Auth::user()->level == 1) 
            {
                return redirect('/admin');
            }
            else return redirect('/user');
        }
        else
            return view('login');
    }
}
