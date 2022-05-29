@extends('layouts.admin1')
@section('title', 'UNC REPORT')


@section('content')
    <div class="card-body" style="font-size: 14px;" data-aos="fade-up">
        <div class="table" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <br>
            <a href="{{ route('admin.report.download') }}" class="btn btn-lg btn-secondary float-right p-1 m-2">Generate Report</a> <br>
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
                    @foreach ($reports as $report)
                        <tr data-aos="fade-right">
                            <td>{{ str_pad($report->categoryNo, 6, '0', STR_PAD_LEFT) ?? '' }}</td>
                            <td>{{ $report->field_team ?? '' }}</td>
                            <td>{{ $report->categoryName ?? '' }}</td>
                            <td>{{ $report->first ?? '' }}</td>
                            <td>{{ $report->second ?? '' }}</td>
                            <td>{{ $report->third ?? '' }}</td>
                            <td>{{ $report->fourth ?? '' }}</td>
                            <td>{{ $report->fifth ?? '' }}</td>
                            <td>{{ $report->sixth ?? '' }}</td>
                            <td>{{ $report->seventh ?? '' }}</td>
                            <td>{{ $report->total ?? '' }}</td>
                            <td>{{ $report->allocation ?? '' }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- @include('modals.editCategoryAllo') --}}

@endsection
