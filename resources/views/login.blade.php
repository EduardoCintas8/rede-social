@extends('layouts.redesocial')

@section('title', 'Página Inicial')

@section('namepage', 'Bem-vindo(a) ao DevBook')

@section('css')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row" style="justify-content: center; display: flex;">
    <div class="login-container">
        <h2>Login no DevBook</h2>
        <form method="POST">
            @csrf
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required autofocus placeholder="Email ou telefone">

            <label for="password">Senha</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Entrar">
        </form>
    </div>

</div>
@endsection