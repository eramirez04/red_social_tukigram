<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageController;

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
})->name('index');

// generalnete a los index se le asignan los nombres
Route::get('/register', [RegisterController::class,'index'])->name('register.index');
Route::post('/register', [RegisterController::class,'store'])->name('register.store');
Route::delete('/muro/perfil/{id}',[RegisterController::class,'destroy'])->name('register.destroy');


Route::get('/muro/', [PostController::class,'index'])->name('post.index');
Route::get('/muro/perfil/{id}', [PostController::class,'show'])->name('post.show');

Route::put('/muro/perfil/actualizar/{id}',[RegisterController::class,'update'])->name('register.update');


Route::get('/login', [LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'store'])->name('login.store');

// ruta pare cerrr sesion
Route::post('/logout',[LoginController::class,'logout'])->name('login.logout');


// rutas de publicaciones o post
Route::get('/inicio',[ImageController::class,'show'])->name('publication.index');

Route::post('/inicio/publicar',[ImageController::class,'store'])->name('image.store');
