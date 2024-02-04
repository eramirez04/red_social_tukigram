<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\HomeController;

    Route::get('',[HomeController::class,'index'])->name('admin.home');

    Route::get('/registro',[\App\Http\Controllers\Register\RegisterController::class,'index'])->name('admin.show');

    Route::delete('/registro/{id}/delete',[HomeController::class,'destroy'])->name('admin.destroy');

    Route::get('/users',[\App\Http\Controllers\Register\RegisterController::class,'index'])->name('register.index');
