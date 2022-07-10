@component('mail::message')
# Registration Camp: {{ $checkout->camp->title }}

Halo {{ $checkout->user->name }}!
<br>
Anda telah melakukan pendaftaran pada program bootcamp spesial dari Devcamp untuk jenis camp: <strong>{{ $checkout->camp->title }}</strong>.
Silahkan lihat instruksi pembayaran dengan klik tombol pembayaran dibawah ini.

@component('mail::button', ['url' => route('transaction.checkout.invoice', $checkout->id)])
Pembayaran
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
