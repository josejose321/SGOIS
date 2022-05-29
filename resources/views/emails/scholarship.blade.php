@component('mail::message')
# Scholarship

Mr/Ms {{ $scholarship->student->user->lastname ?? '' }}
, {{ $scholarship->student->user->firstname }}
 {{ $scholarship->student->user->middlename }}<br>
        Your Application Request is Approved!,

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus vero explicabo qui ad rem modi odit
    impedit quia ducimus? Natus, architecto. Quod obcaecati laudantium quis! Reiciendis dolorum animi eius laboriosam?
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae hic minus officia assumenda vero vel officiis
     excepturi debitis iusto! Temporibus aperiam corporis expedita? Aliquid iste et at quia! Delectus, repellat.

<br>
# Scholarship Details:
# Scholarship/Program Type : {{ $scholarship->type ?? '' }}
# Discount Granted : {{ $scholarship->discount ?? '' }}
# Endorsing Office : {{ $scholarship->category->office->name ?? '' }}



@component('mail::button', ['url' => 'http://127.0.0.1:8000/login', 'color'=>'error'])
Log in to your Account
@endcomponent

Respectfully yours,<br>
{{ config('app.name') }}
@endcomponent
