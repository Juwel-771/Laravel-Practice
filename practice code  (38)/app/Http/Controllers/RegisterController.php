<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function show(){
        return view('home');
    }

    function upload(Request $request){
        // dd($request);
        // print_r($request->all());

        // accessing single data.
        // print_r($request->input('name'));
        // print_r($request->input('email'));
        // print_r($request->input('password'));

        // dynamic input calling
        // print_r($request->name);
        // print_r("  ");
        // print_r($request->email);
        // print_r("  ");
        // print_r($request->password);
        // print_r("  ");
        // print_r($request->area);
        // return view('home');

        // if($request->has('name')){
        //     print_r($request->input('name'));
        // }
        // if($request->has(['name','email'])){
        //     print_r($request->input('name'));
        //     print_r($request->input('email'));
        // }
        // return view('home');

        // if($request->hasAny(['name','email'])){
        //     print_r($request->input('name'));
        //     print_r($request->input('email'));
        // }
        // return view('home');

        // $request->flash();
        // print_r($request->old('name'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));
        // print_r($request->old('area'));

        // return view('home');
            //Remember that 'old' is not a view file which is declared in route file.'old' is a method.
        // $request->flashOnly(['name','email']);
        // print_r($request->old('name'));
        // print_r($request->old('email'));

        // return view('home');

        // $request->flashExcept('password');
        // print_r($request->old('name'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));
        // print_r($request->old('area'));

        // return view('home');

        // return redirect('oldData')->withInput();
        // return redirect()->route('old')->withInput();
        return redirect('oldData')->withInput(
            $request->except('password')
        );
    }
    
}
