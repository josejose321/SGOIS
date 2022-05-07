@extends('layouts.admin1')

@section('title', 'Admin Dashboard')
@section('content')

        <h2 class="text-dark mb-4 font-weight-bold ">
            DASHBOARD
            <button class="btn pull-right " id="import" type="button"
                style="background: var(--bs-gray-800);color: var(--bs-body-bg);">
                <i class="fa fa-download"></i>&nbsp; IMPORT STUDENTS</button>
            <button class="btn pull-right" type="button" id="addStudent"
                style="background: var(--bs-red);margin-right: 5px;border-bottom-color: var(--bs-red);color: var(--bs-body-bg);">
                <i class="fa fa-plus"></i>&nbsp; ADD STUDENT</button>

        </h2>
    <hr>

    <div class="row-fluid border">
        <div class="col-md-6 col-lg-3 mb-4 p-1">
            <div class="card-body " style="color: var(--bs-body-bg);background: var(--bs-red);">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                            <center>
                                <h5><strong>TOTAL SCHOLARHIPS</strong></h5>
                                <h5><strong>{{ $totalScholarships ?? 0 }}</strong></h5>
                            </center>
                        </div>
                    </div>
                    <div class="col-auto"><i class="fa fa-solid fa-school fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4 p-1">
            <div class="card-body" style="color: var(--bs-body-bg);background: var(--bs-red);">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                            <center>
                                <h5><strong>TOTAL DISCOUNTS</strong></h5>
                                <h5><strong>{{ $totalDiscounts ?? 0 }}</strong></h5>
                            </center>

                        </div>
                    </div>
                    <div class="col-auto"><i class="fa fa-solid fa-school fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4 p-1">
            <div class="card-body" style="color: var(--bs-body-bg);background: var(--bs-red);">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                            <center>
                                <h5><strong>TOTAL LOANS</strong></h5>
                                <h5><strong>{{ $totalLoans ?? 0 }}</strong></h5>
                            </center>

                        </div>
                    </div>
                    <div class="col-auto"><i class="fas fa-certificate fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4 p-1">
            <div class="card-body" style="color: var(--bs-body-bg);background: var(--bs-red);">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                            <center>
                                <h5><strong>OTHER Grants</strong></h5>
                                <h5><strong>{{ $totalOthers ?? 0 }}</strong></h5>
                            </center>

                        </div>
                    </div>
                    <div class="col-auto"><i class="fa fa-school fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    <canvas id="canvas" height="450" width="1200"></canvas>


    <br>
    <a href="#" class="btn btn-lg btn-primary float-right"> Export Data</a> <br> <br>

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
                            <td>{{ $allocation->categoryName ?? '' }}</td>
                            <td>{{ $allocation->field_team ?? '' }}</td>
                            <td>{{ $allocation->first ?? '' }}</td>
                            <td>{{ $allocation->second ?? '' }}</td>
                            <td>{{ $allocation->third ?? '' }}</td>
                            <td>{{ $allocation->fourth ?? '' }}</td>
                            <td>{{ $allocation->fifth ?? '' }}</td>
                            <td>{{ $allocation->sixth ?? '' }}</td>
                            <td>{{ $allocation->seventh ?? '' }}</td>
                            <td>{{ $allocation->total ?? '' }}</td>
                            <td>{{ $allocation->allocation ?? '' }}</td>
                            <td><button class="btn btn-secondary" type="button" data-toggle="modal"
                                data-target="#">
                                <i class="fa fa-add"></i>Add Slot</button>

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

    @include('modals.import')

@endsection
