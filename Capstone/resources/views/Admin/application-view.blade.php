@extends('layouts.admin1')
@section('title', 'Requirement View - UNC-SGOIS')


@section('content')
    <div class="container-fluid p-3 m-2 bg-light">
        <h4 class="fw-bold">Application Type:{{ $scholarship->type }}</h4>
        <h4 class="fw-bold">Name:{{ $scholarship->student->lastname }}
            , {{ $scholarship->student->firstname }} {{ $scholarship->student->middlename }}</h4>
        <h4 class="fw-bold">Student ID:{{ $scholarship->student->user_id }}</h4>
        <h4 class="fw-bold">Department:{{ $scholarship->student->department->name }}</h4>
        <h4 class="fw-bold">Office:{{ $scholarship->office->name }}</h4>
        <h4 class="fw-bold">Category:{{ $scholarship->category->name }}</h4>

        <a href="#" class="btn btn-lg btn-danger float-right p-2 m-2"><i class="fa fa-ban" aria-hidden="true"></i> Ignore
            this Application</a>
        <a href="#" class="btn btn-lg btn-primary float-right p-2 m-2"><i class="fa fa-check" aria-hidden="true"></i>
            Approve this Application</a>
    </div> <br>
    <div class="container-fluid animate__animated animate_fadeInUp">
        <iframe src="{{ Storage::url($scholarship->requirement) }}" frameborder="1" width="100%" height="1200px"></iframe>
    </div> <br>
    {{-- <div class="container-fluid animate__animated animate_fadeInUp">
        <iframe src="{{ Storage::url($scholarship->photo) }}" frameborder="1" width="100%" height="1200px"></iframe>
    </div> --}}
@endsection
