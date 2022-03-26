@extends('layouts.admin1')
@section('title','Applications')


@section('content')
<div class="container-fluid">
    <div class=" h2 font-weight-bold">Scholarship Applications</div>
    <div class="card shadow">
        <div class="card-header py-3">
            <div class="h3 font-weight-bold">Scholarship Applications</div>
        </div>
        <div class="card-body" style="font-size: 14px;">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <div class="col mb-3 w-25 float-right">
                        <button type="button" class="btn btn-secondary" id="application"><i class="fa fa-bell"></i><span>Open Scholarship Application</span></button>
                      </div>
                    <thead>
                        <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                            <th >SemesterCode</th>
                            <th>SEMESTER</th>
                            <th >PERIOD</th>
                            <th >STATUS</th>
                            <th >ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($semesters ?? '' as $semester)
                        <tr>
                            <td>{{ $semester->semesterCode ?? '' }}</td>
                            <td>{{ $semester->sem ?? ''}}</td>
                            <td>{{ $semester->period ?? '' }}</td>
                            <td>{{ $semester->active ?? '' }}</td>
                            <td>
                                <button class="btn" type="button" data-toggle="modal" data-target="#viewAnnouce-{{ $semester->semesterCode }}" style="font-size: 14px;background: var(--bs-gray-600);color: var(--bs-body-bg);"><i class="fa fa-pencil"></i></button>
                                <a href="#"><button class="btn" type="button" style="font-size: 14px;text-align: center;margin-left: 2px;background: var(--bs-red);color: var(--bs-body-bg);"><i class="fa fa-trash-o"></i></button></a>
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

@endsection