@extends('layouts.employee')
@section('title', 'Requirement View - UNC-SGOIS')


@section('content')
    <div class="container-fluid p-3 m-2 bg-light fw-bold">
        <h4>Application Type:{{ $scholarship->type ?? '' }}</h4>
        <h4>Name:{{ $scholarship->student->user->lastname ?? '' }}
            , {{ $scholarship->student->user->firstname ?? '' }} {{ $scholarship->student->user->middlename ?? '' }}</h4>
        <h4>Student ID:{{ $scholarship->student->user->user_id ?? '' }}</h4>
        <h4>Department:{{ $scholarship->student->course->department->name ?? '' }}</h4>
        <h4>Office:{{ $scholarship->office->name ?? '' }}</h4>
        <h4>Category:{{ $scholarship->category->name ?? '' }}</h4>

        <a href="#" class="btn btn-lg btn-danger float-right p-2 m-2"><i class="fa fa-ban" aria-hidden="true"></i> Ignore
            this Application</a>
        <button class="btn btn-lg btn-primary float-right p-2 m-2" data-target="#modalScholarship" data-toggle="modal"><i class="fa fa-check" aria-hidden="true"></i>
            Approve this Application</button>
    </div> <br>
    <div class="container-fluid animate__animated animate_fadeInUp border border-1">
        <iframe src="{{ Storage::url($scholarship->requirement ?? '') }}" frameborder="1" width="100%" height="1200px"></iframe>
    </div>
@include('modals.employee_viewApp')

@endsection
