<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function trash(){
        $trash=Category::onlyTrashed()->get();
        return view('admin.layout.trash',compact('trash'));
    }
    public function SoftDelete($id){
        $delete=Category::find($id)->delete();
        return redirect()->back();
        
    }
    public function restore($id){
        $trash=Category::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success','category restores successfully');
    }
    public function permenentdelete($id){
        $trash=Category::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }

}
