@extends('layouts.admin1')
@section('title', 'Discounts')


@section('content')
    <div class="container-fluid" data-aos="fade-right">
        <div class="card shadow">
            <div class="card-header py-3">
                <div class="h3 font-weight-bold">Pending Discounts</div>
            </div>
            <div class="card-body" style="font-size: 14px;">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                                <th>APPLICATION NO</th>
                                <th>DISCOUNT APPLIED</th>
                                <th>STUDENT ID</th>
                                <th>NAME</th>
                                {{-- <th>EMAIL</th> --}}
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($scholarships as $scholarship)
                                <tr>
                                    <td>{{ str_pad($scholarship->scholarshipNo, 6, '0', STR_PAD_LEFT) ?? '' }}</td>
                                    <td>{{ $scholarship->category->name }}</td>
                                    <td>{{ $scholarship->student->user->user_id ?? '' }}</td>
                                    <td>{{ $scholarship->student->user->lastname ?? '' }},{{ $scholarship->student->user->firstname }}
                                        {{ $scholarship->student->user->middlename }}</td>
                                    {{-- <td>{{ $scholarship->student->user->email }}</td> --}}
                                    <td>{{ $scholarship->officeVerification }}</td>
                                    <td><a class="btn btn-secondary"
                                            href="{{ route('admin.application.view', $scholarship->scholarshipNo) }}"
                                            type="button">
                                            <i class="fa fa-pencil"></i>Preview</a>
                                    </td>
                                </tr>
                                @empty
                                <tr><td>No Pending Request</td></tr>
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
    <script>
        function deleteScholarship(scholarshipNo) {
            if (confirm("Do you really want to delete this scholarship?:\nScholarshipNo:" + scholarshipNo)) {
                alert(scholarshipNo);
            }
        }
    </script>

    @include('modals.admin_viewScholarship')


@endsection
