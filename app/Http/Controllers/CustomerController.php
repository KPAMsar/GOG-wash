<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        return view('customers.index',['data'=>$data]);
    }


    public function show()
    {
        return view('customers.create');
    }

      public function create(Request $data)
    {
         Customer::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'referal_code' => $data['referal_code'],
        ]);
        return redirect()->route('admin.dashboard')->with('success', 'Customer added successfully');

    }
    public function edit($id){
        $data = Customer::find($id);

        return  view('customers.edit',['data' =>$data ]);
   }

   public function update(Request $request,$id){
    $data = Customer::find($id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->referal_code = $request->referal_code;
        $data ->update();
        return redirect()->url('/customers')->with('success','Item updated successfully');


    }

    public function delete($id){
         return customer::delete($id);
        // $data = Customer::find($id);
        // return  view('customers.delete',['data' =>$data ]);
    }
    // public function delete($id){

    //     customer::delete($id);
    //     return  view('customers.delete',['data' =>$data ]);

    // }



}
