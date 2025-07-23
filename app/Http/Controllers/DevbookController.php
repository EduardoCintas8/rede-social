<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class DevbookController extends Controller
{
    public function valida(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        // dd($request->all());

        if ($email && $password) {
            return to_route('index');
        } else {
            return to_route('login')->with('error', 'E-mail ou Senha inválido');
        }
    }

    public function validaCadastro(CadastroRequest $request)
    {
        try {
            User::create($request->validated());
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function index()
    {
        return view('index');
    }
}
