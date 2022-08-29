<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    //
    function list() 
    {

        $data = Pet::all();
        
        return view("petDisplay", ['data'=>$data]);
    }
}
