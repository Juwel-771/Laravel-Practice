<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidController extends Controller
{
    function index(){
        return view('welcome');
    }

    function show(Request $request){
        // $data = $request->input();
        // print_r($data);
        $valid = $request->validate([
            'name'=>'required|max:5',
            'last'=>'required|max:5',
            'email'=>'required',
            'address'=>'required',
            'password'=>'required|min:9'
        ]);
        // $input = $request->except('_token');
        // return view('welcome',['data'=>$input]);

        $input = $request->except('_token');
        // print_r($input);
        return view('welcome',['data'=>$input]);
    }
}
