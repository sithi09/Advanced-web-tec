<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    function getregister(Request $request)
    {
    
    $this->validate($request,
       [ 'name'=>'required|string|regex:/(^([a-zA-z]+)(\d+)?$)/u|min:5',
        'email' => 'required|email|max:255|regex:/(.*)@myemail\.com/i',
        
        'password'=>'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$&*-]).{6,}$/',
        'gender'=>'required|in:male,female',
        'file' => 'required|image|mimes:jpg,png|size:512'

    ],
    [
        'name.required' => 'Name must be 5 characters long, Can contain number',
        'email.required' => "Email Must be valid",
        'password.required' => 'Must be 6 characters long.One lowercase letter, one upper case and must contain one digit',
        'gender.required' => 'Gender Must need to selected',
        'file.required' => 'Image Must be Jpg, Png format'



        
    ]
    );
    $output="<h1>Submitted</h1>";
    $output.="name: ".$request->name;
    $output.="<br>gender: ".$request->gender;
    $output.="<br>email: ".$request->email;
    $output.="<br>password: ".$request->password;
    $output.="<br>file: ".$request->file;
    return $output;
    }
    
}

