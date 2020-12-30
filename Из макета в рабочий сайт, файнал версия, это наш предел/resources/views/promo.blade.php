@extends('app')
@section('title')
    О нас
@endsection
@section('content')
    <div class="intro_inner">
        <h3 class="register">
            <a href="{{route('registration')}}">Регистрация на
                сайте</a>
        </h3>

        <h1 class="text">
            Черная пятница! Успевай, пока не закончилась!
        </h1>
        <h2 class="images">
            <img src="Img/11.png" alt="photo" width="300" height="180">
        </h2>
    </div>
@endsection
