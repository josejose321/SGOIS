@component('mail::message')
# New Account


This will be the Registration info and account info
this is a test
@component('mail::button', ['url' => 'https://www.unc.edu.ph/'])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
