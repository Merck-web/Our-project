@extends('app')
@section('title')
    Написать нам
@endsection
@section('content')
    <div class="intro_inner">
            <div id="wrapper">
                <!--Данные введенные пользователем обрабатываются кодом в mail.php-->
                <form action="{{route('send_post')}}" method="POST">
                    @csrf
                    <!--Тег используется для группировки связанных элементов в форме-->
                    <fieldset>
                        <!--Тег задает заголовок для групповых элементов-->
                        <legend>Оставьте сообщение:</legend>
                        Ваше имя:
                        <!--Устанавливает однострочное текстовое поле ввода:-->
                        <input type="text" name="name" required>
                        <!--Используется для полей ввода, которые должны содержать адрес электронной почты.-->
                        E-mail:
                        <input type="text" name="email" required>
                        Номер телефона:
                        <input type="text" name="phone" required>
                        Сообщение:
                        <!--Тег разрешает многострочный ввод текста.-->
                        <textarea rows="15" cols="110" name="message" required></textarea>
                        <!--Устанавливает кнопку для отправки данных формы в обработчик формы.-->
                        <input type="submit" value="Отправить сообщение">
                    </fieldset>
                </form>
            </div>
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
    </div>
@endsection
