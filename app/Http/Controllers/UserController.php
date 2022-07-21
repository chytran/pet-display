<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        echo "This is from the user controller";
        return view('user');
    }
}
