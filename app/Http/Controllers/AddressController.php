<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AddressController extends Controller
{
    public function address(){
        
        $result['data']=Address::all();
        return view('admin.layout.address table',$result);
    }
    public function manage_address(){
        return view('admin.layout.mange_adress');
    }
    public function manage_address_process(Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'place'=>'Required',
            'pin'=>'required',

        ]);
       $data= new Address; 
       $data->name=$request->post('name');
       $data->address=$request->post('address');
       $data->place=$request->post('place');
       $data->pin=$request->post('pin');
       $data->save();
       session()->flash('message', 'address successfully updated.');
        
       return redirect()->intended('address');
    }
}