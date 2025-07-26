@extends('layouts.redesocial')

@section('title', 'Login Devbook')

@section('namepage', 'Bem-vindo(a) ao DevBook')

@section('css')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row" style="justify-content: center">

@if (session('success'))
    <div 
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 3000)" 
        x-show="show"
        class="alert alert-success"
    >
        {{ session('success') }}
    </div>
@endif
<livewire:login />
@endsection