<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry_request;
use App\Models\User;
use App\Models\point;
use App\Models\transaction;

use Auth;
use DB;

class adminController extends Controller
{
    public function index(){
        $total_points = point::sum('points');
        $total_request = laundry_request::count();
        $total_inkobo = transaction::sum('amount');
        $total_amount =$total_inkobo/100;
        $totalcount = laundry_request::all()->count();
        $confirmedcount = laundry_request::where('status','=','1')->count();
        $deliveredcount = laundry_request::where('status','=','4')->count();
        $totalusers = User::all()->count();
        return view('admin.index',[
        'totalcount'=>$totalcount,
        'confirmedcount'=>$confirmedcount,
        'deliveredcount'=> $deliveredcount,
        'totalusers'=>   $totalusers,
        'total_amount'=> $total_amount,
        'total_request'=> $total_request,
        'total_points'=> $total_points,

    ]);


    }  public function transaction(){
        $alltransaction_summary = transaction::all();
        return view('admin.alltransaction',['alltransaction_summary'=>$alltransaction_summary]);
    }
}
