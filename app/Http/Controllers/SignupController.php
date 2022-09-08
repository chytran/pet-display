<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\People;

class SignupController extends Controller
{
    public function get() {
        return view('signup');
    }

    public function index(Request $req){
        // using request to grab email specifically
    //    $array['email'] = "required|email";
    //    $array['password'] = "required|min:4";

        $valid = $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $people = new People();
        $people->insert([
            'name'=>$req->input('name'),
            'email'=>$req->input('email'),
            'password'=>Hash::make($req->input('password'))
        ]);

       $validate = $req->validate($array);
       print_r($validate);
       return view("login");
    }
}
