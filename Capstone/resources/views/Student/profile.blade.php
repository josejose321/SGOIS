@extends('layouts.app')
@section('content')

{{-- <section>
    <div class="container">
          <div class="card">
              <div class="card-header">
                <h2>Students</h2>
            
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Department</th>
                        <th scope="col">COLUMN</th>
                        <th scope="col">COLUMN</th>
                        <th scope="col">COLUMN</th>
                        <th scope="col">ACTION</th>
                      </tr>
                    </thead>
                    <tbody class="data">
                      <tr>
                        
                      </tr>
                        
                    </tbody>
                  </table>
            </div>
          </div>
          {{ $student->student_no}} <br>
          {{ $student->firstname}}<br>
          {{ $student->middlename}}<br>
          {{ $student->lastname}}<br>
          {{ $student->email}}<br>
          {{ $student->department}}<br>
          {{ $student->phoneNumber}}<br>
    </div>
</section> --}}
          {{ $student->student_no}} <br>
          {{ $student->firstname}}<br>
          {{ $student->middlename}}<br>
          {{ $student->lastname}}<br>
          {{ $student->email}}<br>
          {{ $student->department}}<br>
          {{ $student->phoneNumber}}<br>
<br><br><br>

</section>
@endsection