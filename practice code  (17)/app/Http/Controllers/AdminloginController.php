<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminloginController extends Controller
{
    function details(){
        return view('adminLogin');
    }

    function login(Request $req){
        $validate = $req->validate([
            'name1'=> 'required',
            'email1'=>'required',
            'password1'=>'required'
        ]);
        $input = $req->except('_token');
        return view('adminLogin',['data'=>$input]);
    }
}
