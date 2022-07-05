<?php

namespace App\Http\Controllers;

use App\Models\Specification;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    public function specification(){
        $result['data']=Specification::all();
        return view('admin.layout.specification',$result);
    }
    public function manage_specification(){
        return view('admin.layout.manage_specification');
    }
    public function manage_specification_process(Request $request){
        $request->validate([
            'image'=>'required',
            'heading'=>'required',
            'description'=>'required',
            'more'=>'required',
        ]);
        
        $spec=new Specification();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('public/photo',$filename);
            $spec->image=$filename;
        }
        $spec->heading=$request->post('heading');
        $spec->description=$request->post('description');
        $spec->more=$request->post('more');
      
        $spec->save();
        session()->flash('message','successfully updated');
        return redirect()->intended('specification');
        
    }
}
