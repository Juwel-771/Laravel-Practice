<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function show(){
        return 'dareda..??';
    }

    function name(){
        return 'Juwel';
    }

    function id(){
        return 'CSE-01506382';
    }

    function dept(){
        return 'Department of CSE';
    }

    function sub(){
        return 'WEB Application';
    }

    function tools(){
        return 'Vue.js Laravel';
    }

    function tech(){
        return 'Economic Pandemic';
    }

    function back(){
        return 'HTML';
    }
    
    function front(){
        return 'MySQL';
    }

    function para($nam){
        return 'The name will be shown by here ';
    }

    function file(){
        return view('new');
    }

    function admin(){
        return view('admin');
    }

    function pass($nme){
        return view('passing',['nm'=>$nme]);
    }

    function data($data){
        return view('user',['dt'=>$data]);
    }

    function infor($basic){
        return view('user2',['bs'=>$basic]);
    }

    function nomi($naruto){
        return view('user3',['nt'=>$naruto]);
    }
}
