@extends('layouts.student')

@section('title', 'Student')
@section('content')
@section('background')
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            /* background-image: url("{{ asset('student/sportsDev.jpg') }}"); */

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
<div class=" container row animate__animated animate__fadeInUp">

    <div class="col-md-6 animate__animated animate__fadeInLeft">
        <p>
            <img src="{{ asset('greyhound.png') }}" class="img img-round w-25" alt="">
        <h1 class="text-danger border border-2">Welcome Students!</h1>
        Finally, you have in your fingertips the information you need as a student.
        The myUNC: Student Module will give you access to your class schedule for the
        semester you are currently enrolled in, view your statement of accounts earlier
        and settle it before your exam schedules, check your subject grades and your class
        attendance both absences and lateness, and most the most important is, Graduate-on-Time by
        being able to see your Student Evaluation based from your course curriculum for any problems
        regarding your subjects taken.</p>
        <h4>NON SCHOLAE SED VITAE</h4>
        {{-- <div class="jumbotron">
                    <h1 class="display-6">Looking for Scholarships?</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling
                        extra attention to featured content or information.</p>
                    <p class="lead ">
                        <a class="btn btn-danger btn-lg float-right" href="{{ route('student.scholarships') }}"
                            role="button">Apply
                            Now!</a>
                    </p>
                </div> --}}
    </div>
    <div class=" col-md-6 animate__animated animate__fadeInRight">
        <div class="">
            <label class="form-label"
            style="text-align: center;margin-left: 125px;margin-top: 10px;font-weight: bold;color: var(--bs-red);font-size: 20px;">&nbsp;
            <i class="fa fa-bullhorn"></i> NEWS AND ANNOUNCEMENTS</label>
        </div>
        @forelse ($announcements as $announcement)
            <div class="card p-1" style="background-color: beige">
                <div class="card-header" style="background-color: beige">
                    <h5 class="mb-0 fw-bold">{{ $announcement->subject ?? '' }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"> {{ $announcement->content }}</p>

                    <p class="card-text">SGO Director-
                        {{ $announcement->employee->user->lastname }},
                        {{ $announcement->employee->user->firstname }}
                        {{ $announcement->employee->user->middlename }}</p>

                </div>
                <div class="card-footer" style="background-color: beige">
                    Date Created: {{ $announcement->created_at->format('y/m/d') ?? '' }}
                </div>
            </div>
            @empty
                <center>No Updates So far</center>
        @endforelse
    </div>
</div>

<br><br><br><br><br>
@endsection
