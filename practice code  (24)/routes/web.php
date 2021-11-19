<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('norm', function(){
    return view('normal');
});

Route::get('one',function(){
    return view('userone');
});

Route::get('two', function () {
    return view('two');
});

Route::get('three', function () {
    return view('three');
});

Route::get('five', function(){
    return view('five');
});

Route::get('six', function(){
    return view('six');
});

Route::get('seven', function () {
    return view('seven');
});

Route::get('eight', function(){
    return view('eight');
});

Route::get('nine', function() {
    return view('nine');
});

Route::get('ten', function(){
    return view('ten');
});

Route::get('ele', function(){
    return view('eleven');
});

Route::get('twl', function(){
    return view('twleve');
});

Route::get('thr', function(){
    return view('thirteen');
});

Route::get('four', function(){
    return view('fourteen');
});

Route::get('fif', function(){
     return view('fifteen');
});

Route::get('sixx', function(){
    return view('sxteen');
});

Route::get('sev', function(){
    return view('seventeen');
});

Route::get('eht', function(){
    return view('eighteen');
});

Route::get('ninee', function(){
    return view('ninteen');
});

Route::get('twtt', function(){
    return view('twoteen');
});

Route::get('admin', function(){
    return view('admin.adminone');
});

Route::get('admintwo', function(){
    return view('admin.admintwo');
});

Route::get('adminthree', function(){
    return view('admin.adminthree');
});

Route::get('adminfour', function(){
    return view('admin.adminfour');
});

Route::get('adminfive', function(){
    return view('admin.adminfive');
});

Route::get('userone', function(){
    return view('user.userone');
});

Route::get('usertwo', function(){
    return view('user.usertwo');
});

Route::get('userthree', function(){
    return view('user.userthree');
});

Route::get('userfour', function(){
    return view('user.userfour');
});

Route::get('userfive', function(){
    return view('user.userfive');
});

Route::get('ngoone', function () {
    return view('ngo.ngoone',['name'=>'juwel']);
});