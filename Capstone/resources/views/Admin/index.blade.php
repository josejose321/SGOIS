@extends('layouts.admin1')

@section('title','Admin Dashboard')
@section('content')
    
<div class="row">
  <div class="col-md-6 col-xl-3 mb-4">
      <div class="card shadow border-start-primary py-2">
          <div class="card-body" style="background-color: rgb(185, 93, 93)">
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
  </div>
  <div class="col-md-6 col-xl-3 mb-4">
      <div class="card shadow border-start-success py-2">
          <div class="card-body"style="background-color: rgb(150, 71, 71);">
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
  </div>
  <div class="col-md-6 col-xl-3 mb-4">
      <div class="card shadow border-start-info py-2">
          <div class="card-body" style="background-color: rgb(185, 93, 93)">
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
  </div>
  <div class="col-md-6 col-xl-3 mb-4">
      <div class="card shadow border-start-warning py-2">
          <div class="card-body" style="background-color: rgb(150, 71, 71);">
              <div class="row align-items-center no-gutters">
                  <div class="col me-2">
                      <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                          <center><h5><strong>OTHER SCHOLARHIPS</strong></h5></center>
                          <center><h5><strong>{{ $totalOthers ?? 0 }}</strong></h5></center>
                      </div>
                  </div>
                  <div class="col-auto"><i class="fas fa-solid fa-school fa-2x text-gray-300"></i></div>
              </div>
          </div>
      </div>
  </div>
</div>
    <div class="row">
      <div class="col">
        <form action="{{ url('/admin/import') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" name="file">
          </div>
          <button type="submit" class="btn btn-primary">Import File</button>
        </form>
      </div>
      <div class="col">

      </div>
  </div>
        <div class="container-fluid">
              <div class="card bg-light">
                  <div class="card-header">
                    <h2>Students</h2> <br>
                    <h3>TOTAL: {{ $total }}</h3>
                    <div class="form-row w-50 float-right">
                      <div class="col input-group mb-3 w-25">
                        <select class="custom-select" id="sort">
                          <option selected>Sort By:</option>
                          <option value="1">Department</option>
                          <option value="2">Course</option>
                          <option value="3">Phone</option>
                        </select>
                      </div>
                      <div class=" col input-group mb-3 w-25 float-right">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-primary">search</button>
                      </div>
                    </div>
                    
                  </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="bg-success">
                          <tr>
                            <th scope="col" >STUDENT ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">DEPARTMENT</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>

                        <tbody>
                          
                          @foreach ($students as $student)
                          <tr>
                            <th scope="col"> {{ $student->student_no }}</th>
                            <th scope="col"> {{ $student->lastname ?? '' }}, {{ $student->firstname ?? '' }} {{ $student->middlename ??'' }}</th>
                            <th scope="col"> {{ $student->departmentCode ?? '' }}</th>
                            <th scope="col">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudent-{{ $student->student_no }}" >view</button> </th>
                          </tr>
                          @endforeach
                         
                        </tbody>
                        
                      </table>
                      <center>
                        {!! $students->links() !!}
                    </center>
                </div>
                
              </div>
        </div>
@include('modals.viewStudent')
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
</html>





@endsection
