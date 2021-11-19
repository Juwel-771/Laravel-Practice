<?php

namespace App\Http\Controllers;

use App\Rules\LowerCase;
use Illuminate\Http\Request;
use App\Rules\UpperCase;
class RegisterController extends Controller
{
    function data(){
        return view('/home');
    }

    function show(Request $req){
        $valid = $req->validate([
            'name'=>['required', new UpperCase],
            'email'=>['required', new LowerCase],
            'address'=>['required',
                function ($attribute, $value, $fail){
                    if($value ==='London'){
                        $fail('This '.$attribute. ' does not fill there');
                    }
                }
            ],
            'password'=>'required'
        ]);
        $input=$req->except('_token');
        return view('home',['data'=>$input]);
    }
}
