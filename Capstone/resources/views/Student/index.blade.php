@extends('layouts.student')

@section('title',"Student")
@section('content')

<hr> 
<div class="container border">
  <div class="row">
      <div class="col-md-6">
          <p><br>ACADEMIC ACHIEVEMENT SCHOLARSHIP – Scholarship to the rank 1 and rank 2 of the grade levels (Grade 2 to Grade 6) for one school year.&nbsp; The basis of ranking is the previous grade level average.&nbsp; The Elementary School Principal
              submits the list of qualified grantees to the Scholarships and Grants Office.&nbsp;RANKTUITION FEE SCHOLARSHIPRank 1100%Rank 250%DRUM, XYLOPHONE, MAJORETTE CORPS (DXMC) – 20% tuition discount is given to qualified members of the DXMC.
              Maintenance of the grant is evaluated by the coordinator of DXMC and the Principal.&nbsp; Open to Grades 3, 4, 5, and 6 levels willing to be trained and provide his / her own uniform.&nbsp; The DXMC Coordinator submits the list of
              qualified grantees endorsed by the Principal to the Scholarships and Grants Office.Contact Persons:&nbsp;Perlfrance Bayobo and Jobelle Lerit472-6100 local 139<br><br></p>
      </div>
      <div class="border col-md-6">
        <label class="form-label" style="text-align: center;margin-left: 125px;margin-top: 10px;font-weight: bold;color: var(--bs-red);font-size: 20px;">&nbsp;NEWS AND ANNOUNCEMENTS</label>
          @foreach ($announcements as $announcement)
          <div class="card p-1">
            <div class="card-header">
                <h5 class="mb-0 fw-bold">{{ $announcement->subject ?? '' }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text"> {{ $announcement->content }}</p>

                <p class="card-text">-
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