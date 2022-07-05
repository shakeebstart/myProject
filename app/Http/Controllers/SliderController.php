<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Faker\Core\File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function slider()
    {
        $result['data']=Slider::all();
        return view('admin.layout.slider',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_slider()
    {
        return view('admin.layout.manage_slider');
    }
     public function manage_slider_process(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);
        $model=new Slider();
        $model->name=$request->post('name');
        $model->description=$request->post('description');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('public/images',$filename);
            $model->image=$filename;
        }
        $model->save();
        session()->flash('message','successfully updated');
        return redirect()->intended('slider');
    }
    public function delete(Request $request,$id){
       $model=Slider::find($id);
    //  $file='/public/images/'.$model->image;
     @unlink('public/images/'.$model->image);
        $model->delete();
    //  dd($path.$file);
  
     
       return redirect('slider');
    }
    public function editslide($id){
        $model=Slider::find($id);
        return view('admin.layout.editslide',compact('model'));
    }
   public function update(Request $request,$id){
    $model=Slider::find($id);
    // @unlink('public/images',$model('image'));+

    $model->name=$request->post('name');
    $model->description=$request->post('description');
    // $model->image=$request->post('image');
    if($request->hasFile('image')){
        @unlink('public/images/'.$model->image);
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('public/images',$filename);
        $model->image=$filename;
    }
    $model->update();
    session()->flash('message','successfully updated');
    return redirect()->intended('slider');
   }
   
}
