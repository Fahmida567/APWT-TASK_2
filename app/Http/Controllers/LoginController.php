<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\customer;

class LoginController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    public function loginCheck(Request $request){
        $this->validate(
            $request,
            [
                
                'username' => 'required',
                'password'=>'required'
            ],
            [
                'username.required'=> 'Enter your username',
                
            ]
        );

        $customers = Customer::all();
        $Check=False;
        foreach($customers as $user)
        {
            if($user->username== $request->username && $user->password==$request->password)
                {
                    return ("Login Success");
                    $Check=True;
                }
                
        }
        if($Check==False)
        {
           return ("Login Fail");
        }
    }
}