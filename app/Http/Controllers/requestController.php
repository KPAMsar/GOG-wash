<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry_request;
use math;
use Auth;
use App\Models\User;
use App\Models\laundry;
use App\Models\Cart;
use App\Models\orderItems;
use random_int;
use Nexmo\Laravel\Facade\Nexmo;



use Exception;
use Illuminate\Support\Facades\Log;

use GuzzleHttp\Client;



class requestController extends Controller
{
    public function call(){
        return view('client.call');
    }


    public function getHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];
    }

    public function sendSmsToSimBank(String $message, String $phone_num)
    {

        $firstname = Auth::user()-> firstname;
        $lastname = Auth::user()-> lastname;
        $email = Auth::user()-> email;
        $phone_number =laundry_request::where('email','=',Auth::user()->email)->get('phone')->first();

        try {
            $client = new Client(
                [
                    'base_uri' => "https://termii.com",
                ],
                [
                    'timeout' =>10,
                ]
            );
            $req= $data = new laundry_request;
            $phone_num="2349161814905";
            $message=" Helllooo you have a laundry request from $firstname   $lastname. You can reach customer through  $email or $phone_number .Thank you." ;

            // $phone_num represents the destination phone number. Phone number must be in the international
            // format (Example: 23490126727). You can also send to multiple numbers. To do that put numbers
            // in an array (Example: ["23490555546", "23423490126999"]
            $params = array("to" => $phone_num,"from" => "GOG Wash",

            "sms"=>$message,"type" => "plain","channel" => "generic","api_key" => "TLcLnChh9cq51M92Pkd7YqXDIZbehEtenBwrNloleOir9YgWgy71viGMJnOv8w");




            $data = $client->post(
                "/api/sms/send",
                [
                    'headers' => $this->getHeaders(),
                    'json' => $params
                ]
            );


            echo "point 3";
            $response = [
                'status' => $data->getStatusCode(),
                'data' => json_decode($data->getBody()->getContents(), true),
            ];

            if ($response['status'] == 200 || $response['status'] == 'success') {
               echo "sms message sent";
                return true;
            }
            $this->error($response['data']);
            return false;
        } catch (\GuzzleHttp\Exception\ServerException $se) {
            $body = $se->getResponse()->getBody();
            $this->error($body);
            return false;
        } catch (\GuzzleHttp\Exception\ConnectException $ce) {
            $this->error($ce);
            return false;
        }

        /**
         * Demo success response
         *

         *     {
         *        "message_id": "9122821270554876574",
         *        "message": "Successfully Sent",
         *       "balance": 9,
         *        "user": "Peter Mcleish"
         *     }
         *
         *
         */

    }

    public function placeRequest(Request $request )
    {


        $seed = '123456789'; // a password that both the parent and source have
        $string = md5(time().$seed);

        $unique = md5($string);
        $unique1 = 'gog'.rand(1111, 9999);



        $req= $data = new laundry_request;
             $data->request_id = $unique1;
             $data->firstname = Auth::user()->firstname;
             $data ->lastname =Auth::user()->lastname;
             $data ->email = Auth::user()->email;
             $data->address =$request->address;
             $data->status = 0;
             $data->total= '1';

             $data->phone = $request->phone;


             $data -> save();




             $cartitems = Cart::where('email', Auth::user()->email)->get();
                foreach($cartitems as $item)
                 {
                orderItems::create([
                    'email'=> Auth::user()->email,
                    'request_id'=> $data->request_id,
                    'item_id'=> $item->item_id,
                    'price'=>$item->laundrys->price,
                    'item_qty'=> $item->item_qty,

                ]);

                  }


                 if(Auth::user()->address == NULL){
                     $user = user::where('email',Auth::user()->email)->first();
                    $user->firstname = Auth::user()->firstname;
                    $user->lastname =Auth::user()->lastname;
                    $user->email = Auth::user()->email;
                    $user->address =$request->address;
                    $user->status = 0;

                    $user ->phone = $request->phone;

                 }

                 $oldcartitems = Cart::where('email',Auth::user()->email)->get();
                 Cart::destroy($oldcartitems);





        //    return $aa;

        //  $req=  laundry_request::create([
        //      'request_id' => $unique ,
        //      'firstname' => Auth::user()->firstname,
        //      'lastname' => Auth::user()->lastname,
        //      'email' => Auth::user()->email,
        //      'address' => $request['address'],
        //      'status' => 0,
        //      'phone' => $request['phone'],
        //      'items' => $request['items'],
        //  ]);


         if($req){


             // $this->sendSmsToSimBank('' ,  '');







          return redirect()->route('payment.page');

      }

    }


    // Saving to  cart first of all



    public function showCart(){
        // $data = cart::where('email','=',Auth::user()->email)->get();
        // $data = cart::all();
        $data = cart::all();

         return view('client.checkout',['data'=> $data]);
    }




    public function cart(Request $request )
    {


        $seed = '123'; // a password that both the parent and source have
        $string = md5(time().$seed);

        $unique = md5($string);


        $laundry_items = laundry::all();

        $req= $data = new cart;
             $data->cart_id = $unique;
             $data->firstname = Auth::user()->firstname;
             $data ->lastname =Auth::user()->lastname;
             $data ->email =Auth::user()->email;
             $data->address =$request->address;
             $data->status = 0;
             $data->phone = $request->phone;

             $aa = $data->items = $request->items;
             $data -> save();



         if($req){


            // $this->sendSmsToSimBank('' ,  '');

          return redirect()->route('client.dashboard')->with('success','Request was sent successfully,Our customer care will get in touch with you.');

      }

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
        return redirect()->route('admin.confirmed-request')->with('success','Item confirmed successfully');


    }
    public function  showdeliveredConfirmation($id){
        $data = laundry_request::find($id);

        return view('admin.delivered-update',['data'=>$data]);





    }
    public function itemlist(){
        $data = laundry::all();
        return  view('client.itemlist',['data'=>$data]);
    }

    public function showcheckout(){
        return view('client.checkout');
    }

}
