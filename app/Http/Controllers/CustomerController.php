<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'email' => 'required',
            'age' => 'required|numeric',
        ]);

        // Saves input to database
        $cus = new Customer();
        $cus->name = $req->name;
        $cus->email = $req->email;
        $cus->age = $req->age;
        $cus->date = date("Y-m-d h:i:s");
        $cus->save();


        // $data = array();
        // $data['name'] = $req->name;
        // $data['email'] = $req->email;
        // $data['age'] = $req->age;
        // $data['date'] = date("Y-m-d h:i:s");

        // DB::table("customers")->insert($data);

        return redirect("listcustomer");
    }

    function list(){
        // $data = Customer::all();
        // $data = DB::table('customers')->get();

        // return view("listcustomer", ["data"=>$data]);
        $data = Customer::all();

        return view("listcustomer", ['data'=>$data]);
    }

    function deletecustomer($id){
        // $cus = new Customer();
        // $data = $cus->find($id);

        // $data->delete();
        
        DB::table('customers')->where('id',$id)->delete();

        //prepared statement form
        // DB::statement('delete from customers where id = :id', ['id'->$id]);

        return redirect("listcustomer");
    }

    function editcustomer($id) {
        // $cus = new Customer();
        // $data = $cus->find($id);

        // if(!$data) 
        // {
        //     $data['name'] = "";
        //     $data["email"] = "";
        //     $data["age"] = "";
        // }
        // Allows users to display the same data to edit
        $data = DB::table("customers")->find($id);
        return view("editcustomer",['data'=>$data]);
    }

    function updatecustomer(Request $req)
    {

        $validate = $req->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|numeric',
        ]);

        // $cus = new Customer();
        // $data = $cus->find($req->id);
        // $data = DB::table("customers")->find($req->id);

        // if($data) {
        //     $data->name = $req->name;
        //     $data->email = $req->email;
        //     $data->age = $req->age;
        //     $data->save();
        // };

        // Where clause for updates
        DB::table("customers")->where('id', $req->id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
        ]);

        return redirect("listcustomer");
    }
}
