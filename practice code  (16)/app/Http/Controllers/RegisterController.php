<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function show(){
        // print_r('GET METHOD');
        return view('register');
    }

    function access(Request $req){
        // print_r('POST METHOD');
        // dd($req);
        // print_r($req->all());
        // print_r($req->input());
        // print_r($req->input('name'));
        // print_r($req->input('email'));
        // print_r($req->input('password'));

        // print_r($req->name);
        // print_r($req->email);
        // print_r($req->password);

        // if($req->has('name')){
        //     print_r($req->input('name'));
        // }

        // if($req->has(['name','email'])){
        //     print_r($req->input('name'));
        //     print_r($req->input('email'));
        // }

        // if($req->hasAny(['email','password'])){
        //     print_r($req->input('email'));
        //     print_r($req->input('password'));
        // }

        // if($req->filled(['email'])){
        //     print_r($req->input('email'));
        // }
        // if($req->missing(['email'])){
        //         print_r("E-mail missing...!!");
        // }

        // $req->whenHas('name', function($input){
        //     print_r('Data Modified');
        // });

        // $req->whenHas('name', function($input){
        //     print_r('Data Modified');
        // });

        // $req->flash();
        // print_r($req->input('name'));
        // print_r($req->input('email'));

        // $req->flashOnly(['name', 'email']);
        //     print_r($req->input('name'));
        //     print_r($req->input('email'));

        $req->flashExcept(['password']);
            print_r($req->input('name'));
            print_r($req->input('email'));

        return view('register');
    }
}
