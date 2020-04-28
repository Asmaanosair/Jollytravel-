<?php

namespace App\Http\Controllers;
use Auth;
use App\client;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class Client_logincontroller extends Controller
{
    public function __construct()
    {
       // $this->middleware('client');
    }

 function index(){
     return view('website.myaccount');

 }


    public function login( Request $request)
    {
        $this->validate($request, [

            'email' => 'required',
            'password'=>'required'

        ]);

       if(Auth::guard('client')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
    return redirect('MyAccount/en');

       }else {
           return back();
       }
    }
    
        protected function createclient(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required|unique:clients',
                'password' => 'required',

            ]);
        $test = new client();
        $test->name = $request->name;
        $test->email = $request->email;
        $test->password =  Hash::make($request['password']);
        $test->save();
        return redirect()->intended('/Home/en');

    }
}
