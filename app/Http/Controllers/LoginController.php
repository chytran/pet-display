<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    function index() {
        return view('login');
    }

    function login(Request $req) 
    {
        print_r('this is wrong');
        // $valid = $req->validate([
        //     'email'=>'required',
        //     'password'=>'required'
        // ]);

        // if (Auth::attempt($valid)) {
            $req->session()->regenerate();
 
            return redirect()->intended('petDisplay');
        // }

        // return redirect('petDisplay');
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
