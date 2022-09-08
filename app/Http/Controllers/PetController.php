<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pet;

class PetController extends Controller
{
    //
    function list() 
    {

        $data = DB::table('pet')->paginate(5);
        
        return view("petDisplay", ['data'=>$data]);
    }
}
