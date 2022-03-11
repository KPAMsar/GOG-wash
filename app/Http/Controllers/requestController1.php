<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry_request;
use math;
use Auth;

class requestController extends Controller
{
    public function call(){
        return view('client.call');
    }

    public function placeRequest()
    {

        $unique = md5('Auth::user()->name'.Auth::user()->created_at);



        laundry_request::create([
            'request_id' => $unique ,
            'firstname' => Auth::user()->firstname,
            'lastname' => Auth::user()->lastname,
            'email' => Auth::user()->email,
            'status' => 0,
            'phone' => Auth::user()->phone,
            'items' => Auth::user()->items,
        ]);
        return redirect()->route('client.dashboard')->with('success','Request was sent successfully,Our customer care will get in touch with you.');

    }
    public function showRequest(){
        $data = laundry_request::where('status','0')->get();
         return view('staff.request',['data'=> $data]);
     }



    public function request(Request $request ){
        laundry_request::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'role' => 0,
            'password' => Hash::make($data['password']),

        ]);
        return redirect()->route('admin.admin_staff')->with('success', 'Staff Admin added successfully');

    }
    public function confirmed(){
        $data = laundry_request::where('status','1')->get();
        return view('admin.confirmed',['data'=>$data]);
    }
    public function delivered(){
        $data = laundry_request::where('status','4')->get();
        return view('admin.delivered',['data'=>$data]);
    }


    public function updateConfirmed(Request $request,$id){
        $data = laundry_request::find($id);
        $data->request_id = $data->request_id;

        $data->email= $request->email;
        $data->status= '1';
        $data->phone= $request->phone;
        $data ->update();
        return redirect()->route('staff.request')->with('success','Item confirmed successfully');


    }

    public function  requestConfirmation($id){
        $data = laundry_request::find($id);
        return view('admin.request-update',['data'=>$data]);
    }


    public function  deliveredConfirmation(Request $request,$id){
        $data = laundry_request::find($id);
        $data->request_id = $data->request_id;

        $data->email= $request->email;
        $data->status= '4';
        $data->phone= $request->phone;
        $data ->update();
        return redirect()->route('staff.request')->with('success','Item confirmed successfully');


    }
    public function  showdeliveredConfirmation($id){
        $data = laundry_request::find($id);

        return view('admin.request-update',['data'=>$data]);





    }


}
