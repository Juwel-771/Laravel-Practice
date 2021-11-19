<?php

use App\Http\Controllers\OldDataController;
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

Route::get('/',[RegisterController::class,'index']);
Route::post('/',[RegisterController::class,'login']);

// Route::view('old', 'oldData')->name('old');

// Route::post('old',[OldDataController::class,'oldInform'])->name('old');
