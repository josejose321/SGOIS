@extends('layouts.admin1')
@section('title', 'Scholarhips')


@section('content')
    <div class="container-fluid">
        <div class=" h1 font-weight-bold">SCHOLARSHIPS</div>
        <div class="card shadow">
            <div class="card-header py-3">
                <div class="h2 font-weight-bold">PENDING REQUEST</div>
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
                                <th>SCHOLARSHIP NO</th>
                                <th>STUDENT ID</th>
                                <th>NAME</th>
                                <th>Endorser Office</th>
                                <th>ENDORSER STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($scholarships as $scholarship)
                                <tr>
                                    <td>{{ str_pad($scholarship->scholarshipNo, 6, '0', STR_PAD_LEFT) ?? '' }}</td>
                                    <td>{{ $scholarship->student_no ?? '' }}</td>
                                    <td>{{ $scholarship->student->lastname ?? '' }},{{ $scholarship->student->firstname }}
                                        {{ $scholarship->student->middlename }}</td>
                                    <td>{{ $scholarship->office->name }}</td>
                                    <td>{{ $scholarship->officeVerification }}</td>
                                    <td><button class="btn-lg btn-secondary" type="button" data-toggle="modal"
                                            data-target="#admin_viewModalScholarship-{{ $scholarship->scholarshipNo }}">
                                            <i class="fa fa-pencil"></i></button>
                                        <button class="btn-lg btn-danger" type="button"
                                            onclick="deleteScholarship({{ $scholarship->scholarshipNo }})">
                                            <i class="fa fa-trash-o"></i></button>
                                    </td>
                                    {{-- <td><img src="{{ Storage::url($scholarship->photo) }}" class="rounded w-25"
                                        alt="avatar.jpeg"></td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <center>
                        {!! $scholarships->links() !!}
                    </center>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteScholarship(scholarshipNo) {
            if (confirm("Do you really want to delete this scholarship?:\nScholarshipNo:" + scholarshipNo)) {
                alert(scholarshipNo);
                window.location.href = "{{ url('admin/${scholarship}/delete') }}";
            }
        }
    </script>

    @include('modals.admin_viewScholarship')
@endsection
