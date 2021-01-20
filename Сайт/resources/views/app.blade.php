<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
@include('nav')
<div class="intro">
    <div class="container">
    @yield('content')
        <div class="footer_bottom">
            <div class="footer_bottom-wrapper ">
                <div class="footer">
                    <div class="footer-text">
                        © 2009–2020 <a class="footer_text-link" href="https://vk.com/rhymeru/"
                                       target="_blank">RIP.ru</a> ©2020 Wild Tagil, Incorporated. Все права защищены. Зоопарк
                        ®, торговая марка Wild Tagil Incorporated и её филиалов.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

