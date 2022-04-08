<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\Models\transaction;
use App\Models\orderItems;
use App\Models\point;
use App\Models\debited;
use Auth;
use App\Models\laundry_request;
use GuzzleHttp\Client;

class PaymentController extends Controller
{


    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
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
            $phone_num="2348167096341";
            $message=" Helllooo you have a laundry request from $firstname  $lastname,Reach customer through $email or   $phone_number .Thank you." ;

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

    public function updatePoint($id){
        $data = point::find($id);
        $data->points = '600';
        $data ->update();

    }



    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback(Request $request)
    {
        $paymentDetails = Paystack::getPaymentData();

        //  dd($paymentDetails["data"]["status"]);

        $phone =laundry_request::where('email','=',Auth::user()->email)->get('phone')->first();


         $data = new transaction;
         $data->laundry_request_id = '00';
         $data->email = Auth::user()->email;
         $data->firstname =Auth::user()->firstname;
         $data->lastname = Auth::user()->lastname;
         $data->phone=  $phone;
         $data->mode_of_payment = 'paystack';
         $data->amount = $paymentDetails["data"]["amount"];
         $data->payment_staus = $paymentDetails["data"]["status"];
         $data->reference_no = $paymentDetails["data"]["reference"];
         $saved = $data ->save();

         if($saved){
            // $this->sendSmsToSimBank('' ,  '');
            $oldordertitems = orderItems::where('email','=',Auth::user()->email)->delete();
            orderItems::destroy($oldordertitems);

            $Email = Auth::user()->email;
            $pointCheckeEmail=transaction::where('email','=',$Email)->count();
            if($pointCheckeEmail >= 1 )
            {

                // $Email = point::where('email','=',$Email)->first();
                $id = point::find(Auth::user()->id);
                dd($id);
                // $data = point::find($id);
                // $data->points = '600';
                // $data ->update();

            }
            else{
                dd('false');
            }
            //  return redirect('client/dashboard')->with('success','Transaction successful 😍 😁🥰 ');


         }





        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want

    }



    public function index(){
        return view('client.payform');
    }

    public function payWithCash(){
        $phone =laundry_request::where('email','=',Auth::user()->email)->get('phone')->first();
        $amount = orderItems::where('email','=',Auth::user()->email)->sum('price');
        $data = new transaction;
        $data->laundry_request_id = '00';
        $data->email = Auth::user()->email;
        $data->firstname =Auth::user()->firstname;
        $data->lastname = Auth::user()->lastname;
        $data->phone=  $phone;
        $data->mode_of_payment = 'cash';
        $data->amount = $amount;
        // $data->amount = '000';
        $data->payment_staus = 'pending';
        $data->reference_no = 'paid with cash';
        $saved = $data ->save();

        if($saved){
             //$this->sendSmsToSimBank('' ,  '');
            $oldordertitems = orderItems::where('email','=',Auth::user()->email)->delete();
            orderItems::destroy($oldordertitems);

            $Email = Auth::user()->email;
            $pointCheckeEmail=transaction::where('email','=',$Email)->count();
            if($pointCheckeEmail = 1 )
            {

                // $Email = point::where('email','=',$Email)->first();

                // $mid = point::where('email',Auth::user()->email)->get('id');

                // $id = point::where('id','=',$mid)->first();


                $affectedRows = point::where("email",  Auth::user()->email)->update(["points" => "20"]);





            }
            else{
                dd('false');
            }

            $oldordertitems = orderItems::where('email',Auth::user()->email)->get();
            orderItems::destroy($oldordertitems);

            return redirect('client/dashboard')->with('success',"Thank you for  patronising us!!! Kindly note that you'll have to make your payment with cash 😍 😁🥰 ");


        }







    }

    public function payWithcrypto(){
        $phone =laundry_request::where('email','=',Auth::user()->email)->get('phone')->first();
        $amount = orderItems::where('email','=',Auth::user()->email)->sum('price');
        $data = new transaction;
        $data->laundry_request_id = '00';
        $data->email = Auth::user()->email;
        $data->firstname =Auth::user()->firstname;
        $data->lastname = Auth::user()->lastname;
        $data->phone=  $phone;
        $data->mode_of_payment = 'crpto';
        $data->amount = $amount;

        $data->payment_staus = 'pending';
        $data->reference_no = 'pay with crpto';
        $saved =$data ->save();

        if($saved){
            // $this->sendSmsToSimBank('' ,  '');

        $oldordertitems = orderItems::where('email',Auth::user()->email)->get();
        orderItems::destroy($oldordertitems);


        return redirect('client/dashboard')->with('success',"Thank you for  patronising us!!! Kindly note that you'll have to make your payment with Crypto 😍 😁🥰 ");



        }




    }


    public function paywithpoints(){
        $amount = orderItems::where('email','=',Auth::user()->email)->sum('price');

        $transactionAmount = transaction::where('email','=',Auth::user()->email)->where('mode_of_payment','=','pay with GOG Points')->sum('amount');
        $debit_total = debited::where('email','=',Auth::user()->email)->sum('points');


        $gogpoints = point::where('referal','=',Auth::user()->ref)->sum('points');



        $available_points = $gogpoints - $debit_total;


        if($available_points > $amount){
            $phone =laundry_request::where('email','=',Auth::user()->email)->get('phone')->first();
            $amount = orderItems::where('email','=',Auth::user()->email)->sum('price');

            $data = new transaction;
            $data->laundry_request_id = '00';
            $data->email = Auth::user()->email;
            $data->firstname =Auth::user()->firstname;
            $data->lastname = Auth::user()->lastname;
             $data->phone=  $phone;
             $data->mode_of_payment = 'points';
             $data->amount = $amount;
             $data->payment_staus = 'pending';
             $data->reference_no = 'pay with GOG Points';
             $saved =$data ->save();



             if($saved ){
                $save =  $debited_points = new debited;
                $debited_points->email = Auth::user()->email;
                $debited_points->points =  $amount;
                $debited_points->save();

            //  $this->sendSmsToSimBank('' ,  '');
             $oldordertitems = orderItems::where('email',Auth::user()->email)->get();
             orderItems::destroy($oldordertitems);
             return redirect('client/dashboard')->with('success',"Thank you for  patronising us!!! 😍 😁🥰 ");
             }
        }
        else{
            return back()->with('fail','You do not have enough GOG Points to make purchase.Kindly use other payment methods. Thank you.');
        }


        }








        //
        // else{
        //     return redirect();
        // }









}
