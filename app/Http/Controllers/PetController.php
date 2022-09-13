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
    
        return view("addPet");
    }

    function addPet(Request $req)
    {

        $validated = $req->validate([
            'name'=>'required',
            'breed'=>'required'
            // "file" => "required|mimes:jpg,png,bmp"
        ]);

        $pet = new Pet();
        // $pet->insert([
        //     'name'=>$req->input('name'),
        //     'breed'=>$req->input('breed'),
        //     // 'date'=>$req->input('date')
        // ]);
        $pet->name = $req->name;
        $pet->breed = $req->breed;
        $pet->date = date("Y-m-d h:i:s");
        $pet->save();

        // $validate = $req->validate($array);

        // $path = $req->file('file')->store('myuploads');
        // echo $path;
        return redirect("petDisplay");
    }
}
