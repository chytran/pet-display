<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function add() {
        return view("addcustomer");
    }

    function addcustomer(Request $req) {

        $validate = $req->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|numeric',
        ]);

        // Saves input to database
        $cus = new Customer();
        $cus->name = $req->name;
        $cus->email = $req->email;
        $cus->age = $req->age;
        $cus->save();

        return view("addcustomer");
    }

    function list(){
        $data = Customer::paginate(2);
        return view("listcustomer", ["data"=>$data]);
    }
}
