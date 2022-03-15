@extends('layouts.student')

@section('title','Student Dashboard')
    
@section('content')
<h1>Scholarships</h1>

{{ $scholarships }} <br>
{{  $discounts }} <br>
{{  $loans }}

@endsection