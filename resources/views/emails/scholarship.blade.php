@component('mail::message')
# Scholarship

Mr/Ms {{ $scholarship->student->user->lastname ?? '' }}
, {{ $scholarship->student->user->firstname }}
 {{ $scholarship->student->user->middlename }}<br>
        Your Application Request is Approved!,


<br>
# Scholarship Details: <br>
# Scholarship/Program Type : {{ $scholarship->type ?? '' }} <br>
# STATUS : {{'Approved' }} <br>



@component('mail::button', ['url' => 'http://127.0.0.1:8000/login', 'color'=>'error'])
Log in to your Account
@endcomponent

Respectfully yours,<br>
{{ config('app.name') }}
@endcomponent
