@extends('layouts.admin1')
@section('title', 'Requirement View - UNC-SGOIS')


@section('content')
    <div class="container-fluid p-3 m-2 bg-light fw-bold">
        <h4>Application Type:{{ $scholarship->type ?? '' }}</h4>
        <h4>Name:{{ $scholarship->student->user->lastname ?? '' }}
            , {{ $scholarship->student->user->firstname ?? '' }} {{ $scholarship->student->user->middlename ?? '' }}</h4>
        <h4>Student ID:{{ $scholarship->student->user->user_id ?? '' }}</h4>
        <h4>Department:{{ $scholarship->student->course->department->name ?? '' }}</h4>
        <h4>Office:{{ $scholarship->category->office->name ?? '' }}</h4>
        <h4>Programs/Scholarships:{{ $scholarship->category->name ?? '' }}</h4>

        <button class="btn btn-lg btn-secondary float-right p-2 m-2" data-target="#modalScholarship" data-toggle="modal"><i class="fa fa-check" aria-hidden="true"></i>
            Approve this Application</button>
    </div> <br>
    <div class="container-fluid animate__animated animate_fadeInUp border border-1">
        <iframe src="{{ Storage::url($scholarship->requirement ?? '') }}" frameborder="1" width="100%" height="1200px"></iframe>
    </div>
@include('modals.admin_viewApp')

@endsection
