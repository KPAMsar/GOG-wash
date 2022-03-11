<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry_request;

class staffController extends Controller
{
    public function index(){
        return view('staff.index');
    }

     public function showRequest(){
        $data = laundry_request::where('status','0')->get();
         return view('staff.request',['data'=> $data]);
     }
}
