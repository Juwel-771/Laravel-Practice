<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index(){
        return view('home');
    }

    function login(Request $req){
        $valid = $req->validate([
            'name'=>'required',
            'last'=>'required',
            'email'=>'required',
            'number'=>'required',
            'address'=>'required',
            'day'=>'required',
            'password'=>'required',
            'comment'=>'required'
        ]);
        $input = $req->except('_token');
        return view('home',['data'=>$input]);
        
        // return redirect('oldData')->withInput(
        //     $req->except('password')
        // );

        // return redirect()->route('old')->withInput();
    }
}
