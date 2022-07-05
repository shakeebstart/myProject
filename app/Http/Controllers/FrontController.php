<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Features;
use App\Models\Getintouch;
use Database\Seeders\LoginSeeder;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Works;
use App\Models\Home;
use App\Models\Specification;
use App\Models\Front;
// use Illuminate\Auth\Events\login
use Illuminate\Support\Facades\Hash;


class FrontController extends Controller
{
    public function home(){
    
        $result['data']=Product::all();
        // return view('home',$result);
        // $data=Slider::all();

        
        $result=Slider::all();
        
        $model=Works::all();
        $spec=Specification::all();
        $data=Features::all();
        return view('home',compact('model','spec','data','result'));
    }
    // public function slider(){
    //     $result=Slider::all();
    //     return view('slider',compact($result));
    // }
   
public function contact (Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'number'=>'required',
        'message'=>'required',
    ]);
   
    $data= new Contact();
    $data->name=$request->name;
    $data->email=$request->email;
    $data->number=$request->number;
    $data->message=$request->message;
    $data->save();
    session()->flash('message','successfully updated');
    return redirect('/');
    
    }
   
    }


