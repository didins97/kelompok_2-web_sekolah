@component('mail::message')
# Pesan dari pengguna {{$pengirim}}

{{ $isi }}

Thanks,<br>
{{ $website }}
@endcomponent
