<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // function show(){
    //     return view('contact');
    // }

    function data(){
        $name = "juwel";
        $students = ['messi', 'neymar', 'suarez','ronaldo','kaka','ozil'];
        return view('contact',['nm'=>$name,'sdt'=>$students]);
    }
}
