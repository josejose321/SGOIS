@extends('layouts.admin1')
@section('title', 'UNC REPORT')


@section('content')
    <div class="card-body" style="font-size: 14px;" data-aos="fade-up">
        <div class="table" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <br>
            <a href="{{ route('admin.report.download') }}" class="btn btn-lg btn-primary float-right p-1 m-2">Generate Report</a> <br>
            <br>
            <table class="table my-0" id="dataTable">
                <thead>
                    <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                        <th>Program No.</th>
                        <th>SGO Programs</th>
                        <th>Field/Team</th>
                        <th>10%</th>
                        <th>15%</th>
                        <th>25%</th>
                        <th>50%</th>
                        <th>75%</th>
                        <th>100%</th>
                        <th>Full</th>
                        <th>Total</th>
                        <th>Allocation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allocations as $allocation)
                        <tr data-aos="fade-right">
                            <td>{{ $allocation->categoryNo ?? '' }}</td>
                            <td>{{ $allocation->field_team ?? '' }}</td>
                            <td>{{ $allocation->categoryName ?? '' }}</td>
                            <td>{{ $allocation->first ?? '' }}</td>
                            <td>{{ $allocation->second ?? '' }}</td>
                            <td>{{ $allocation->third ?? '' }}</td>
                            <td>{{ $allocation->fourth ?? '' }}</td>
                            <td>{{ $allocation->fifth ?? '' }}</td>
                            <td>{{ $allocation->sixth ?? '' }}</td>
                            <td>{{ $allocation->seventh ?? '' }}</td>
                            <td>{{ $allocation->total ?? '' }}</td>
                            <td>{{ $allocation->allocation ?? '' }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('modals.editCategoryAllo')

@endsection
