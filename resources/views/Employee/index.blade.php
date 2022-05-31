@extends('layouts.employee')

@section('title', 'Endorser_Employee Dashboard')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p><br>
                <h1>Welcome!</h1>
                Finally, you have in your fingertips the information you need as a student. The myUNC: Student Module will
                give you access to your class schedule for the semester you are currently enrolled in, view your statement
                of accounts earlier and settle it before your exam schedules, check your subject grades and your class
                attendance both absences and lateness, and most the most important is, Graduate-on-Time by being able to see
                your Student Evaluation based from your course curriculum for any problems regarding your subjects taken.

                Directly chat with your parents, teachers, and friends and discuss matters regarding your academic
                performance or simply exchange communication either in the general chat room or through private messaging.

                This is an opportunity for you to have access to information. This is an opportunity to involve your parents
                in your educational development. Most of all, an opportunity for you to become a better student.<br><br></p>
                <h1>NON SCHOLAE SED VITAE</h1>
            </div>
            <div class=" col-md-6">
                <label class="form-label fw-bold"
                    style="text-align: center;margin-left: 125px;margin-top: 10px;font-weight: bold;color: var(--bs-red);font-size: 20px;">&nbsp;
                    <i class="fa fa-bullhorn"></i> NEWS AND ANNOUNCEMENTS</label>
                @foreach ($announcements as $announcement)
                    <div class="card p-1" style="background-color: beige">
                        <div class="card-header">
                            <h5 class="mb-0 fw-bold">{{ $announcement->subject ?? '' }}</h5>
                        </div>
                        <div class="card-body" style="background-color: beige">
                            <p class="card-text"> {{ $announcement->content ?? '' }}</p>

                            <p class="card-text">-Admin
                                {{ $announcement->employee->user->lastname ?? '' }},
                                {{ $announcement->employee->user->firstname ?? '' }}
                                {{ $announcement->employee->user->middlename ??'' }}</p>
                            <p>Date Created: {{ $announcement->created_at ?? '' }}</p>

                        </div>
                    </div>
                    <br>
                @endforeach
                <center>>end</center>
            </div>
        </div>
    </div>

@endsection
