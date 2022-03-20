@component('mail::message')
# Student application

The body of your message.
will display a verification


{{ $details }}
your loan application is approved!


this is a test

@component('mail::button', ['url' => 'https://www.unc.edu.ph/'])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
