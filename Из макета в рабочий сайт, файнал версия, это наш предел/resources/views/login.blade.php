@extends('app')
@section('title')
    Вход
@endsection
@section('content')
    <form method="post" action="{{route('login_post')}}" class="login">
        @csrf
        <p>
            <label for="login">Логин:</label>
            <input type="text" name="email" id="login" placeholder="name@example.com" required>
        </p>

        <p>
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" placeholder="4815162342" required>
        </p>

        <p class="login-submit">
            <button type="submit" class="login-button">Войти</button>
        </p>
        @if(isset($error))
            <div style="color: red">{{$error}}</div>
        @endif
        <p class="forgot-password"><a href="index.html">Забыл пароль?</a></p>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
