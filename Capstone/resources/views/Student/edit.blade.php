@extends('layouts.app')

@section('title',"Student Edit")
@section('content')


<section class="container w-75" style="background-color: rgb(196, 195, 195)"><br>
    <div class="container">
        <form>
          
            <h1>Edit Profile</h1>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4">Student_no</label>
                <input type="text" class="form-control" name="student_no" placeholder="Student No" value="{{ $student->student_no }}" readonly>
              </div>
            </div>
            
            <h2>Edit name</h2>
            <div class="form-row">
                
                <div class="form-group col-md-4">
                    <label for="inputAddress">Firstname</label>
                    <input type="text" class="form-control"  placeholder="{{ $student->lastname }}" value="{{ $student->firstname }}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">Middlename</label>
                    <input type="text" class="form-control"  placeholder="{{ $student->lastname }}"value="{{ $student->middlename }}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">Lastname</label>
                    <input type="text" class="form-control" placeholder="{{ $student->lastname }}"value="{{ $student->lastname }}">
                  </div>
            </div>
            <h2>Edit Other Information</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Email</label>
                    <input type="text" class="form-control" placeholder="{{ $student->email }}" value="{{ $student->email }}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">Department</label>
                    <input type="text" class="form-control" placeholder="{{ $student->department }}" value="{{ $student->department }}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">Contact Number</label>
                    <input type="text" class="form-control" placeholder="{{ $student->phoneNumber }}" value="{{ $student->phoneNumber }}">
                  </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Course</label>
                    <input type="text" class="form-control"  placeholder="{{ $student->course }}" value="{{ $student->course }}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">year</label>
                    <input type="text" class="form-control"  placeholder="{{ $student->year }}" value="{{ $student->year }}">
                  </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit Profile</button>
            <button type="button" onclick="history.back()" class="btn btn-danger">Cancel</button>
          </form>
          <br>
    </div>
</section>

@endsection