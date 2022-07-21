<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function index(Request $request){
       echo "This is the signup page";
       return view("signup");
    }
}
