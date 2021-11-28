<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class adminController extends Controller
{
    //

    public function login(){
        return view('admin.login');
    }

    public function loginSubmit(Request $request){
        $this->validate(
            $request,
            [
                'phoneNumber'=>'required|regex:/^[0-9]*$/',
                'password'=>'required|min:4'
            ],
            [
                'phoneNumber.required'=>'Please put your phone number',
                'password.required'=>'Please put your password',
            ]
        );

        if($request->session()->has('id')){
            return view('Admin.dashboard');
        }
        else{
            return redirect()->route('login');
        }  
    }

    public function registration(){
        return view('Admin.reg');
    }

    public function registrationSubmit(Request $request){
     
        $this->validate(
            $request,
            [
                'name'=>'required|min:3|regex:/^[a-zA-Z\s]*$/',
                'password'=>'required|min:4|same:confirmPassword',
                'confirmPassword'=>'required|min:4',
                'phoneNumber'=>'required|regex:/^[0-9]*$/|unique:admins',
                'email'=>'required',
                'address'=>'required',
                'dob'=>'required'
                
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters',
                'phoneNumber.unique'=>'Phone number already used',
                
                
            ]
        );

        $var = new Admin();
        $var->name= $request->name;
        $var->password = $request->password;
        $var->phonenumber = $request->phoneNumber;
        $var->email = $request->email;
        $var->address = $request->address;
        $var->dob = $request->dob;
        $var->save();
        return redirect()->route('login');     
    }
}
