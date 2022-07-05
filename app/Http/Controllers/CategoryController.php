<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= Category::all();
        // $trash = Category::onlyTrashed()->get();
        return view('admin.layout.category', compact('result'));
    }
    // public function SoftDelete($id){
    //     $delete=Category::find($id)->delete();
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_category()
    {
        return view('admin.layout.manage_category');

    }
    public function manage_category_process(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories',
        ]);
        // if (Auth::attempt(['category_name' =>$request->category_name, 'category_slug' =>$request->category_slug])) {

        //     // Authentication passed...
        //     return redirect()->intended('category');
        //  }else{
        //      return redirect()->back();
        //  }
        $model = new Category();
        $model->category_name = $request->post('category_name');
        $model->category_slug = $request->post('category_slug');
        $model->status = 1;
        $model->save();
        session()->flash('message', 'category successfully updated.');

        return redirect()->intended('category');
        // dd($request->all());
    }
    public function delete(Request $request, $id)
    {
        $model = Category::find($id);
        $model->delete();
        session()->flash('message', 'category successfully deleted.');
        return redirect()->intended('trash');

    }
    public function status(Request $request, $status, $id)
    {
        $model = Category::find($id);
        $model->status = $status;
        $model->save();
        // dd($model);
        session()->flash('message', 'category status updated.');
        return redirect()->intended('category');

    }
    public function edit($id)
    {
        $model = Category::find($id);
        // $model->edit();
        // return redirect()->intended('category');
        return view('admin.layout.edit', compact('model'));

    }
    public function update(Request $request, $id)
    {
        $model = Category::find($id);
        $model->category_name = $request->input('category_name');
        $model->category_slug = $request->input('category_slug');
        $model->save();
        Session()->flash('message', 'successfully updated');
        return redirect()->intended('category');

    }

}
