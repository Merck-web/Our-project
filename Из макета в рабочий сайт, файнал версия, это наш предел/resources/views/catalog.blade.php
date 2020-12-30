@extends('app')
@section('title')
    Каталог
@endsection
@section('content')
    <div class="intro_inner">
        <h3 class="register">
            <a href="{{route('registration')}}">Регистрация на
                сайте</a>
        </h3>

        <main style="overflow:scroll; height: 600px; margin: 10px;">
        @if(isset($catalog))
            @foreach($catalog as $item)
                <div style="background-color: white; border: black solid 1px; padding: 10px; margin: 10px;">
                <h3>
                    {{$item->name}}
                </h3>
                @if(isset($item->img_name))
                    <img class="cat" src="Img/{{$item->img_name}}">
                @endif
                <p>
                    {{$item->price}} рублей
                </p>
                </div>
            @endforeach
        @endif
        </main>

    </div>
@endsection
