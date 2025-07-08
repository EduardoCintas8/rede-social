@extends('layouts.redesocial')

@section('title', 'Página Inicial')

@section('namepage', 'Bem-vindo(a) ao DevBook')

@section('css')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row" style="justify-content: center">

    <div class="d-flex justify-content-center">
        <div class="login-container">
            <h2>Login no DevBook</h2>
            <form method="POST" action="{{route('valida')}}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="email">E-mail</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <label for="password">Senha</label>
                </div>


                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-primary btn-lg w-75" type="submit">Acessar</button>
                </div>

                <div class="d-flex justify-content-center mt-2">
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>

                <div class="d-flex justify-content-center">
                    <a href="/recuperar-senha" class="forgot-password">Esqueci minha senha</a>
                </div>

            </form>


        </div>
    </div>

    {{-- <div class="col-4 d-flex justify-content-center">

        <div class="cadastros-container">
            <div class="chat-bubble-container">
                <div class="chat-bubble">
                    Ainda não se cadastrou?
                </div>
                <button type="button" class="register-button">Cadastrar</button>
            </div>
        </div>
    </div> --}}

</div>
@endsection