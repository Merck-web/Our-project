@section('nav')
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="wellcome">Wild Tagil</div>
                <nav class="nav">
                    <a class="nav__link" href="{{route('home')}}">Главная</a>
                    <a class="nav__link" href="{{route('about')}}">О компании</a>
                    <a class="nav__link" href="{{route('promo')}}">Акции</a>
                    <a class="nav__link" href="{{route('news')}}">Новости</a>
                    <a class="nav__link" href="{{route('catalog')}}">Каталог</a>
                    <a class="nav__link" href="{{route('article')}}">Статьи</a>
                    <a class="nav__link" href="{{route('contacts')}}">Контакты</a>
                </nav>
            </div>
        </div>
    </header>
