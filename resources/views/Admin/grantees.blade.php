@extends('layouts.admin1')

@section('title', ' UNC Students')
@section('content')

    <div class="row-fluid" data-aos="fade-up">
        <div class="card">
            <div class="card-header">
                <h2>Grantees</h2> <br>
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
                            <th>PROGRAM APPLIED</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($grantees as $grantee)
                            <tr data-aos="fade-right">
                                <td> {{ $grantee->scholarshipNo ?? '' }}</td>
                                <td> {{ $grantee->student->user->user_id ?? '' }}</td>
                                <td> {{ $grantee->student->user->lastname ?? '' }}, {{ $grantee->student->user->firstname ?? '' }}
                                    {{ $grantee->student->user->middlename ?? '' }}</td>
                                <td>{{ $grantee->category->name ?? '' }}</td>
                                <td>{{ $grantee->adminVerification ?? '' }}</td>
                                <td>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal"
                                        data-target="#viewGrantee-{{ $grantee->scholarshipNo}}"><i class="fa fa-eye"></i>
                                        View</button>
                                </td>
                            </tr>
                        @empty
                            <td>No records</td>
                        @endforelse

                    </tbody>

                </table>
                <center>
                    {!! $grantees->links() !!}
                </center>
            </div>

        </div>
    </div>
    {{-- @include('modals.viewStudent') --}}
    @include('modals.addStudent')
    @include('modals.import')

    </html>





@endsection
