@component('mail::message')
# DarAlKhulood

Name : {{ $name }}
Email : {{ $email }}
Subject : {{ $subject }}
Message : {{ $message }}

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
