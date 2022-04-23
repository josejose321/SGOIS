@component('mail::message')
# New Account


Welcome! Mr./Mrs {{ $student->firstname }}



Your Account Information 

Student ID: {{ $student->student_no }} <br>
Password:{{ $student->student_no }} <br>
@component('mail::button', ['url' => 'https://www.unc.edu.ph/', 'color'=>'success'])
Visit Site
@endcomponent

Thanks,<br> 
{{ config('app.name') }}
@endcomponent
