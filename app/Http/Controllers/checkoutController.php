<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    public function index(){

        $data = Cart::where('email',Auth::user()->email )->get();
        return view('client.checkout',['data'=>$data]);
    }
    public function checkoutcart(){
        //
    }
}
