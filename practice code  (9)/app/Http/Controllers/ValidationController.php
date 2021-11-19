<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    function index(){
        return view('/welcome');
    }

    function show(Request $req){
        $valid = $req->validate([
            'name'=>'required|max:10',
            'email'=>'required',
            'number'=>'required',
            'password'=>'required|min:  8'
        ]);
        $input=$req->except('_token');
        return view('/welcome',['data'=>$input]);
    }
}
