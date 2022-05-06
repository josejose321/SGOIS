@component('mail::message')
# UNC SGO OFFICE


        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus vero explicabo qui ad rem modi odit 
    impedit quia ducimus? Natus, architecto. Quod obcaecati laudantium quis! Reiciendis dolorum animi eius laboriosam?
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae hic minus officia assumenda vero vel officiis
     excepturi debitis iusto! Temporibus aperiam corporis expedita? Aliquid iste et at quia! Delectus, repellat.

<br>
 

@component('mail::button', ['url' => '', 'color'=>'error'])
Log in to your Account
@endcomponent

Respectfully yours,<br>
{{ config('app.name') }}
@endcomponent
