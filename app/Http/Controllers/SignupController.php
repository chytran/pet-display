<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function index(Request $request){
       print_r($request->input("email"));
       return view("signup");
    }
}
