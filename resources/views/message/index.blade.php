@component('mail::message')
# Haii {{$nama}}

<p>{{$isi}}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent