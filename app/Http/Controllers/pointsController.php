<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gogpoint;

class pointsController extends Controller
{
    public function index(){


        return view('client.gogpoints');
    }
    public function save(Request $request){




        $request_id = 'gogrequest'.rand(1111, 9999);

        $data = new gogpoint;
        $data ->request_id =  $request_id;
        $data ->firstname =  $request->fname;
        $data ->lastname =  $request->lastname;
        $data ->email =  $request->email;
        $data ->status =  'pending';
        $data ->phone =  $request->phonenumber;
        $data ->bank_name=  $request->bank;
        $data ->account_no =  $request->account;
        $data ->amount =  $request->points;

       $successful =  $data ->save();

       return redirect()->route('client.dashboard')->with('success','withdrawal request sent succesfully.');









    }
}
