<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry;

class frontendController extends Controller
{
   public function contactUs(){
       return view('frontend.contact');
   }

   public function prices(){
       $data =laundry::all();
    return view('frontend.pricing',['data'=> $data]);
    }

   public function clothes(){
    $data =laundry::all();
    return view('client.clothes',['data'=> $data]);
    }
    public function invoice(){
        $data =laundry::all();
        return view('client.invoice',['data'=> $data]);
    }

    public function invoiceCalculations(){

    }
}
