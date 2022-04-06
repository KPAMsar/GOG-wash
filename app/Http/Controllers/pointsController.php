<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gogpoint;
use App\Models\point;
use App\Models\User;
use App\Models\transaction;
use Auth;


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

    public function checkPoints(){

        $myref =Auth::user()->ref;
        $checkemail =  point::where('referal',$myref)->get('email');
        // $transactionCheck = transaction::where('email',$checkemail)->get();
         $transactionEmail = transaction::get('email');

        // foreach($checkemail as $email){
        //     $checkOnTransaction = transaction::where('email','=',$email)->get('email');
        //     if($checkOnTransaction){
        //         echo($checkOnTransaction);
        //     }
        //     else{
        //         dd('false');
        //     }
        // }


        // echo($checkemail);
        foreach($checkemail as )

    //     $check = transaction::where('email','=','Kpamsarsdfdfhija@gmail.com')->exists();
    //     if($check){
    //         dd('true');
    //     }
    //     else{
    //         dd('false');
    //     }


    // dd($a);




    }
}
