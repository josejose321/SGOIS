@extends('layouts.admin1')
@section('title', 'Pending Loans')


@section('content')
    <div class="container-fluid" data-aos="fade-up">
        <div class="card shadow">
            <div class="card-header py-3">
                <div class="h3 font-weight-bold">Pending Loan</div>
            </div>
            <div class="card-body" style="font-size: 14px;">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                                <th scope="col">SCHOLARSHIP NO</th>
                                <th scope="col">STUDENT ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">OFFICE STATUS</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($scholarships as $scholarship)
                                <tr>
                                    <td>{{ str_pad($scholarship->scholarshipNo, 6, '0', STR_PAD_LEFT) ?? '' }}</td>
                                    <td>{{ $scholarship->student_no ?? '' }}</td>
                                    <td>{{ $scholarship->student->lastname ?? '' }},{{ $scholarship->student->firstname }}
                                        {{ $scholarship->student->middlename }}</td>
                                    <td>{{ $scholarship->student->email }}</td>
                                    <td>{{ $scholarship->officeVerification }}</td>
                                    <td><a class="btn-lg btn-secondary" href="{{ route('admin.application.view',$scholarship->scholarshipNo) }}" type="button">
                                        <i class="fa fa-pencil"></i>Preview</a>
                                </td>
                                </tr>
                                @empty
                                    <td>No Pending Request</td>
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
