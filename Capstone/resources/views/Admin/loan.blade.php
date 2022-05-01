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
                            @foreach ($loans as $loan)
                                <tr>
                                    <td>{{ str_pad($loan->scholarshipNo, 6, '0', STR_PAD_LEFT) ?? '' }}</td>
                                    <td>{{ $loan->student->lastname }},{{ $loan->student->firstname }}
                                        {{ $loan->student->middlename }}</td>
                                    <td>{{ $loan->student->email }}</td>
                                    <td>{{ $loan->student->departmentCode }}</td>
                                    <td>{{ $loan->officeVerification }}</td>
                                    <td><button class="btn btn-lg" type="button"
                                            style="font-size: 14px;background: var(--bs-gray-600);color: var(--bs-body-bg);"><i
                                                class="fa fa-pencil"></i></button>
                                        <button class="btn btn-lg" type="button"
                                            style="font-size: 14px;text-align: center;margin-left: 2px;background: var(--bs-red);color: var(--bs-body-bg);"><i
                                                class="fa fa-trash-o"></i></button>
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
