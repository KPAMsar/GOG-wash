<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry_request;
use App\Models\User;

use Auth;
use DB;

class adminController extends Controller
{
    public function index(){

        $totalcount = laundry_request::all()->count();
        $confirmedcount = laundry_request::where('status','=','1')->count();
        $deliveredcount = laundry_request::where('status','=','4')->count();
        $totalusers = User::all()->count();
        return view('admin.index',[
        'totalcount'=>$totalcount,
        'confirmedcount'=>$confirmedcount,
        'deliveredcount'=> $deliveredcount,
        'totalusers'=>   $totalusers,

    ]);
    }
}
