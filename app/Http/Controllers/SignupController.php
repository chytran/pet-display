<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function index(Request $request){
        // using request to grab email specifically
       print_r($request->input("email"));
       $array['email'] = "required";
       $validate = $request->validate($array);
       return view("signup");
    }
}
