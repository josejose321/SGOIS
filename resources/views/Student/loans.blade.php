@extends('layouts.student')

@section('content')

@section('title', 'Available Loans')
@section('background')
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("{{ asset('student/sportsDev.jpg') }}");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

    </style>
@stop
<br>

<div class="container w-75 animate__animated animate__fadeInUp">
    {{-- <header class="pb-3 mb-4 border-bottom bg-dark">
            <span class="fs-4 h2 fw-bold p-2 m-1 text-light"><i class="fa fa-running"></i> UNC SPORTS DEVELOPMENT
                SCHOLARSHIP</span>
        </header> --}}

    <div class="p-2 mb-4 rounded-3 animate__animated animate__fadeInDown text-light"
        style="background-color: hsla(0, 0%, 32%, 0.80)">
        <header class="pb-3 mb-4 border-bottom" style="background-color: rgba(74, 74, 74, 0.90)">
            <span class="fs-4 h2 fw-bold p-2 m-1 text-light"><i class="fa fa-running"></i> UNC AVAILABLE LOANS</span>
        </header>
        <ul class="">
            @forelse ($loans as $loan)
                <li> {{ $loan->name }}</li>
            @empty
                <h5> No Available Loans</h5>
            @endforelse
        </ul>
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold"> <i class="fa fa-dog"></i> APPLY NOW!</h1>
            <p class="col-md-8 fs-4">The Scholarship and Grants Office are offering Scholarships to students who
                excel in arts, music, and sports. What are you waiting for? Apply Now.</p>
            <button class="btn btn-success btn-lg" type="button" data-target="#loanModal" data-toggle="modal">Click Here
                To Apply..</button>
        </div>
    </div>

</div>

@include('modals.addLoan')
@endsection
