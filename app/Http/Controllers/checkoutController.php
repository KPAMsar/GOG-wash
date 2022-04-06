<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry;
use App\Models\Cart;
use App\Models\point;
use App\Models\orderItems;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    public function index(){

        $data = Cart::where('email',Auth::user()->email )->get();
        return view('client.checkout',['data'=>$data]);
    }
    public function showPaymentPage(){
        $amount = orderItems::where('email','=',Auth::user()->email)->sum('price');
        $gogpoints = point::where('referal','=',Auth::user()->ref)->sum('points');

        return view('client.paymentpage',[
            'amount'=>$amount,
            'gogpoints'=>$gogpoints,
        ]);
    }

    public function payWithCrypto(){
        return view('client.crypto');
    }
    public function payWithCash(){
        return view('client.cash');
    }
    public function showpayWithPoints(){
        $gogpoints = point::where('referal','=',Auth::user()->ref)->sum('points');

        return view('client.paywithpoints',['gogpoints'=> $gogpoints]);
    }

}
