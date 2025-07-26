<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
             

    }

    /**
     * Mensagens de erro personalizadas
     */
    public function messages(): array
    {

        return [
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve conter um endereço válido.',
            'password.required' => 'O campo senha é obrigatório.',
        ];
    }

    /**
     * Autenticação com tratamento de erro
     */
    public function authenticate(): void
    {
        $credentials = $this->only('email', 'password');

        if (! Auth::attempt($credentials, $this->filled('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('E-mail ou Senha inválido.'),
            ]);
        }
    }
}
