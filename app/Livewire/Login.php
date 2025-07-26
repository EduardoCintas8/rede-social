<?php

namespace App\Livewire;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {

        $request = new LoginRequest();
        $data = $this->only(['email', 'password']);
        Validator::make($data, $request->rules(), $request->messages())->validate();

        try {
       
            $request->merge($data);  
            $request->authenticate();

            return to_route('index');
        } catch (ValidationException $e) {
            $this->setErrorBag($e->errors());
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
