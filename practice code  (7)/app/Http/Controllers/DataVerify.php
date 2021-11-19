<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
class DataVerify extends Controller
{
    function dataShow(){
        return view('/welcome');
    }

    function dataPut(RegisterRequest $req){
        $req->validated();
        return view('/welcome');
    }
}
