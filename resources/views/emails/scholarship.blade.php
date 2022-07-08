@component('mail::message')
    # Scholarship

    Mr/Ms {{ $scholarship->student->user->lastname ?? '' }}
    , {{ $scholarship->student->user->firstname }}
    {{ $scholarship->student->user->middlename }}<br>
    Your Application Request is Approved!,

    I am pleased to inform you that your application for the Scholarship has been accepted and you shall now be able to
    pursue your studies. The scholarship grant shall be applicable only if you meet and follow the rules and regulations of
    the admission procedure of the university.

    <br>
    # Scholarship Details: <br>
    # Scholarship/Program Type : {{ $scholarship->type ?? '' }} <br>
    # STATUS : {{ 'Approved' }} <br>



    @component('mail::button', ['url' => 'http://127.0.0.1:8000/login', 'color' => 'error'])
        Log in to your Account
    @endcomponent

    Respectfully yours,<br>
    {{ config('app.name') }}
@endcomponent
