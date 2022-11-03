@component('mail::message')

<h1>Nuovo messaggio da: {{ config('app.name') }}</h1>

Nome: {{ $email->name }}<br>
Email: {{ $email->email }}<br>
<br>
Messaggio: <br>
{{ $email->content }}


@endcomponent
