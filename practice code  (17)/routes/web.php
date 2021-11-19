<?php

use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\RegisterController;
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
    return view('register');
});

Route::get('/',[RegisterController::class,'showform']);
Route::post('/',[RegisterController::class,'signup']);

Route::get('admin',[AdminloginController::class,'details']);
Route::get('admin',[AdminloginController::class,'login']);