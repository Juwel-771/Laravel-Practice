<?php

namespace App\Http\Controllers;

use App\Rules\FirstLetter;
use App\Rules\isEven;
use App\Rules\NumberCase;
use App\Rules\toLowerCase;
use App\Rules\UpperCase;
use Illuminate\Http\Request;

class DataVerify extends Controller
{
    function dataShow(){
        return view('/welcome');
    }

    function dataPut(Request $req){
        $valid = $req->validate([
            'first'=>['required', new UpperCase],
            'last'=>['required', new UpperCase],
            'nick'=>['required', new UpperCase],
            'age'=>['required', new NumberCase, new isEven],
            'address'=>['required', new UpperCase],

            'school'=>['required', new FirstLetter],
            // 'collge'=>'required',
            // 'versity'=>'required',
            'email'=>'required',
            'password'=>['required', new toLowerCase]
        ]);
        $input=$req->except('_token');
        return view('/welcome',['data'=>$input]);
    }
}
