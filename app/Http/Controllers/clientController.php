<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\laundry;
use App\Models\laundry_request;
use App\Models\point;
use Auth;
use App\Models\transaction;

class clientController extends Controller
{
    public function index(){
        $cartcount = Cart::where('email','=',Auth::user()->email)->count();
        $transaction = transaction::where('email','=',Auth::user()->email)->count();
        $count = laundry_request::where('email','=',Auth::user()->email)->count();
        $gogpoints = point::where('referal','=',Auth::user()->ref)->sum('points');
        $referal_code = Auth::user()->ref;

        return view('client.index',[
            'count'=>$count,
            'cartcount'=>$cartcount,
            'transaction'=>$transaction,
            'gogpoints'=> $gogpoints,
            'referal_code'=> $referal_code,
        ]);
    }

    public function profile(){
        $data = User::all();
        $gogpoints = point::where('referal','=',Auth::user()->ref)->sum('points');
        $gogreferalscount = point::where('referal','=',Auth::user()->ref)->count();

        
        return view('client.profile',[
        'data'=>$data,
        'gogpoints'=> $gogpoints,
        'gogreferalscount'=>$gogreferalscount,

    ]);
    }

    public function account(){
        $gogpoints = point::where('referal','=',Auth::user()->ref)->sum('points');
        $gogreferalscount = point::where('referal','=',Auth::user()->ref)->count();
        return view('client.account',[
            'gogpoints'=> $gogpoints,
            'gogreferalscount'=>$gogreferalscount,

        ]);
    }




    public function transactions(){

        $transaction_summary = transaction::where('email','=',Auth::user()->email)->get();




        return view('client.transaction',[
            'transaction_summary'=>$transaction_summary


        ]);
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
