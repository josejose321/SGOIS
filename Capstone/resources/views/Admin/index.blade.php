@extends('layouts.admin')

@section('title','Admin Dashboard')
@section('content')
    
  
  
  <hr>

  <form action="{{ url('/admin/import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlFile1">Example file input</label>
      <input type="file" class="form-control-file" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Import File</button>
  </form>
        <div class="container-fluid">
              <div class="card bg-light">
                  <div class="card-header">
                    <h2>Students</h2> <br>
                    <h3>TOTAL: {{ $students->count() }}</h3>
                    <div class="input-group w-25 float-right">
                      <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                      <button type="button" class="btn btn-outline-primary">search</button>
                    </div><br>
                  </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="bg-success">
                          <tr>
                            <th scope="col" >STUDENT ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">DEPARTMENT</th>
                            <th scope="col">PHONE</th>
                            <th scope="col">COURSE</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach ($students as $student)
                          <tr>
                            <th scope="col" class="w-25"> {{ $student->student_no }}</th>
                            <th scope="col" class="w-25"> {{ $student->lastname }}, {{ $student->firstname }} {{ $student->middlename }}</th>
                            <th scope="col" >{{ $student->email }}</th>
                            <th scope="col" class="w-25">{{ $student->department->name }}</th>
                            <th scope="col">{{ $student->phone }}</th>
                            <th scope="col" >{{ $student->course }}</th>
                            <th scope="col">{{ $student->year }}</th>
                            <th scope="col">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudent-{{ $student->student_no }}" >view</button> </th>
                          </tr>
                          @endforeach
                         
                        </tbody>
                        
                      </table>
                </div>
                <hr>
                <center>>>end</center>
              </div>
        </div>
   

   {{-- modal add student --}}
   <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="modalAddStudent"></div>
  </form>
 
  {{-- modal add application period --}}
  <form id="periodform">
    @csrf
    <div id="modalPeriod"></div>
  </form>


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

{{-- modal and axios functions --}}
<script>
  //load modal content
  $(function(){
    $("#modalAddStudent").load("{{ asset('modal/addStudent.html') }}");
  })
  $(function(){
    $("#modalPeriod").load("{{ asset('modal/addApplication.html') }}");
  })



  // add application period
  $("#addApplication").on("click",function(){
    $('#appmodal').modal();
  })



  //  add student
  $("#addStudent").on("click", function(){
    $('#studentmodal').modal();
  })

</script>
@include('modals.viewStudent')
@include('modals.addStudent')
@include('modals.addSem')

@endsection
