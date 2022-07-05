<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seller_login()
    {
        return view('admin.layout.seller.seller_login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function authenticate(Request $request){
        // dd($request->all());
        $request->validate([
            'email'=>'require',
            'password'=>'required'
        ]);
 

    $email = $request->email;
        $password = $request->password;
        // dd($email);
        // dd('admin/dashboard');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            
            return redirect()->intended('admin/dashboard');

        } else {
      
            return back()->withErrors(['message' => 'password or email is not matched']);

        }
    }

}
  

