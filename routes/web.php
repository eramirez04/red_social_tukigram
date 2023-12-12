<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

Route::get('/', function () {
    return view('principal');
});

// generalnete a los index se le asignan los nombres
Route::get('/register', [RegisterController::class,'index'])->name('register.index');

Route::post('/register', [RegisterController::class,'store']);

Route::get('/muro', [PostController::class,'index'])->name('post.index');


Route::get('/login', [LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'store']);

// ruta pare cerrr sesion
Route::post('/logout',[LoginController::class,'logout']);
