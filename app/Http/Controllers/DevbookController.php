<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class DevbookController extends Controller
{
    public function validaLogin(LoginRequest $request)
    {

        try {
            $request->authenticate();
            return to_route('index');
        } catch (\Throwable $th) {
return back()->withErrors(['error' => $th->getMessage()]);
        }
    }

    public function validaCadastro(CadastroRequest $request)
    {
        try {
            User::create($request->validated());
          return to_route('login')->with('success', 'Cadastro efetuado com sucesso!');

        } catch (\Throwable $th) {
           return back()->withErrors(['error' => $th->getMessage()]);
        }
    }

    public function index()
    {
        return view('pages.index');
    }
}
