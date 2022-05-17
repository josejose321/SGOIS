@extends('layouts.admin1')

@section('title', ' UNC Students')
@section('content')

    <div class="row-fluid" data-aos="fade-up">
        <div class="card">
            <div class="card-header">
                <h2>Students</h2> <br>
                <h3>TOTAL ACTIVE: {{ $total }}</h3>
                <div class="float-left">
                    <button class="btn btn-secondary" id="import" type="button">
                        <i class="fa fa-download"></i>&nbsp; Import Student</button>
                    <button class="btn btn-danger" type="button" id="addStudent">
                        <i class="fa fa-plus"></i>&nbsp; Register Student</button>
                </div>&nbsp;&nbsp;

                <div class="col-md-6 input-group float-right">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i> search</button>
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
                            <tr data-aos="fade-right">
                                <td> {{ $user->userNo ?? '' }}</td>
                                <td> {{ $user->user_id ?? '' }}</td>
                                <td> {{ $user->lastname ?? '' }}, {{ $user->firstname ?? '' }}
                                    {{ $user->middlename ?? '' }}</td>
                                <td>
                                    <button type="button" class="btn-lg btn-secondary" data-toggle="modal"
                                        data-target="#viewStudent-{{ $user->user_id }}"><i class="fa fa-eye"></i>
                                        View</button>
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
