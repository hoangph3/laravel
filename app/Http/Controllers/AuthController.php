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
            session()->put('id', Auth::user()->id);
            session()->put('username', $username);
            session()->put('level', Auth::user()->level);

            if(Auth::user()->level == 1) return redirect('users');            
            else return redirect('users');
        }
        else
            return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
