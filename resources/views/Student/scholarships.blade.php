@extends('layouts.student')

@section('title', 'Student Dashboard')

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
            background-image: url("{{ asset('student/sportsDev.jpg') }}");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
@stop
<br>
    <div class="container text-light animate__animated animate__fadeInDown">
        <div class="row">
            <div class="col-md-5">
                <div class="container border" style="background-color: rgba(73, 73, 73, 0.737)">
                    <div class="jumbotron">
                        <div class="row">
                            <div>
                                <h1 class="display-6 fw-bold">Sports Development Scholarship</h1>
                                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for
                                    calling extra attention to featured content or information.</p>
                            </div>
                        </div>
                        <a class="btn btn-danger btn-lg" href="{{ route('student.sportsDev') }}" role="button"> Apply</a><br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="container border" style="background-color: rgba(73, 73, 73, 0.737)">
                    <div class="jumbotron">
                        <div class="row">
                            <div>
                                <h1 class="display-6 fw-bold">Culture And Arts Scholarship</h1>
                                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for
                                    calling extra attention to featured content or information.</p>
                            </div>
                        </div>
                        <a class="btn btn-danger btn-lg" href="{{ route('student.culture') }}" role="button"> Apply</a><br> <br>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>

@endsection
