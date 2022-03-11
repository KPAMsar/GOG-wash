<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){
        if(Auth()->user()->role == 0){
            return redirect()->route('client.dashboard')->name('client');
        }
        elseif(Auth()->user()->role == 1){
            return redirect()->route('staff.dashboard')->name('staff');
        }
        elseif(Auth()->user()->role == 2){
            return redirect()->route('admin.dashboard')->name('admin');
        }

    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {
        $data = $request->all();

        $this->validate($request,[
        'email'=>'required',
        'password'=>'required'
        ]);

        if(auth()->attempt(array('email'=>$data['email'], 'password'=>$data['password'])))
        {
            if(auth()->user()->role == 0){
                return redirect()->route('client.dashboard');
            }
            elseif(auth()->user()->role == 1){
                return redirect()->route('staff.dashboard');
            }

            elseif(auth()->user()->role == 2){
                return redirect()->route('admin.dashboard');
            }
            else{
                auth()->redirect()->back();
            }
            $user = Auth::User();
            Session::put('user', $user);
            $user=Session::get('user');




        }
        else{
            return redirect()->back()->with('error','Check your details and try again');
        }




    }
}
