@extends('layouts.admin1')
@section('title', 'Pending Loans')


@section('content')
    <div class="container-fluid">
        <div class=" h2 font-weight-bold">LOANS</div>
        <div class="card shadow">
            <div class="card-header py-3">
                <div class="h3 font-weight-bold">Pending Loans Request</div>
            </div>
            <div class="card-body" style="font-size: 14px;">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                                <th >LOAN NO.</th>
                                <th >NAME</th>
                                <th >EMAIL</th>
                                <th >DEPARTMENT</th>
                                <th >OFFICE STATUS</th>
                                <th >ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($scholarships as $scholarship)
                                <tr>
                                    <td>{{ str_pad($scholarship->scholarshipNo, 6, '0', STR_PAD_LEFT) ?? '' }}</td>
                                    <td>{{ $scholarship->student->lastname }},{{ $scholarship->student->firstname }}
                                        {{ $scholarship->student->middlename }}</td>
                                    <td>{{ $scholarship->student->email }}</td>
                                    <td>{{ $scholarship->student->departmentCode }}</td>
                                    <td>{{ $scholarship->officeVerification }}</td>
                                    <td><button class="btn-lg btn-secondary" type="button" data-toggle="modal"
                                        data-target="#admin_viewModalScholarship-{{ $scholarship->scholarshipNo }}">
                                        <i class="fa fa-pencil"></i> View</button>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $scholarships->links() !!}
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    @include('modals.admin_viewScholarship')


@endsection
