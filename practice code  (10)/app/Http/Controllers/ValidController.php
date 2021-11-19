<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;
class ValidController extends Controller
{
    function index(){
        return view('/welcome');
    }

    function show(Request $req){
        $valid = $req->validate([
            'name'=> ['required', new Uppercase],
        ]);
        $input=$req->except('_token');
        return view('/welcome',['data'=>$input]);
    }
}
