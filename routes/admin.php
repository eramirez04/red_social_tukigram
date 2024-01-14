<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\HomeController;

    Route::get('',[HomeController::class,'index'])->name('admin.home');

    Route::get('/registro',[\App\Http\Controllers\RegisterController::class,'show'])->name('admin.show');

    Route::delete('/registro/{id}/delete',[HomeController::class,'destroy'])->name('admin.destroy');
