@extends('layouts.admin1')
@section('title','Scholarhips')


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
                            <th style="text-align: center;font-size: 14px;">STUDENT ID</th>
                            <th style="text-align: center;">NAME</th>
                            <th style="text-align: center;">EMAIL</th>
                            <th style="text-align: center;">DEPARTMENT</th>
                            <th class="text-center" style="text-align: center;">PHONE</th>
                            <th class="text-center">COURSE</th>
                            <th style="text-align: center;">OFFICE STATUS</th>
                            <th style="text-align: center;">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($loans as $loan)
                        <tr>
                            <td>{{ $loan->student_no }}</td>
                            <td>{{ $loan->student->lastname }},{{ $loan->student->firstname }} {{ $loan->student->middlename }}</td>
                            <td>{{ $loan->student->email }}</td>
                            <td>{{ $loan->student->departmentCode }}</td>
                            <td>{{ $loan->student->phone }}</td>
                            <td>{{ $loan->student->course }}</td>
                            <td>{{ $loan->officeVerification }}</td>
                            <td><button class="btn" type="button" style="font-size: 14px;background: var(--bs-gray-600);color: var(--bs-body-bg);"><i class="fa fa-pencil"></i></button>
                                <button class="btn" type="button" style="font-size: 14px;text-align: center;margin-left: 2px;background: var(--bs-red);color: var(--bs-body-bg);"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $loans->links() !!}
            </div>
            <div class="row">
            </div>
        </div>
    </div>
</div>



@endsection


