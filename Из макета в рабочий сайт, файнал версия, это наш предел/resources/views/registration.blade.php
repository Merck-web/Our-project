@extends('app')
@section('title')
    Регистрация
@endsection
@section('content')
    <div class="intro_inner">
    <form action="{{route('reg_post')}}" method="POST">
        <register>
            Ваше имя <input type="text" placeholder="Иван" name="name" required><br>
            Пароль <input type="password" placeholder="qwerty" name="password" required><br>
            Ваша почта <input type="email" placeholder="mail@mail.ru" name="email" required><br>
            Дата рождения <input type="Date" name="birthday" required><br>
            <a href="index.html" Назад></a><br>
            Ваш пол<br>
            М <input type="radio" name="is_man" value=1 required><br>
            Ж <input type="radio" name="is_man" value=0 required><br>
            <textarea cols="30" rows="5" placeholder="Расскажите о себе" name="about" required></textarea><br>
            @csrf
            <button type="submit">Отправить</button>
            <button type="reset">Удалить</button>

        </register>
    </form>
    </div>
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
