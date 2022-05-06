@extends('layouts.admin1')
@section('title', 'UNC REPORT')


@section('content')
    <div class="card-body" style="font-size: 14px;">
        <div class="table" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0" id="dataTable">
                <thead>
                    <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                        <th>Category No.</th>
                        <th>CATEGORY</th>
                        <th>Field/Team</th>
                        <th>10%</th>
                        <th>15%</th>
                        <th>25%</th>
                        <th>50%</th>
                        <th>75%</th>
                        <th>100%</th>
                        <th>Full</th>
                        <th>APPROVED</th>
                        <th>TOTAL SLOT</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allocations as $allocation)
                        <tr>
                            <td>{{ $allocation->categoryNo ?? '' }}</td>
                            <td>{{ $allocation->field_team ?? '' }}</td>
                            <td>{{ $allocation->categoryName ?? '' }}</td>
                            <td>{{ $allocation->first ?? '' }}</td>
                            <td>{{ $allocation->second ?? '' }}</td>
                            <td>{{ $allocation->third ??'' }}</td>
                            <td>{{ $allocation->fourth ?? '' }}</td>
                            <td>{{ $allocation->fifth ?? '' }}</td>
                            <td>{{ $allocation->sixth ?? '' }}</td>
                            <td>{{ $allocation->seventh ?? '' }}</td>
                            <td>{{ $allocation->total ?? '' }}</td>
                            <td>{{ $allocation->allocation ?? '' }}</td>
                            <td><button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#">
                                    <i class="fa fa-add"></i>Add Slot</button>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
