<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevbookController;


Route::get('/', function () {
    return view('welcome');
});



Route::prefix('devbook')->group(function () {
    Route::get('/login', [DevbookController::class, 'login'])->name('login');
    Route::post('/validauser', [DevbookController::class, 'valida'])->name('valida');
    Route::get('/index', [DevbookController::class,  'index'])->name('index');
});
