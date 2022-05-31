@extends('layouts.admin1')

@section('title', 'Admin Dashboard')
@section('content')

    <div class="row-fluid" data-aos="fade-down">
        <h2 class="text-dark  font-weight-bold ">
            DASHBOARD
        </h2>

        <div class="btn-group btn-group-lg d-flex justify-content-center">
            <button class="btn btn-secondary" type="button" id="addStudent">
                <i class="fa fa-plus"></i>Register Student</button>
            <button class="btn btn-secondary " id="import" type="button">
                <i class="fa fa-download"></i>Import Student</button>
            <button class="btn btn-secondary" type="button" id="addEndorser">
                <i class="fa fa-plus"></i>Register Endorser</button>
            <button class="btn btn-secondary" type="button" data-target="#externalModal" data-toggle="modal">
                <i class="fa fa-external-link"></i>External Summary</button>
            <button class="btn btn-secondary" type="button" data-target="#masterListModal" data-toggle="modal">
                <i class="fa fa-list"></i>Import External Masterlist </button>
        </div>


    </div> <br>

    <div class="col-md-12 d-flex justify-content-center" data-aos="fade-up">
        <div class=" card bg-secondary col-md-3 text-light p-1 m-1" style="width: 18rem;">
            <div class="card-body">
                <center>
                    <h5 class="card-title"><i class="fa fa-graduation-cap"></i> Scholarships</h5>
                    <h5>{{ $totalScholarships }}</h5>
                </center>
            </div>
        </div>
        <div class="card bg-secondary col-md-3 text-light p-1 m-1" style="width: 18rem;">
            <div class="card-body">
                <center>
                    <h5 class="card-title"><i class="fa fa-graduation-cap"></i> Discounts</h5>
                    <h5>{{ $totalDiscounts }}</h5>
                </center>
            </div>
        </div>
        <div class="card bg-secondary col-md-3 text-light p-1 m-1" style="width: 18rem;">
            <div class="card-body">
                <center>
                    <h5 class="card-title"> <i class="fa fa-graduation-cap"></i> Loans</h5>
                    <h5>{{ $totalLoans }}</h5>
                </center>
            </div>
        </div>
        <div class="card bg-secondary col-md-3 text-light p-1 m-1" style="width: 18rem;">
            <div class="card-body">
                <center>
                    <h5 class="card-title"><i class="fa fa-graduation-cap"></i> External Grants</h5>
                    <h5>{{ $totalOthers }}</h5>
                </center>
            </div>
        </div>
    </div>
    <canvas data-aos="fade-up" id="canvas" height="450" width="1200"></canvas>


    <br>
    <a href="{{ route('admin.report.download') }}" class="btn btn-lg btn-secondary float-right"> Generate Report</a> <br>
    <br>

    <div class="card-body" style="font-size: 14px;">
        <div class="table" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0" id="dataTable">
                <thead>
                    <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                        <th>Program No.</th>
                        <th>Program Name</th>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $report)
                        <tr data-aos="fade-right">
                            <td>{{ str_pad($report->categoryNo, 4, '0', STR_PAD_LEFT) ?? '' }}</td>
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
    @include('charts.grantees')
    @include('modals.addStudent')
    @include('modals.addSem')
    @include('modals.addStudent')
    @include('modals.addEndorser')
    @include('modals.import')
    @include('modals.importMasterList')
    @include('modals.externalSummary')

@endsection
