<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\testController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\DiciplineController;

use App\Http\Controllers\SpotController;

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

Route::get('hello-word', [testController::class, 'test']);

// Create user 
Route::get('create-user', [UserController::class, 'create']);

Route::get('list-diciplines', [DiciplineController::class, 'get']);

Route::get('list-spots', [SpotController::class, 'get']);


