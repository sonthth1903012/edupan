@component('mail::message')

<p>Hello, {{ $data['name'] }}</p>
<p>We have read your message:
    "{{ $data['message'] }}".</p>
<p>Thank for your help!</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
