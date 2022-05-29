@extends('layouts.admin1')
@section('title', 'Semesters')


@section('content')
    <div class="container-fluid" data-aos="fade-right">
        <div class="card shadow">
            <div class="card-header py-3">
                <div class="h3 font-weight-bold">Semesters</div>
            </div>
            <div class="card-body" style="font-size: 14px;">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <div class="col mb-3 w-25 float-right">
                            <button type="button" class="btn btn-secondary" data-target="#semModal" data-toggle="modal"><i
                                    class="fa fa-bell"></i><span>Open Scholarship Application</span></button>
                        </div>
                        <thead>
                            <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                                <th>SemesterCode</th>
                                <th>SEMESTER</th>
                                <th>DATE CREATED</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semesters ?? '' as $semester)
                                <tr>
                                    <td>{{ $semester->semesterCode ?? '' }}</td>
                                    <td>{{ $semester->sem ?? '' }}</td>
                                    <td>{{ $semester->created_at ?? '' }}</td>
                                    <td>
                                        @if ($semester->active)
                                            <h6 class="text-success"></i>Active</h6>
                                        @else
                                        <h6 class="text-danger"></i>Disabled</h6>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-secondary" type="button" data-toggle="modal"
                                            data-target="#viewSem-{{ $semester->semesterCode }}"><i
                                                class="fa fa-pencil"></i> View</button>
                                        @if ($semester->active)
                                            <button class=" btn btn-danger"
                                                data-target="#deactivate_sem_modal-{{ $semester->semesterCode }}"
                                                data-toggle="modal"> <i class="fa fa-off"></i>Deactivate</button>
                                        @else
                                            <button class=" btn btn-primary"
                                                data-target="#deactivate_sem_modal-{{ $semester->semesterCode }}"
                                                data-toggle="modal"> <i class="fa fa-off"></i> Activate</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <center>
                        {{-- {!! $announcements->links() !!} --}}
                    </center>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    @include('modals.addSem')
    @include('modals.updateSemester')
    @include('modals.deactivate_sem')

@endsection
