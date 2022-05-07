@component('mail::message')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

# Account Registration


Welcome! Mr./Mrs {{ $student->lastname ?? '' }}, {{ $student->firstname ?? '' }} {{ $student->middlename ?? '' }}

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque beatae magni, nobis officiis assumenda adipisci
    ea quisquam cum quis nulla a delectus deleniti, tempore aut veritatis aspernatur nesciunt at dolorum?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ullam id eum doloremque tenetur dolores deleniti
    laboriosam ipsam? Eius eum dolorem culpa, nulla commodi minus vero fugiat sequi officiis ad!



# Your Account Information,
<div>
   <strong>Student ID: {{ $student->user_id ?? '' }}</strong> <br>
   <strong>Email: {{ $student->email ?? '' }}</strong> <br>
   <strong>Password:{{ $student->user_id ?? '' }}</strong> <br>
</div>
@component('mail::button', ['url' => 'http://127.0.0.1:8000', 'color'=>'error'])
Log in to your account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
    <div class="float-right w-25"><img src="Pictures/unc-logo.png" alt="UNC LOGO" class="img-round w-50"></div>
@endcomponent
