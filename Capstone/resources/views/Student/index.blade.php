@extends('layouts.student')

@section('title',"Student")
@section('content')

<hr> 
<div class="container border">
  <div class="row">
      <div class="col-md-6">
          <p><br><h1>Welcome Students!</h1>
            Finally, you have in your fingertips the information you need as a student. 
            The myUNC: Student Module will give you access to your class schedule for the 
            semester you are currently enrolled in, view your statement of accounts earlier 
            and settle it before your exam schedules, check your subject grades and your class 
            attendance both absences and lateness, and most the most important is, Graduate-on-Time by 
            being able to see your Student Evaluation based from your course curriculum for any problems 
            regarding your subjects taken.
            <br></p>
            <h4>NON SCHOLAE SED VITAE</h4><br><br>
            <hr>
            <div class="jumbotron">
              <h1 class="display-6">Looking for Scholarships?</h1>
              <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <hr class="my-4">
              <p>University Scholarship And Grants Office Brings you best Scholarships and loan offers! <br>
                Click here...
              </p>
              <p class="lead ">
                <a class="btn btn-danger btn-lg" href="{{ route('student.scholarships') }}" role="button">Apply Now!</a>
              </p>
            </div>
      </div>
      <div class="border col-md-6" >
        <label class="form-label" style="text-align: center;margin-left: 125px;margin-top: 10px;font-weight: bold;color: var(--bs-red);font-size: 20px;">&nbsp;NEWS AND ANNOUNCEMENTS</label>
          @foreach ($announcements as $announcement)
          <div class="card p-1" style="background-color: beige">
            <div class="card-header" style="background-color: beige">
                <h5 class="mb-0 fw-bold">{{ $announcement->subject ?? '' }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text"> {{ $announcement->content }}</p>

                <p class="card-text">Admin-
                    {{ $announcement->admin->lastname }}, 
                    {{ $announcement->admin->firstname }} 
                    {{ $announcement->admin->middlename }}</p>
                    
            </div>
        </div>
        <br>
          @endforeach
          <center>>end</center>
      </div>
  </div>
</div>
  @include('modals.addScholarship')

@endsection