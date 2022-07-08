@component('mail::message')
    # SGO ANNOUNCEMENT


    Subject:: {{ $announcement->subject ?? '' }}
    Content:
    {{ $announcement->content ?? '' }}

    created at: {{ $announcement->created_at ?? '' }}


    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
