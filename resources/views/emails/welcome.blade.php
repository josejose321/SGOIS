@component('mail::message')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    # Account Registration


    Welcome! Mr./Mrs {{ $student->user->lastname ?? '' }}, {{ $student->user->firstname ?? '' }}
    {{ $student->user->middlename ?? '' }}

    This email serves as a confirmation that your account was created succesfully. You can now access the University of
    Nueva Caceres Scholarship and Grants Office Information System.



    # Your Account Information,
    <div>
        <strong>Student ID: {{ $student->user->user_id ?? '' }}</strong> <br>
        <strong>Email: {{ $student->user->email ?? '' }}</strong> <br>
        <strong>Password:{{ 'password' }}</strong> <br>
    </div>

    Please be informed that this will be your credentials the next time you login to UNC-SGOIS. You can change your password
    in your UNC-SGOIS account settings.
    @component('mail::button', ['url' => 'http://127.0.0.1:8000', 'color' => 'error'])
        Log in to your account
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
    <div class="float-right w-25"><img src="unc-logo.png" alt="UNC LOGO" class="img-round w-50"></div>
@endcomponent
