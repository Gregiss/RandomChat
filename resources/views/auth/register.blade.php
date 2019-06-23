@extends('layouts.app')

@section('content')
<div class="container_blue register">
        <div class="container">
            <div class="box">
                <h1>Olá Usuario, faça o cadastro abaixo :D</h1>
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="email"  class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                <input type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                <input type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">
                <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repetir senha">
                <div class="buttons">
                <button>Cadastrar</button>
                </form>
                <br>
                <br>
                <a href="/login">Já tenho uma conta</a>
                @error('email')
                <span class="error">{{ $message }}</span>
                @enderror
                @error('password')
                <span class="error">{{ $message }}</span>
                @enderror
                </div>
            </div>
        </div>
    </div>
@endsection