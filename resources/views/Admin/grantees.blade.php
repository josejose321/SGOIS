@extends('layouts.admin1')

@section('title', ' UNC Students')
@section('content')

    <div class="row-fluid" data-aos="fade-up">
        <div class="card">
            <div class="card-header">
                <h2>Students</h2> <br>
                <h3>TOTAL GRANTEES: {{ $total }}</h3>

                <form action="" method="">
                    @csrf
                    <div class="col-md-6 input-group float-right">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" name="term" />
                        <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i> search</button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                            <th>No#</th>
                            <th>STUDENT ID</th>
                            <th>NAME</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($students as $student)
                            <tr data-aos="fade-right">
                                <td> {{ $student->user->student->userNo ?? '' }}</td>
                                <td> {{ $student->user->student->user_id ?? '' }}</td>
                                <td> {{ $student->user->lastname ?? '' }}, {{ $student->user->firstname ?? '' }}
                                    {{ $student->user->middlename ?? '' }}</td>
                                <td>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal"
                                        data-target="#viewStudent-{{ $student->student_no}}"><i class="fa fa-eye"></i>
                                        View</button>
                                </td>
                            </tr>
                        @empty
                            <td>No records</td>
                        @endforelse

                    </tbody>

                </table>
                <center>
                    {!! $students->links() !!}
                </center>
            </div>

        </div>
    </div>
    @include('modals.viewStudent')
    @include('modals.addStudent')
    @include('modals.import')

    </html>





@endsection
