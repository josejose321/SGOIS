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
        }

    </style>
@stop

<br> <br><br>
<div class="container animate__animated animate__fadeInUp">
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header py-3">
                <div class="h2 font-weight-bold">My Application</div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body" style="font-size: 14px;">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                                <th>Application NO</th>
                                <th>Programs Applied</th>
                                <th>Endorsing Office</th>
                                <th>ENDORSER STATUS</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($scholarships as $scholarship)
                                <tr>
                                    <td>{{ str_pad($scholarship->scholarshipNo, 6, '0', STR_PAD_LEFT) ?? '' }}</td>
                                    <td>{{ $scholarship->category->name ?? '' }}</td>
                                    <td>{{ $scholarship->category->office->name ?? '' }}</td>
                                    <td>{{ $scholarship->officeVerification ?? '' }}</td>
                                    <td>{{ $scholarship->adminVerification ?? '' }}</td>
                                    <td><button class="btn btn-secondary" type="button">
                                            <i class="fa fa-eye"></i>Preview</button>
                                    </td>
                                </tr>
                                @empty
                                <tr><td>No Records</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                    <center>
                        {!! $scholarships->links() !!}
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
