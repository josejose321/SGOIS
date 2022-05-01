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
    <br>
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
                                <h5><strong>OTHER SCHOLARSHIPS</strong></h5>
                                <h5><strong>{{ $totalOthers ?? 0 }}</strong></h5>
                            </center>
                            
                        </div>
                    </div>
                    <div class="col-auto"><i class="fa fa-school fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    <canvas id="canvas" height="450" width="1200"></canvas> <br>
    <div class="row">
        <h3>SPORTS DEVELOPMENT OFFICE</h3>
        <h2>Total Varsities</h2>
        <div class="col w-72">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class='fa fa-basketball-ball'></i> Basketball</h5>
                    <p class="card-text">0/10</p>
                </div>
            </div>
        </div>
        <div class="col w-72">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class='fa fa-volleyball'></i> Volleyball</h5>
                    <p class="card-text">0/10</p>
                </div>
            </div>
        </div>
        <div class="col w-72">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class='fas fa-swimming-pool'></i> Swimming</h5>
                    <p class="card-text">0/10</p>
                </div>
            </div>
        </div>
        <div class="col w-72">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> <i class="fa fa-running"></i> Athletics</h5>
                    <p class="card-text">0/10</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <h3> University Culture And Arts Scholarship</h3>
        <div class="col w-72">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class='fa fa-basketball-ball'></i> Basketball</h5>
                    <p class="card-text">0/10</p>
                </div>
            </div>
        </div>
        <div class="col w-72">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-music"></i> UNC BAND</h5>
                    <p class="card-text">0/10</p>
                </div>
            </div>
        </div>
        <div class="col w-72">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-music"></i> GLEE CLUB</h5>
                    <p class="card-text">0/10</p>
                </div>
            </div>
        </div>
        <div class="col w-72">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-music"></i> PEP Squad</h5>
                    <p class="card-text">0/10</p>
                </div>
            </div>
        </div>
    </div>

    <br>
    <a href="#" class="btn btn-lg btn-primary float-right"> Export Data</a>
    @include('charts.grantees')
    @include('modals.addStudent')
    @include('modals.addSem')
    @include('modals.addStudent')

    @include('modals.import')






@endsection
