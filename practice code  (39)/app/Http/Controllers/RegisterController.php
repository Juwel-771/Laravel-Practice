<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class RegisterController extends Controller
{
    function show(){
        return view('home');
    }

    function index(Request $request){
        // print_r($request->input());

        // single rule
        $valid = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        // multiple rule
        // $valid = $request->validate([
        //     'email'=>['required','max:8'],
        //     'password'=>['required','min:10']
        // ]);

        // multiple using pipeline
        // $valid = $request->validate([
        //     'email'=>'required|max:10',
        //     'password'=>'required|min:6'
        // ]);
        // print_r("Form Validated.."); 
        $input = $request->except('_token');
        // print_r($input);
        return view('home',['data'=>$input]);
    }
}
