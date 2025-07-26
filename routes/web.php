<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevbookController;
use Illuminate\Support\Facades\Cookie;



Route::get('/', function () {
    return view('pages.login');
});



Route::prefix('devbook')->group(function () {
    #Rota tela Login
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    #Rota valida Login
    Route::post('/valida-login', [DevbookController::class, 'validaLogin'])->name('valida-login');

    #Rota Tela principal
    Route::get('/index', [DevbookController::class,  'index'])->name('index');

    #Rota Tela cadastro
    Route::get('/cadastrar', function () {
        return view('cadastrar');
    })->name('cadastrar');

    #Rota tela valida cadastro
    Route::post('/valida-cadastro', [DevbookController::class, 'validaCadastro'])->name('valida-cadastro');
});



#Mudança tema 
Route::get('/tema', function () {
    $current = request()->cookie('theme', 'light');
    $new = $current === 'black' ? 'white' : 'black';

    return redirect()->back()
        ->withCookie(cookie('theme', $new, 60 * 24 * 30));
})->name('altera_tema');
