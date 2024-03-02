<?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Api\ApiUserController;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "api" middleware group. Make something great!
    |
    */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users',[ApiUserController::class,'index']);

Route::get('/user/{id}',[\App\Http\Controllers\Api\ApiUserController::class,'show']);


Route::post('/usuario',[ApiUserController::class,'store']);

Route::delete('/user/{id}/delete',[ApiUserController::class,'destroy']);

Route::put('/usuario/{id}',[ApiUserController::class,'update']);


Route::get('/borrar',[\App\Http\Controllers\Api\ApiLoginController::class,"index"]);
Route::get('/borrar/{id}',[\App\Http\Controllers\Api\ApiLoginController::class,'show']);
