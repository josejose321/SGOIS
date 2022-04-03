@extends('layouts.admin1')

@section('title', 'Admin Dashboard')
@section('content')

    <div class="row-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Students</h2> <br>
                <h3>TOTAL ACTIVE: {{ $total }}</h3>
                <div class="form-row w-50 float-right">
                    <div class="col input-group mb-3 w-25">
                        <select class="custom-select" id="sort">
                            <option selected>Sort By:</option>
                            <option value="departmentCode">Department</option>
                            <option value="course">Course</option>
                            <option value="lastname">Phone</option>
                        </select>
                    </div>
                    <div class=" col input-group mb-3 w-25 float-right">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <button type="button" class="btn btn-primary">search</button>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
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
                                <td scope="col"> {{ $student->lastname ?? '' }}, {{ $student->firstname ?? '' }}
                                    {{ $student->middlename ?? '' }}</td>
                                <td scope="col"> {{ $student->departmentCode ?? '' }}</td>
                                <td scope="col">
                                    <button type="button" class="btn-lg btn-secondary" data-toggle="modal"
                                        data-target="#viewStudent-{{ $student->student_no }}"><i class="fa fa-eye"></i></button>
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
    {{-- message from server --}}
    @if (Session::has('success'))
        <script>
            swal({
                title: "Successfully Added!",
                text: "{{ Session::get('success') }}",
                icon: "success",
                button: "ok!",
            });
        </script>
    @endif



    @if (Session::has('successImport'))
        <script>
            swal({
                title: "Import Success!",
                text: "{{ Session::get('successImport') }}",
                icon: "success",
                button: "ok!",
            });
        </script>
    @endif
    @if (Session::has('errorImport'))
        <script>
            swal({
                title: "Import Failed!",
                text: "{{ Session::get('errorImport') }}",
                icon: "error",
                button: "ok!",
            });
        </script>
    @endif




    @if (Session::has('error'))
        <script>
            swal({
                title: "Something Went Wrong!",
                text: "{{ Session::get('error') }}",
                icon: "error",
                button: "ok!",
            });
        </script>
    @endif

    </html>





@endsection
