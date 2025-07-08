<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class DevbookController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function valida(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if ($email && $password) {
            return to_route('index');
        } else {
            return to_route('login')->with('error', 'E-mail ou Senha inválido');
        }
    }


    public function index()
    {
        return view('index');
    }
}
