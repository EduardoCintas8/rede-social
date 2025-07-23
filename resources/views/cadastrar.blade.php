@extends('layouts.redesocial')

@section('title', 'Cadastrar-se no Devbook')

@section('namepage', 'Cadastro DevBook')

@section('css')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row" style="justify-content: center">

    <div class="d-flex justify-content-center">
        <div class="login-container col-3">
            <h2 class="justify-content-center d-flex">Cadastro</h2>

            <div class="d-flex justify-content-center mt-3">
                @if ($errors->any())
                <div class="alert alert-dark d-flex justify-content-center" style="color: black">
                    <i data-feather="alert-triangle" style="color: rgb(0, 0, 0)"></i>
                    {{ $errors->first() }}
                </div>
                @endif
            </div>

            <form method="POST" action="{{route('valida-cadastro')}}">
                @csrf

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
                    <label for="name">Nome</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="email">E-mail</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <label for="password">Senha</label>
                </div>


                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-primary btn-lg w-75" type="submit">Cadastrar</button>
                </div>





                <div class="d-flex justify-content-center">
                    <a href="{{route('login')}}" class="forgot-password">Já possui uma conta? </a>
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