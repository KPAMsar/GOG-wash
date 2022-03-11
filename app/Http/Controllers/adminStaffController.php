<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\laundry_request;
use Illuminate\Support\Facades\Hash;

use DB;

class adminStaffController extends Controller
{
    public function index(){
        $data = laundry_request::all();

        return view('admin.admin_staff.index',['data'=>$data]);
    }



    public function show()
    {
        return view('admin.admin_staff.create');
    }


     public function create(Request $data)
    {
         User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'role' => 1,
            'password' => Hash::make($data['password']),

        ]);
        return redirect()->route('admin.admin_staff')->with('success', 'Staff Admin added successfully');

    }



}

