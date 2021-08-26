<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\employer;


class EmployerController extends Controller
{
    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:employers,email',
            'ic' => 'required|min:12|max:12',
            'phone_number' => 'required|min:10|max:12',
            'company'=>'required|string|max:255',
            'position'=>'required|string|max:255',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $Employer = new employer();
        $Employer->name = $request->name;
        $Employer->email = $request->email;
        $Employer->ic = $request->ic;
        $Employer->phone_number = $request->phone_number;
        $Employer->company = $request->company;
        $Employer->position = $request->position;
        $Employer->password = \Hash::make($request->password);
        $save = $Employer->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered employer successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email'=>'required|email|exists:employers,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists on users table'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('employer')->attempt($creds) ){
            return redirect()->route('employer.Home');
        }else{
            return redirect()->route('employer.login')->with('fail','Incorrect credentials');
        }
    }
}