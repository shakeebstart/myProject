<?php

namespace App\Http\Controllers;

use App\Models\Proudcts;
use Illuminate\Http\Request;

class ProudctsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function proudcts()
    {
        $result=Proudcts::all();
        return view('admin.layout.proudcts',compact('result'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_proudcts()
    {
        
        return view('admin.layout.manage_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function manage_proudcts_process(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required'
        ]);
         $model=new Proudcts();
         $model->category_id=$request->post('category_id');
            $model->name=$request->post('name');
            if($request->hasFile('image')){
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('public/images',$filename);
                $model->image=$filename;
            }
            $model->slug=$request->post('slug');
            $model->brand=$request->post('brand');
            $model->model=$request->post('model');
            $model->short_desc=$request->post('short_desc');
            $model->desc=$request->post('desc');
            $model->keywords=$request->post('keywords');
            $model->technical_specification=$request->post('technical_specification');
            $model->uses=$request->post('uses');
            $model->warranty=$request->post('warranty');
            $model->save();
            session()->flash('message','successfully updated');
            return redirect()->intended('proudcts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proudcts  $proudcts
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id)
    {
       $model=Proudcts::find($id);
        $model->delete();
        session()->flash('message','successfully deleted');
        return redirect('proudcts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proudcts  $proudcts
     * @return \Illuminate\Http\Response
     */
    public function edit(Proudcts $proudcts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proudcts  $proudcts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proudcts $proudcts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proudcts  $proudcts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proudcts $proudcts)
    {
        //
    }
}
