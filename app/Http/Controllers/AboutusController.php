<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function aboutus(){
        return view('aboutus');
    }
    public function aboutservice(){
        return view('aboutservice');
    }
    public function aboutdepartment(){
        return view('aboutdepartment');
    }
    public function services(){
        return view('services');
    }
    public function contactus(){
        return view('contactus');
    }

}