@component('mail::message')
    # {{ $sem->semesterCode }} is no Open for Student

    Semester Anouncement Message


    Date:{{ $sem->created_at }}
    Deadline:{{ $sem->deadline }}
@component('mail::button', ['url' => ''])
        Log in
@endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
