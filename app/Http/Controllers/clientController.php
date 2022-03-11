<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\laundry;
use App\Models\laundry_request;
use Auth;

class clientController extends Controller
{
    public function index(){
        $count = laundry_request::where('email','=',Auth::user()->email)->count();
        return view('client.index',['count'=>$count]);
    }

    public function profile(){
        $data = User::all();
        return view('client.profile',['data'=>$data]);
    }

    public function account(){
        return view('client.account');
    }




    public function transactions(){
        $req = laundry_request::where('email','=',Auth::user()->email)->count();
        return view('client.transaction',['req'=>$req]);
    }
    public function call(){
        return view('client.call');
    }

    public function showEdit($id){
        $data =User::find($id);

        return  view('client.edit',['data' =>$data ]);
    }

    public function update(Request $request,$id){
        $data = User::find($id);
            $data->firstname = $request->firstname ;
            $data->lastname = $request->lastname;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data ->update();
            return redirect()->route('client.profile')->with('success','profile updated successfully');


    }
    public function sendRequest(){
        $data = laundry::all();

        return view('client.request',['data'=>$data]);
    }







}
