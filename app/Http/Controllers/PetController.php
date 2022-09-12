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

    public function displayAddPet() 
    {
        $validated = $req->validate([
            "file" => "required|image"
        ]);

        $path = $req->file('file')->store('myuploads');
        echo $path;
        return view("addPet");
    }

    function addPet()
    {
        return view("addPet");
    }
}
