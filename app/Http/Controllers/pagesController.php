<?php

namespace App\Http\Controllers;
use App\Models\pages;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return pages::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'username'=> 'required',
            'password'=>'required'
        ]);

        return pages::create($request->all()
            // 'name'=>'kpamsar',
            // 'email'=>'kpamsarshija@gmail.com',
            // 'username'=>'kpam',
            // 'password'=>'111111'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return pages::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = pages::find($id);
        $new -> update($request->all());
        return $new;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return pages::destroy($id);
    }

      /**
     * SEARCH ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return pages::where('name','like','%'. $name.'%')->get();
    }
}
