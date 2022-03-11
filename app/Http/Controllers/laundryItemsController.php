<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundry;

class laundryItemsController extends Controller
{
    public function index(){
        $data = laundry::all();
        return view('items.index',['data'=>$data]);
    }
    public function show(){

        return view('items.create');
    }
    public function create(Request $data){

        laundry::create([
            'item' => $data['item'],
            'price' => $data['price'],
            'express_laundry' => $data['express_laundry'],

        ]);
        return redirect()->route('admin.laundry-items')->with('success', 'Item added successfully');
    }

    public function showEdit($id){
        $data = laundry::find($id);
        return view('items.edit',['data'=> $data]);
    }

    public function update(Request $request,$id){
        $data = Customer::find($id);
            $data->item = $request->item;
            $data->price = $request->price;
            $data->express_laundry = $request->express_laundry;
            $data ->update();
            return redirect()->route('admin.laundry-items')->with('success','Item updated successfully');


    }


}
