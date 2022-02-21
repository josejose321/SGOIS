@extends('layouts.admin1')

@section('title','Admin Dashboard')
@section('content')
    
  {{-- <div class="btn-group btn-group-lg d-flex justify-content-center" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary" id="addStudent">Add Student</button>
    <button type="button" class="btn btn-secondary">Students</button>
    <button type="button" class="btn btn-secondary" id="addApplication">Application Period </button>
    <button type="button" class="btn btn-secondary">Scholarships</button>
    <button type="button" class="btn btn-secondary ">Loans</button>
    <button type="button" class="btn btn-secondary">Discounts</button>
    <button type="button" class="btn btn-secondary">Statistics</button>
    <button type="button" class="btn btn-secondary">Reports</button>
    <button type="button" class="btn btn-secondary">Annoucenment</button>
    <button type="button" class="btn btn-secondary">Import Data</button>
    <button type="button" class="btn btn-secondary">log out</button>
   
  </div>
  
  <hr> --}}

  <form action="{{ url('/Admin/import') }}" method="POST" enctype="multipart/form-data">
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
                    <h2>Scholarships</h2>
                    <div class="input-group w-25 float-right">
                      <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                      <button type="button" class="btn btn-outline-primary">search</button>
                    </div><br>
                  </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="bg-success">
                          <tr>
                            <th scope="col">STUDENT ID</th>
                            <th scope="col">AVATAR</th>
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
                        </tbody>
                      </table>
                </div>
                <center>nothing</center>
              </div>
        </div>
   

   {{-- modal add student --}}
   <form action="{{ route('Student.store') }}" method="POST" enctype="multipart/form-data">
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

  $("body").on('submit',"#studentform", function(e){
    e.preventDefault();
    

    axios.post('{{ route('Student.store') }}',$(this).serialize())
    .then(res => {
      console.log(res)
    })
    .catch(err => {
      console.error(err.response.data);
    })
    console.log($(this).serialize());
    alert($(this).serialize());
  })
</script>


@endsection
