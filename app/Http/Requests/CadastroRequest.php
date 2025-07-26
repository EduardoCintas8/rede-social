<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CadastroRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'       => 'O Nome é obrigatório.',
            'email.required'      => 'O E-mail é obrigatório.',
            'email.email'         => 'Por favor, informe um e-mail válido.',
            'email.unique'        => 'Este e-mail já está em uso.',
            'password.required'   => 'A Senha é obrigatória.',
            'password.min'        => 'A Senha deve ter ao menos :min caracteres.',
            'password.confirmed'  => 'A confirmação da senha não corresponde.',
        ];
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(response()->json([
    //         'success' => false,
    //         'message' => 'Erro de validação.',
    //         'errors'  => $validator->errors(),
    //     ], 422));
    // }
}
