<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebrukController;


Route::get('/', function () {
    return view('welcome');
});



Route::prefix('devbook')->group(function () {
    Route::get('/login', [FacebrukController::class, 'login']);
});
