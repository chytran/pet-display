<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\People;

class UserController extends Controller
{
    //
    public function index($id = null) {

        $stuff['id'] = $id;
        if($id) {
            $data = People::where('id', $id)->get();
        } else {
            $data = People::all();
        }
        
        $arr['data'] = $data;

        return view('user', $arr);
        // echo "This is from the user controller";
        // return view('user');
    }
}
