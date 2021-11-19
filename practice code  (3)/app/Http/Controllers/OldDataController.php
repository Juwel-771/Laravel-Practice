<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OldDataController extends Controller
{
    function oldInform(){
        return view('oldData');
    }
}
