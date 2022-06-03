@extends('layouts.admin1')
@section('title', 'Semesters')


@section('content')
    @php
    use Carbon\Carbon;
    @endphp
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
                                <th>SEMESTER</th>
                                <th>REMAINING DAY{{ '(s)' }}</th>
                                <th>DEADLINE</th>
                                <th>DATE CREATED</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semesters ?? '' as $semester)
                                <tr>
                                    <td>{{ $semester->sem ?? '' }}</td>

                                    <td>
                                        @php
                                            $to = Carbon::parse($semester->deadline);
                                            $from = Carbon::parse($semester->created_at);
                                            $days = $from->diffInDays($to,false);
                                        @endphp
                                        @if ($days < 1)
                                        <p class="text-danger"><i class="fa fa-hourglass-end"></i>Ended</p>
                                        @else

                                            {{ $days }} {{ 'Day(s) remaining' }}
                                        @endif
                                    </td>
                                    <td>{{ Carbon::parse($semester->deadline)->format('Y-m-d') }}</td>
                                    <td>{{ Carbon::parse($semester->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                        @if ($semester->active)
                                            <h6 class="text-success"><i class="fa fa-check"></i> Active</h6>
                                        @else
                                            <h6 class="text-danger"><i class="fa fa-ban"></i> Disabled</h6>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-secondary" type="button" data-toggle="modal"
                                            data-target="#viewSem-{{ $semester->semesterCode }}"><i
                                                class="fa fa-expand"></i> Extend</button>
                                        <button class=" btn btn-danger"
                                            data-target="#deactivate_sem_modal-{{ $semester->semesterCode }}"
                                            data-toggle="modal"> <i class="fa fa-window-close"></i>Close Semester</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <center>
                        {!! $semesters->links() !!}
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
