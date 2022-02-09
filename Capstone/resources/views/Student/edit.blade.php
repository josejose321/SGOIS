@extends('layouts.app')

@section('title',"Student Edit")
@section('content')

<br><br>

<section class="container w-75" style="background-color: rgb(196, 195, 195)"><br>
    <div class="container">
      <form action="{{ url('Student/'.$student->student_no . '/avatar')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" class="form-control-file" name="avatar">
        </div>
        <button type="submit" class="btn btn-primary"> update avatar</button>
      </form>

        <form action="{{ route('Student.update', $student->student_no) }}" method="POST">
          @csrf
            <h1>Edit Profile</h1>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="student_no">Student_no</label>
                <input type="text" class="form-control" name="student_no" placeholder="Student No" value="{{ $student->student_no }}" readonly>
              </div>
            </div>
            
            
            <h2>Edit name</h2>
            <div class="form-row">
                
                <div class="form-group col-md-4">
                    <label for="inputAddress">Firstname</label>
                    <input type="text" class="form-control" name="firstname"  placeholder="{{ $student->lastname }}" value="{{ $student->firstname }}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">Middlename</label>
                    <input type="text" class="form-control" name="middlename" placeholder="{{ $student->lastname }}"value="{{ $student->middlename }}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="{{ $student->lastname }}"value="{{ $student->lastname }}">
                  </div>
            </div>
            <h2>Edit Other Information</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="{{ $student->email }}" value="{{ $student->email }}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">Department</label>
                    <input type="text" class="form-control" name="department" placeholder="{{ $student->department }}" value="{{ $student->department }}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">Contact Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="{{ $student->phoneNumber }}" value="{{ $student->phone }}">
                  </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Course</label>
                    <input type="text" class="form-control" name="course"  placeholder="{{ $student->course }}" value="{{ $student->course }}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">year</label>
                    <input type="text" class="form-control" name="year"  placeholder="{{ $student->year }}" value="{{ $student->year }}">
                  </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit Profile</button>
            <button type="button" onclick="history.back()" class="btn btn-danger">Cancel</button>
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
          title: "Import Success!",
          text: "{{ Session::get('successUpdate') }}",
          icon: "success",
          button: "ok!",
        });
</script>
@endif
@endsection