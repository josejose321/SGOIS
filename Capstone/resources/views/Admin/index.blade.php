@extends('layouts.admin1')

@section('title','Admin Dashboard')
@section('content')

<h2 class="text-dark mb-4 font-weight-bold">
    
    <button class="btn pull-right" id="import" type="button" style="background: var(--bs-gray-800);color: var(--bs-body-bg);">
        <i class="fa fa-download" ></i>&nbsp; IMPORT STUDENTS</button>
    <button class="btn pull-right" type="button" id="addStudent" style="background: var(--bs-red);margin-right: 5px;border-bottom-color: var(--bs-red);color: var(--bs-body-bg);">
        <i class="fa fa-pencil-square-o"></i>&nbsp; ADD STUDENT</button>
    DASHBOARD
</h2>

<div class="row-fluid border">
        <div class="col-md-6 col-xl-3 mb-4 p-2">
            <div class="card-body" style="color: var(--bs-body-bg);background: var(--bs-red);">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                            <center><h5><strong>TOTAL SCHOLARHIPS</strong></h5></center>
                            <center><h5><strong>{{ $totalScholarships ?? 0 }}</strong></h5></center>
                        </div>
                    </div>
                    <div class="col-auto"><i class="fas fa-solid fa-school fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4 p-2">
            <div class="card-body" style="color: var(--bs-body-bg);background: var(--bs-red);">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                            <center><h5><strong>TOTAL DISCOUNTS</strong></h5></center>
                            <center><h5><strong>{{ $totalDiscounts ?? 0 }}</strong></h5></center>
                        </div>
                    </div>
                    <div class="col-auto"><i class="fas fa-solid fa-school fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4 p-2">
            <div class="card-body" style="color: var(--bs-body-bg);background: var(--bs-red);">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                            <center><h5><strong>TOTAL LOANS</strong></h5></center>
                            <center><h5><strong>{{ $totalLoans ?? 0 }}</strong></h5></center>
                        </div>
                    </div>
                    <div class="col-auto"><i class="fas fa-solid fa-school fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4 p-2">
            <div class="card-body" style="color: var(--bs-body-bg);background: var(--bs-red);">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                            <center><h5><strong>OTHER SCHOLARSHIPS</strong></h5></center>
                            <center><h5><strong>{{ $totalOthers ?? 0 }}</strong></h5></center>
                        </div>
                    </div>
                    <div class="col-auto"><i class="fas fa-solid fa-school fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
<canvas id="canvas" height="500" width="1200"></canvas>
{{-- {{ dd($chartResult) }} --}}
{{-- @include('charts.departmentGrantees') --}}
@include('charts.grantees')
@include('modals.addStudent')
@include('modals.addSem')
{{-- message from server --}}
@if (Session::has('success'))
<script>
    swal({
          title: "Successfully Added!",
          text: "{{ Session::get('success') }}",
          icon: "success",
          button: "ok!",
        });
</script>
@endif



@if (Session::has('successImport'))
<script>
    swal({
          title: "Import Success!",
          text: "{{ Session::get('successImport') }}",
          icon: "success",
          button: "ok!",
        });
</script>
@endif
@if (Session::has('errorImport'))
<script>
    swal({
          title: "Import Failed!",
          text: "{{ Session::get('errorImport') }}",
          icon: "error",
          button: "ok!",
        });
</script>
@endif




@if (Session::has('error'))
<script>
  swal({
          title: "Something Went Wrong!",
          text: "{{ Session::get('error') }}",
          icon: "error",
          button: "ok!",
        });
</script>
    
@endif
@include('modals.addStudent')
@include('modals.addSem')
</html>





@endsection
