<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Getintouch;
use Illuminate\Http\Request;

class GetintouchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getintouch()
    {
        $result['data']=Contact::all();
        return view('admin.layout.getintouch',$result);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Getintouch  $getintouch
     * @return \Illuminate\Http\Response
     */
    public function show(Getintouch $getintouch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Getintouch  $getintouch
     * @return \Illuminate\Http\Response
     */
    public function edit(Getintouch $getintouch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Getintouch  $getintouch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Getintouch $getintouch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Getintouch  $getintouch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Getintouch $getintouch)
    {
        //
    }
}
