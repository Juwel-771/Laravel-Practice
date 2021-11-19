<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index(){
        return view('form');
    }

    function data(Request $req){

        // print_r($req->all());

        // print_r($req->except('_token'));

        // print_r($req->input());

        // print_r($req->input('name'));
        // print_r(' ');
        // print_r($req->input('email'));
        // print_r(' ');
        // print_r($req->input('password'));
        // print_r(' ');
        // print_r($req->input('address'));
        // print_r(' ');

        // print_r($req->name);
        // print_r($req->email);
        // print_r($req->password);
        // print_r($req->address);

        // if($req->has(['name','email'])){
        //     print_r($req->input('name'));
        //     print_r(' ');
        //     print_r($req->input('email'));
        // }

        // if($req->hasAny(['name','email','password'])){
        //     print_r($req->input('name'));
        //     print_r($req->input('email'));
        //     print_r($req->input('password'));
        // }

        // if($req->filled(['name','email'])){
        //     print_r('Inside Fill Method');
        //     print_r(' ');
        //     print_r($req->input('name'));
        //     print_r($req->input('email'));
        // }

        // if($req->missing('username')){
        //     print_r('Inside Missing Section');
        //     print_r('User Name not found');
        // }

        // $req->whenHas('name', function($req){
        //     print_r('data Modified');
        // });

        // $req->whenFilled('name',function($input){
        //     print_r('Data Modified');
        // });

        // $req->flash();

        return redirect()->route('old')->withInput(
            $req->except('password')
        );
        return view('form');
    }
}
