@component('mail::message')

    Dear, {{$data['name']}} !
    Thank for cantact us!

@component('mail::button', ['url' => 'edupan-project.herokuapp.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
