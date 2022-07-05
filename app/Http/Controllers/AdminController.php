<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');

    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function getdata(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        // dd($password);

        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            return redirect()->intended('admin/dashboard');

        } else {
            // $request->session()->flash('error', 'password or email is not matched');
            // Session::flash('error', 'password or email is not matched');
            return back()->withErrors(['message' => 'password or email is not matched']);

        }
    }
    public function change_password()
    {
        return view('admin.change_password');
    }
    public function update_password(Request $request)
    {
     $validateData=$request->validate([
        'old_password'=>'required|min:4|max:100',
        'password'=>'required|min:4|max|100',
        'confirm_password'=>'required|same:new_password'
     ]);


        $change_password = Auth::user()->password;
        // dd($change_password);

        if (Hash::check($request->old_password, $change_password)) {
            // dd($change_password);
            $model = User::find(Auth::user()->id);
            // dd($model);

            $model->password = Hash::make($request->password);
            $model->save();
            //when we change password it automatically logout (code)
            Auth::logout();
            return redirect()->route('login')->with('success', 'password is changed successfully');
        } else {
            session()->flash('error', 'current password is invalid');

            return redirect()->back()->with('error', 'current password is invalid');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
    public function createaccount()
    {
        return view('admin.createaccount');

    }

}
