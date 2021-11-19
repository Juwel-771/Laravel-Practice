<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function details(){
        return view('admin');
    }

    public function login(Request $req){
        $validate = $req->validate([
            'name'=> 'required',
            'email'=>'required|min:10',
            'password'=>'required'
        ]);
        $input = $req->except('_token');
        return view('admin',['data'=>$input]);
    }
}
