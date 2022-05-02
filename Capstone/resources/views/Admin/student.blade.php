@extends('layouts.admin1')

@section('title', ' UNC Students')
@section('content')

    <div class="row-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Students</h2> <br>
                <h3>TOTAL ACTIVE: {{ $total }}</h3>
                <div class="float-left">
                    <button class="btn" id="import" type="button"
                    style="background: var(--bs-gray-800);color: var(--bs-body-bg);">
                    <i class="fa fa-download"></i>&nbsp; IMPORT STUDENTS</button>
                <button class="btn" type="button" id="addStudent"
                    style="background: var(--bs-red);margin-right: 5px;border-bottom-color: var(--bs-red);color: var(--bs-body-bg);">
                    <i class="fa fa-plus"></i>&nbsp; ADD STUDENT</button>
                </div>&nbsp;&nbsp;
                <div class="form-row w-25 float-right">

                    <div class="col input-group mb-3 w-25 float-right">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <button type="button" class="btn btn-secondary">search</button>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                            <th scope="col">No#</th>
                            <th scope="col">STUDENT ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">DEPARTMENT</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($students as $student)
                            <tr>
                                <td scope="col"> {{ $student->student_no }}</td>
                                <td scope="col"> {{ $student->user_id }}</td>
                                <td scope="col"> {{ $student->lastname ?? '' }}, {{ $student->firstname ?? '' }}
                                    {{ $student->middlename ?? '' }}</td>
                                <td scope="col"> {{ $student->departmentCode ?? '' }}</td>
                                <td scope="col">
                                    <button type="button" class="btn-lg btn-secondary" data-toggle="modal"
                                        data-target="#viewStudent-{{ $student->student_no }}"><i
                                            class="fa fa-eye"></i> View</button>
                                </td>
                            </tr>
                        @endforeach

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
