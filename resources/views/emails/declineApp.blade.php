@component('mail::message')
    # SGO APPLICATION

    Mr/Ms {{ $scholarship->student->user->lastname ?? '' }}
    , {{ $scholarship->student->user->firstname }}
    {{ $scholarship->student->user->middlename }}<br>
    Your Application Request is Declined!,

    Thank you for your application. We had a large number of exceptional applicants, and we regret to inform you that you
    have not been selected for the scholarship.

    The decision is not a negative assessment of your skills or accomplishments. Nor does it have any bearing on your
    suitability or fit with the University, should you have interest in the future. I want to personally thank you for your
    application in the University of Nueva Caceres Scholarship and Grants Office and for giving us the opportunity to learn
    a little bit about you.


    We wish you the utmost throughout your time and encourage you to stop by in future so we can get to know you more. F

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
