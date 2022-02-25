@extends('layouts.admin')
@section('title','Scholarhips')


@section('content')
<h1>scholarhips</h1>
    {{ $students }}

    {{ $admin }}

@include('modals.viewStudent')
@include('modals.addStudent')
@include('modals.addSem')
@endsection