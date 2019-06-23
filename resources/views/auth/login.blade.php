@extends('layouts.app')

@section('content')
<div class="container_blue register">
        <div class="container">
            <div class="box">
                <h1>Olá Usuario, faça o login abaixo :D</h1>
                <form method="POST" action="{{ route('login') }}">
                 @csrf
                <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                <input type="password" class="@error('password') is-invalid @enderror"name="password" required autocomplete="current-password" placeholder="Senha">
                <div class="buttons">
                <button>Login</button>
                @if (Route::has('password.request'))
                                    <a style="top: 130px;" href="{{ route('password.request') }}">
                                       Esqueceu a senha?
                                    </a>
                @endif
                </form>
                <br>
                <br>
                <a href="/register">Não tenho uma conta</a>
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