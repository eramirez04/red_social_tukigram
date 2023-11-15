<?php

use Illuminate\Support\Facades\Route;


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
Route::get('/register', [\App\Http\Controllers\RegisterController::class,'index'])->name('register.index');

Route::post('/register', [\App\Http\Controllers\RegisterController::class,'store']);
