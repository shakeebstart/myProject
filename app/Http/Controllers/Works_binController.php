<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\Request;

class Works_binController extends Controller
{
    public function works_bin(){
        $works_bin=Works::onlyTrashed()->get();
        return view('admin.layout.works_bin',compact('works_bin'));

    }
    public function softdelete($id){
        $delete=Works::find($id)->delete();
        return redirect()->back();

    }
    public function restore_works($id){
        $works_bin=Works::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success','works restored successfully');
    }
    public function p_delete($id){
        $bin=Works::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }
}
