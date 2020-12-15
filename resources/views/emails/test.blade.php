@component('mail::message')
# Hello World!

The body of your message.

<!-- 
@component('mail::button', ['url' => ''])
Button Text
@endcomponent -->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
