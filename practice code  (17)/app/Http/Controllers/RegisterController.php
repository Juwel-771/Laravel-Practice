<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showform(){
        return view('register');
    }

    public function signup(Request $request){
        //Single Rule Validation
        // $validate = $request->validate([
        //     'name' => 'required',
        //     'email'=>'required'
        // ]);
        
        //Multiple Rule Validation

        $validate = $request->validate([
            'name' => 'required|min:5',
            'email'=>'required|min:20'
        ]);
            
        $input=$request->except('_token');
        return view('register',['data'=>$input]);
    }
}
