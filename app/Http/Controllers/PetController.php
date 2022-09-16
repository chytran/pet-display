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
            'breed'=>'required',
            // "file" => "required|mimes:jpg,png,bmp"
        ]);

        

        

        if(!$validated) {
            return redirect()->back()->with(['message' => 'No file received']);
        } else {
            // $destination_path = 'public/img/';
            // $image = $request->file("image");
            // $image_name = $image->getClientOriginalName();
            // $path = $req->file('image')->storeAs($destination_path,$image_name);

            // $input['image'] = $image_name;

            $pet = new Pet();
        // $pet->insert([
        //     'name'=>$req->input('name'),
        //     'breed'=>$req->input('breed'),
        //     // 'date'=>$req->input('date')
        // ]);
            $path = $req->file('image')->store('myuploads');
            echo $path;
            $pet->name = $req->name;
            $pet->breed = $req->breed;
            $pet->date = date("Y-m-d h:i:s");
            $pet->image = $path;
            $pet->save();
            
            return view("addPet");
        }
        

        // $validate = $req->validate($array);

        // $path = $req->file('file')->store('myuploads');
        // echo $path;
        
    }
}
