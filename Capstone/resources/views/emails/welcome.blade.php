@component('mail::message')
# New Account


Welcome! Mr./Mrs {{ $student->firstname ?? '' }},

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque beatae magni, nobis officiis assumenda adipisci 
    ea quisquam cum quis nulla a delectus deleniti, tempore aut veritatis aspernatur nesciunt at dolorum?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ullam id eum doloremque tenetur dolores deleniti 
    laboriosam ipsam? Eius eum dolorem culpa, nulla commodi minus vero fugiat sequi officiis ad!



# Your Account Information, 
<div>
   <strong>Student ID: {{ $student->student_no ?? '' }}</strong> <br>
   <strong>Email: {{ $student->email ?? '' }}</strong> <br>
   <strong>Password:{{ $student->student_no ?? '' }}</strong> <br>
</div>
@component('mail::button', ['url' => 'https://www.unc.edu.ph/', 'color'=>'error'])
Visit Site
@endcomponent

Thanks,<br> 
{{ config('app.name') }}
@endcomponent
