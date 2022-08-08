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
        $data = Customer::all();
        return view("listcustomer", ["data"=>$data]);
    }

    function deletecustomer($id){
        $cus = new Customer();
        $data = $cus->find($id);

        $data->delete();

        return redirect("listcustomer");
    }

    function editcustomer($id) {
        $cus = new Customer();
        $data = $cus->find($id);

        if(!$data) 
        {
            $data['name'] = "";
            $data["email"] = "";
            $data["age"] = "";
        }
        // Allows users to display the same data to edit
        return view("editcustomer",['data'=>$data]);
    }

    function updatecustomer(Request $req)
    {

        $validate = $req->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|numeric',
        ]);

        $cus = new Customer();
        $data = $cus->find($req->id);
        if($data) {
            $data->name = $req->name;
            $data->email = $req->email;
            $data->age = $req->age;
            $data->save();
        };
        
        return redirect("listcustomer");
    }
}
