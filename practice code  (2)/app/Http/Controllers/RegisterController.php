<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function login(){
        return view('home');
    }

    function singup(Request $request){
        $valid=$request->validate([
            'name'=>'required',
            'last'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $input = $request->except('_token');

        return view('home',['data'=>$input]);
    }
}
