@extends('layouts.student')

@section('title',"Student Edit")
@section('content')

<br><br>

<section class="container w-75" style="background-color: rgb(196, 195, 195)"><br>
  <form action="{{ url('student/'.$student->student_no . '/avatar')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="w-50"><img src="{{ Storage::url('avatar/'. $student->avatar) }}" class="img-thumbnail w-25" alt="avatar.jpeg"><br></div>
    <div class="form-group">
      <label for="exampleFormControlFile1"></label>
      <input type="file" class="form-control-file" name="avatar">
    </div>
    <button type="submit" class="btn btn-primary"> update avatar</button>
  </form>

    <div class="container">
        <form action="{{ url('student/' . $student->student_no . '/update')}}" method="POST">
          @csrf
            <h1>Edit Profile</h1>
            @if ($errors->any())
              <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
             </ul>
            </div>
            @endif
            <div class="row">
              
              <div class="col-md-4">
                  <label for="student_no">Student_no</label>
                  <input type="text" class="form-control" placeholder="Student No" value="{{ $student->student_no }}" readonly>
              </div>
            </div>
            <div class="row">
                
                <div class="col-md-4">
                    <label for="inputAddress">Firstname</label>
                    <input type="text" class="form-control" name="firstname"  placeholder="{{ $student->firstname }}" value="{{ $student->firstname }}">
                </div>
                <div class="col-md-4">
                    <label for="inputAddress">Middlename</label>
                    <input type="text" class="form-control" name="middlename" placeholder="{{ $student->middlename }}"value="{{ $student->middlename }}">
                </div>
                <div class="col-md-4">
                    <label for="inputAddress">Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="{{ $student->lastname }}"value="{{ $student->lastname }}">
                </div>
                  
                  
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="inputAddress">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="{{ $student->email }}" value="{{ $student->email }}">
                </div>
                  <div class="col-md-4">
                      <label for="inputAddress">Department</label>
                      <input type="text" class="form-control" name="departmentCode" placeholder="Department Code" value="{{ $student->departmentCode }}">
                  </div>
                  <div class="col-md-4">
                      <label for="inputAddress">Contact Number</label>
                      <input type="text" class="form-control" name="phone" placeholder="{{ $student->phoneNumber }}" value="{{ $student->phone }}" maxlength="11">
                  </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="inputAddress">Course</label>
                    <input type="text" class="form-control" name="course"  placeholder="{{ $student->course }}" value="{{ $student->course }}">
                  </div>
                  <div class="col-md-4">
                    <label for="inputAddress">year</label>
                    <input type="text" class="form-control" name="year"  placeholder="{{ $student->year }}" value="{{ $student->year }}">
                  </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit Profile</button>
            <a href="{{ url('student/' . $student->student_no) }}"><button type="button" class="btn btn-danger">Back</button></a>
          </form>
          <br>
    </div>
</section>
@if (Session::has('avatarSuccess'))
<script>
    swal({
          title: "Import Success!",
          text: "{{ Session::get('avatarSuccess') }}",
          icon: "success",
          button: "ok!",
        });
</script>
@endif
@if (Session::has('successUpdate'))
<script>
    swal({
          title: "Update Success!",
          text: "{{ Session::get('successUpdate') }}",
          icon: "success",
          button: "ok!",
        });
</script>
@endif
@if (Session::has('errorUpdate'))
<script>
    swal({
          title: "Update Failed!",
          text: "{{ Session::get('errorUpdate') }}",
          icon: "error",
          button: "ok!",
        });
</script>
@endif
@if (Session::has('avatarError'))
<script>
    swal({
          title: "MISSING!",
          text: "{{ Session::get('avatarError') }}",
          icon: "error",
          button: "ok!",
        });
</script>
@endif
{{ Session::forget('avatarError') }}
{{ Session::forget('successUpdate') }}
{{ Session::forget('errorUpdate') }}
{{ Session::forget('avatarSuccess') }}
@endsection