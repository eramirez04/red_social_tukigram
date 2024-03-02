<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Register\PostController;
    use App\Http\Controllers\Register\RegisterController;
    use App\Http\Controllers\Register\LoginController;
    use App\Http\Controllers\ImageController;
    use App\Http\Controllers\CommentsController;
    use App\Http\Controllers\UserController;

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

    Route::resource('register', RegisterController::class)->names('register');
    Route::resource('post', PostController::class)->names('post')->middleware('auth');
    Route::resource('login', LoginController::class)->names('login');
    Route::resource('user', UserController::class)->names('user')->middleware('auth');
    Route::resource('comment', CommentsController::class)->middleware('auth');

    Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');


