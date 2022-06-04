@component('mail::message')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    # UNC SGO OFFICE


    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus vero explicabo qui ad rem modi odit
    impedit quia ducimus? Natus, architecto. Quod obcaecati laudantium quis! Reiciendis dolorum animi eius laboriosam?
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae hic minus officia assumenda vero vel officiis
    excepturi debitis iusto! Temporibus aperiam corporis expedita? Aliquid iste et at quia! Delectus, repellat.

    Subject:: {{ $announcement->subject ?? '' }}
    Content:
    {{ $announcement->content ?? '' }}

    created at: {{ $announcement->created_at ?? '' }}

    <br>


    @component('mail::button', ['url' => '', 'color' => 'error'])
        Log in to your Account
    @endcomponent

    Respectfully yours,<br>
    {{ config('app.name') }}
@endcomponent
