<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    function index(){
        return view('home');
    }

    function show(Request $req){
        $valid = $req->validate([
            'name'=>'required|max:10',
            'email'=>'required',
            'password'=>'required',
            'last'=>'required'
        ]);

        $input=$req->except('_token');
        return view('home',['data'=>$input]);
    }
}
