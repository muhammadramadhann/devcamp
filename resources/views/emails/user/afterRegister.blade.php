@component('mail::message')
# Welcome Aboard!

Halo {{ $user->name }}!
<br>
Selamat datang di Devcamp, Bootcamp para developer sukses masa depan. 
Sekarang, kamu dapat memilih bootcamp tersedia untuk diikuti. 
Apakah kamu siap untuk menyusul para alumni yang telah memiliki karir profesional dibidangnya? 
Yuk, segera daftar bootcamp sekarang juga!

@component('mail::button', ['url' => route('login')])
Masuk Disini
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
