<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function upload(){
        return view('welcome');
    }

    function show(Request $req){
        // dd($req);

        //accessing all data
        // print_r($req->all());
        // print_r($req->input());

        //accessing single date
        // print_r($req->input('name'));
        // print_r($req->input('email'));
        // print_r($req->input('age'));

        //accessing via dynamic
        // print_r($req->name);
        // print_r($req->age);
        // print_r(" ");
        // print_r($req->address);
        // print_r($req->password);
        // print_r($req->email);

        //checking data either present or not
        // if($req->has(['name','email'])){
        //     print_r($req->input('name'));
        //     print_r($req->input('email'));
        // }
        // if($req->has('password')){
        //     print_r($req->input('password'));
        // }

        // if($req->has(['name','email'])){
        //     print_r($req->input('name'));
        //     print_r($req->input('email'));
        // }

        // if($req->hasAny(['name','email'])){
        //     print_r($req->input('name'));
        //     print_r($req->input('email'));
        // }

        // if($req->filled('name')){
        //     print_r("Inside fill");
        //     print_r($req->input('name'));
        // }

        // if($req->missing('name')){
        //     print_r("Missing Side ");
        //     print_r($req->input('name'));
        // }

        // $req->whenHas('name',function($input){
        //     print_r('Data Modified');
        // });

        // $req->whenFilled('name',function($input){
        //     print_r("Data modified but bot left by blank");
        // });
        // return view('welcome');

        //accessing old data.
        $req->flash();

        print_r($req->old('name'));
        print_r($req->old('email'));
        return redirect('old')->withInput();
        // return view('welcome');

        // $req->flashOnly('name');
        // print_r($req->old('name'));
        // // return redirect()->route('old')->withInput();

        // return view('welcome');
    }
}
