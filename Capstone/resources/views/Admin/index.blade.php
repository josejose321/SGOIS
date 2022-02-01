@extends('layouts.admin')

@section('title','Admin Dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  



    
  <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary btn-lg w-100 p-4" id="addStudent">Add Student</button>
    <button type="button" class="btn btn-secondary btn-lg w-100 p-4" id="addApplication">Application Period </button>
    <button type="button" class="btn btn-secondary btn-lg w-100 p-4">Add</button>
  </div>
    <div class="container-fluid">
      
      <section>
        <div class="container-fluid">
              <div class="card">
                  <div class="card-header">
                    <h2>Students</h2>
                
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">STUDENT ID</th>
                            <th scope="col">FIRSTNAME</th>
                            <th scope="col">MIDDLENAME</th>
                            <th scope="col">LASTNAME</th>
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
                            <th scope="col"> {{ $student->student_no }}</th>
                            <th scope="col">{{ $student->firstname }}</th>
                            <th scope="col">{{ $student->middlename }}</th>
                            <th scope="col">{{ $student->lastname }}</th>
                            <th scope="col">{{ $student->email }}</th>
                            <th scope="col">{{ $student->department }}</th>
                            <th scope="col">{{ $student->phoneNumber }}</th>
                            <th scope="col">{{ $student->course }}</th>
                            <th scope="col">{{ $student->year }}</th>
                            <th scope="col"><button type="submit" class="button btn-primary">EDIT</button>
                              <button type="submit" class="button btn-danger">DELETE</button> </th>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
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
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">{{ $scholarships->id }}</th>
                            <th scope="col">{{ $scholarships->fullname }}</th>
                            <th scope="col">{{ $scholarships->department }}</th>
                            <th scope="col">{{ $scholarships->course }}</th>
                            <th scope="col">{{ $scholarships->year }}</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

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
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">{{ $loans->id }}</th>
                            <th scope="col">{{ $loans->fullname }}</th>
                            <th scope="col">{{ $loans->department }}</th>
                            <th scope="col">{{ $loans->course }}</th>
                            <th scope="col">{{ $loans->year }}</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

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
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">{{ $discounts->id }}</th>
                            <th scope="col">{{ $discounts->fullname }}</th>
                            <th scope="col">{{ $discounts->department }}</th>
                            <th scope="col">{{ $discounts->course }}</th>
                            <th scope="col">{{ $discounts->year }}</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

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
                        <tbody class="granteesdata">
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">{{ $grants->id }}</th>
                            <th scope="col">{{ $grants->fullname }}</th>
                            <th scope="col">{{ $grants->department }}</th>
                            <th scope="col">{{ $grants->course }}</th>
                            <th scope="col">{{ $grants->year }}</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                            <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                            
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
    </div>

   {{-- modal add student --}}
   <form id="studentform">
    @csrf
    <div id="modalAddStudent"></div>
  </form>
 
  {{-- modal add application period --}}
  <form id="periodform">
    @csrf
    <div id="modalPeriod"></div>
  </form>
</body>

</html>

{{-- for modal and axios functions --}}
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

  $("#studentform").on('submit',function(e){
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
