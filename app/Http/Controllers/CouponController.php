<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Coupon::all();
        return view('admin.layout.Coupon',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_coupon()
    {
        return view('admin.layout.manage_coupon');
        
    } 
     public function manage_coupon_process(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'code'=>'required|unique:Coupons,code',
            'value'=>'required',

        ]);
        // if (Auth::attempt(['category_name' =>$request->category_name, 'category_slug' =>$request->category_slug])) {
    
        //     // Authentication passed...
        //     return redirect()->intended('category');
        //  }else{
        //      return redirect()->back();
        //  }
        $model=new Coupon();
        $model->title=$request->post('title');
        $model->code=$request->post('code');
        $model->value=$request->post('value');
        $model->save();
        session()->flash('message', 'Coupon successfully updated.');
        
        return redirect()->intended('coupon');
        // dd($request->all());
    }
    public function delete(Request $request,$id){
        $model=Coupon::find($id);
        $model->delete();
        session()->flash('message', 'Coupon successfully deleted.');
        return redirect()->intended('Coupon');

    }  
    public function status(Request $request,$status,$id){
        $model=Coupon::find($id);
        $model->status=$status;
        $model->save();
        // dd($model);
        session()->flash('message', 'coupen status updated.');
        return redirect()->intended('coupon');
    }
   
    public function edit($id){
        $model=Coupon::find($id);
        $model->edit();
        return redirect()->intended('category');
        
    }
    public function update(Request $request,$id){
        $model=Coupon::find($id);
        $model->title=$request->post('title');
        $model->code=$request->post('code');
        $model->value=$request->post('value');
        $model->save();
        Session()->flash('message','successfully updated');
        return redirect()->intended('coupon');
 
    }
}
