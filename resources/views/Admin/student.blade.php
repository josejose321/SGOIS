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
                            <th>No#</th>
                            <th>STUDENT ID</th>
                            <th>NAME</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td> {{ $user->userNo ?? '' }}</td>
                                <td> {{ $user->user_id ?? '' }}</td>
                                <td> {{ $user->lastname ?? '' }}, {{ $user->firstname ?? '' }}
                                    {{ $user->middlename ?? '' }}</td>
                                <td>
                                    <button type="button" class="btn-lg btn-secondary" data-toggle="modal"
                                        data-target="#viewStudent-{{ $user->user_id }}"><i
                                            class="fa fa-eye"></i> View</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
                <center>
                    {!! $users->links() !!}
                </center>
            </div>

        </div>
    </div>
    @include('modals.viewStudent')
    @include('modals.addStudent')
    @include('modals.import')

    </html>





@endsection
