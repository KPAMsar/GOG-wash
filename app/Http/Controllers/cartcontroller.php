<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class cartcontroller extends Controller
{
    public function index(){
        $data = laundry::all();
        return view('client.cartitems',['data'=>$data]);
    }
    public function addtocart(Request $request){

        // $item_qty = $request->input('item_qty');
        // $item_id = $request->input('item_id');


        // if(Auth::check()){

        //     $item_chk = laundry::where('item',$item_id )->first();
        //     if( $item_chk){
        //         if(cart::where('item',$item_id)->where('email', Auth::email())->exists()){
        //             return response()->json(['status'=> $item_chk ->item. "already exits in cart."]);
        //         }
        //         else{
        //             $data = new cart;
        //             $data ->email = Auth::user()->email;
        //             $data ->item_qty = $request ->input('item_qty');
        //             $data ->item_id = $request ->input('item_id');
        //             $data -> save();
        //             return response ()->json(['status'=> $item_chk ->item . "Added to cart"   ]);
        //         }
        //     }
        // }
        // else{
        //     return response()->json(['status'=>"Login to continue"]);
        // }


    }
    public function addtocartt(Request $request, $id){
        //   $item = laundry::find($id,['item']);
        //   $price =laundry::find($id,['price']);
         $item_qty = $request-> item_quantity_;
        if(Auth::check()){

            $item_check = cart::where('item_qty','=',$item_qty)->where('email',Auth::user()->email)->first();
            if($item_check){
                return back()->with('success','Already inside the laundry cart' );}
            else{

                $data = new cart;
           $data ->email = Auth::user()->email;
           $data ->item_qty = $item_qty;
           $data ->item_id = $request->item_id;
           $save = $data -> save();

           if( $save){
               return back()->with('success', 'Item added to your laundry cart successfuly.');
           }
           else{
            return back()->with('error', 'Error while trying to add item to laundry cart');
           }

            }
        }





    }

    public function cart(){
        $data = Cart::where('email',Auth::user()->email )->get();

         return view('client.cart',['data'=>$data]);
    }


    Public function remove($id){
        $delete_id = Cart::find($id);
        $delete_id->delete();
        return back()->with('success','Item removed from cart succesfully');
    }



}
