<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function get() {
        return view('signup');
    }

    public function index(Request $request){
        // using request to grab email specifically
       $array['email'] = "required|email";
       $array['password'] = "required|min:4";

       $validate = $request->validate($array);
       print_r($validate);
       return view("signup");
    }
}
