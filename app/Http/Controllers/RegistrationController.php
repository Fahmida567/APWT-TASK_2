<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\customer;

class RegistrationController extends Controller
{
    public function registration(){
        return view('pages.registration');
    }
    public function validateRegistration(Request $request){
        //using requests validate method
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:50',
                'email'=>'email',
                'username'=>'required|min:5|max:20',
                'password'=>'required',
                'cpassword'=>'required',
                'dob'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'name.required'=>'Required field!',
                'name.min'=>'name must not be less than 5 charcters'
            ]
            );
            $var = new customer();
            $var->name= $request->name;
            $var->email = $request->email;
            $var->phone = $request->phone;
            $var->username = $request->username;
            $var->password=$request->cpassword;
            $var->dob = $request->dob;
            $var->save();
        return "Successfully Registered";      
    }
}