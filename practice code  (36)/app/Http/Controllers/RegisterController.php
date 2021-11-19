<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function show(){
        print_r('Get Method');
        print_r(' ');
        return view('home');
    }

    function sign(Request $data){
        print_r('Post Method');
        print_r(' ');
        // dd($data);
        // accessing all data
        // print_r($data->all());
        
        // accessing all data
        // print_r($data->input());

        // accessing single input
        // print_r($data->input('name'));

        //accessing via dynamic 
        // print_r($data->name);

        //check input data present
        // if($data->has('name')){
        //     print_r($data->input('name'));
        // };

        //checking multiple data 
        // if($data->has(['name','email'])){
        //     print_r($data->input('name'));
        //     print_r($data->input('email'));
        // };

        //Has any data present or not. Presented data will be showed
        // if($data->hasAny(['name','email'])){
        //     print_r($data->input('name'));
        //     print_r($data->input('email'));
        // };
        
        //checking data either filled or not
        // if($data->filled('name')){
        //     print_r('inside fill ');
        //     print_r($data->input('name'));
        // };

        //Checking if any data are missing or not..!!
        // if($data->missing('username')){
        //         print_r('inside missing: ');
        //         print_r('Username is not here..!!');
        //     };

        //When data are modified..!!
        // $data->whenHas('name',function($input){
        //     print_r('Data Modified');
        // });

        //when data are modified but not left by blank
        // $data->whenFilled('name',function($input){
        //     print_r('Data Modified');
        // });

        //accessing old data
        // $data->flash();
        // print_r($data->old('name'));
        // print_r($data->old('email'));
        
        // accessing specific old data
        // $data->flashOnly('name');
        // print_r($data->old('name'));
        // return view('home');
        
        //accessing old all data except given name
        // $data->flashExcept('password');
        // print_r($data->old('name'));
        // print_r($data->old('email'));
        // print_r($data->old('area'));

        // return view('home');

        // return redirect('old')->withInput();
        // return redirect()->route('old')->withInput();

        return redirect('old')->withInput(
            $data->except('password')
        );
    }
}
