@extends('layouts.admin')

@section('title','Admin Dashboard')
@section('content')
    
  <div class="btn-group btn-group-lg d-flex justify-content-center" role="group" aria-label="Basic example">
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
  
  <hr>

  <form action="{{ url('/Admin/import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlFile1">Example file input</label>
      <input type="file" class="form-control-file" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Import File</button>
  </form>
    <div class="container-fluid">
      
      <section>
        <div class="container-fluid">
              <div class="card bg-light">
                  <div class="card-header">
                    <h2>Students</h2>
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
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">DEPARTMENT</th>
                            <th scope="col">PHONE</th>
                            <th scope="col">COURSE</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">avatar</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach ($students as $student)
                          <tr>
                            <th scope="col" name="student_no" > {{ $student->student_no }}</th>
                            <th scope="col" name="firstname">{{ $student->lastname }}, {{ $student->firstname }} {{ $student->middlename }}</th>
                            <th scope="col" name="email">{{ $student->email }}</th>
                            <th scope="col" name="department">{{ $student->department }}</th>
                            <th scope="col" name="phone">{{ $student->phone }}</th>
                            <th scope="col" name="course">{{ $student->course }}</th>
                            <th scope="col" name="year">{{ $student->year }}</th>
                            <th scope="col" name="avatar">temp</th>
                            <th scope="col"><button type="submit" class="button btn-primary">EDIT</button>
                            <button type="button" class="button btn-secondary" onclick="viewStudent({{ $student }})">view</button> </th>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
      </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <section>
        <div class="container-fluid">
              <div class="card">
                  <div class="card-header">
                    <h2>Sholarhips</h2>
                
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Department</th>
                            <th scope="col">COURSE</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">REQUIREMENTS</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="scholarhipdata">
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                            
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
    <br><br><br>
    <section class="">
        <div class="container-fluid">
              <div class="card">
                <div class="card-header">
                    <h2>Discount</h2>
                  </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Department</th>
                            <th scope="col">COURSE</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">REQUIREMENTS</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="discountdata">
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
    <br><br><br>
    <section class="">
        <div class="container-fluid">
              <div class="card">
                <div class="card-header">
                    <h2>Loans Applied</h2>
                  </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Department</th>
                            <th scope="col">COURSE</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">REQUIREMENTS</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="loanData">
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
    <br><br><br>
    <section class="">
        <div class="container-fluid">
              <div class="card">
                <div class="card-header">
                    <h2>Government Grantees</h2>
                  </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead >
                          <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Department</th>
                            <th scope="col">COURSE</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">REQUIREMENTS</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="granteesdata">
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Decline</button> </th>

                          </tr>
                            
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
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
