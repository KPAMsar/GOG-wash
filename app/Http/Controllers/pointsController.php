<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pointsController extends Controller
{
    public function index(){

        return view('client.gogpoints');
    }
}
