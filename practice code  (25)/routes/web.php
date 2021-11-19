<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

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

Route::get('about',[AboutController::class, 'show']);
Route::get('name',[AboutController::class, 'name']);
Route::get('id',[AboutController::class, 'id']);
Route::get('dept',[AboutController::class, 'dept']);
Route::get('sub', [AboutController::class, 'sub']);
Route::get('tool',[AboutController::class, 'tools']);
Route::get('tech',[AboutController::class, 'tech']);
Route::get('back',[AboutController::class, 'back']);
Route::get('front',[AboutController::class, 'front']);

Route::get('para/{nam}',[AboutController::class, 'para']);

Route::get('filee', [AboutController::class, 'file']);
Route::get('admin', [AboutController::class, 'admin']);

Route::get('pass/{nme}',[AboutController::class,'pass']);

Route::get('user/{data}',[AboutController::class, 'data']);
Route::get('user2/{basic}', [AboutController::class, 'infor']);

Route::get('user3/{naruto}',[AboutController::class, 'nomi']);
