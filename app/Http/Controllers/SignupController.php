<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function index(){
       echo "This is the signup page";
       return view("signup");
    }
}
