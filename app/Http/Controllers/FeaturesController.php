<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function features()
    {
        $result['data']=Features::all();

        return view('admin.layout.features',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_features()
    {
        return view('admin.layout.manage_features');
    }  
    public function manage_features_process(Request $request)
    {
        $request->validate([
            'photo'=>'required',
            'heading'=>'required',
            'description'=>'required',
        ]);
        $data=new Features();
        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('public/photo',$filename);
            $data->photo=$filename;
        }
        $data->heading=$request->post('heading');
        $data->description=$request->post('description');
        $data->save();
        session()->flash('message','successfully submitted');
        return redirect()->intended('features');
    }

    
}
