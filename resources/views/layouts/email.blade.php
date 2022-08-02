@component('mail::message')
# Bem Rema Unnur

Dear Admin,

Ada Aspirasi Baru Masuk Nihhh....

@component('mail::button', ['url' => {{route('aspirasi')}}])
Check
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
