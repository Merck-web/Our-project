@extends('app')
@section('title')
    Статьи
@endsection
@section('content')
    <h1>Статьи</h1>
    <main style="overflow:scroll; height: 600px; margin: 10px;">
        @if(isset($article))
            @foreach($article as $item)
                <div style="background-color: white; border: black solid 1px; padding: 10px; margin: 10px;">
                    <h3 style="text-align: center;">{{$item->name}}</h3>
                    <div class="images">
                        @if(isset($item->img_name))
                            <img style="margin: 0 auto;" src="Img/{{$item->img_name}}" alt="photo" width="300"
                                 height="190">
                        @endif
                    </div>

                    <div class="container">

                        <div class="text">
                            {{$item->text}}
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </main>
@endsection
