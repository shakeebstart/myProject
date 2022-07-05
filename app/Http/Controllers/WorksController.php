<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function works()
    {
        $result['data']=Works::all();
        return view('admin.layout.works',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_works()
    {
      return view('admin.layout.manage_works');  
    }
    public function manage_work_process(Request $request)
    {
        $request->validate([
            'photo'=>'required',
            'heading'=>'required',
            'description'=>'required',
        ]);
       
      
        $model= new Works();
        $model->heading=$request->post('heading');
        $model->description=$request->post('description');
        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('public/images',$filename);
            $model->photo=$filename;
        }
        $model->save();

        // $model->photo=$request->post('photo');

        
        session()->flash('message','successfully updated');
        return redirect()->intended('works');
    
    }
    public function delete(Request $request,$id){ 
        $model=Works::find($id);
        $model->delete();
        session()->flash('message','successfully deleted');
        return redirect()->back();

    }

}
