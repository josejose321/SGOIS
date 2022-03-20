@component('mail::message')
# Scholarship

  {{ $scholarship->student->firstname }} , <br>
    Your Scholarship is Now Approved!

<br>
 

@component('mail::button', ['url' => ''])
Log in to your Account
@endcomponent

Respectfully yours,<br>
{{ config('app.name') }}
@endcomponent
