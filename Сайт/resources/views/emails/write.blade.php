@component('mail::message')
# Получено сообщение

Имя отправителя: {{$mail['name']}}

E-mail отправителя: {{$mail['email']}}

Телефон отправителя: {{$mail['phone']}}

Сообщение отправителя: {{$mail['message']}}

@endcomponent
