@extends('layouts.admin1')
@section('title','Announcements')


@section('content')
<div class="container-fluid">
    <div class=" h2 font-weight-bold">ANNOUNCEMENTS</div>
    <div class="card shadow">
        <div class="card-header py-3">
            <div class="h3 font-weight-bold">Recent Announcements</div>
        </div>
        <div class="card-body" style="font-size: 14px;">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <div class="col mb-3 w-25 float-right">
                        <button type="button" class="btn btn-secondary" id="announce"><i class="fa fa-bell"></i><span>COMPOSE ANNOUNCEMENT</span></button>
                      </div>
                    <thead>
                        <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                            <th >Announcement No.</th>
                            <th>SUBJECT</th>
                            <th>ADMIN</th>
                            <th >ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements as $announcement)
                        <tr>
                            <td>{{ $announcement->id ?? '' }}</td>
                            <td>{{ $announcement->subject ?? ''}}</td>
                            <td>{{ $announcement->admin->lastname }}, 
                                {{ $announcement->admin->firstname }} 
                                {{ $announcement->admin->middlename }}</p></td>
                            <td>
                                <button class="btn" type="button" data-toggle="modal" data-target="#viewAnnouce-{{ $announcement->id }}" style="font-size: 14px;background: var(--bs-gray-600);color: var(--bs-body-bg);"><i class="fa fa-pencil"></i></button>
                                <a href="{{ route('admin.announce.delete',$announcement->id) }}"><button class="btn" type="button" style="font-size: 14px;text-align: center;margin-left: 2px;background: var(--bs-red);color: var(--bs-body-bg);"><i class="fa fa-trash-o"></i></button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <center>
                    {!! $announcements->links() !!}
                </center>
            </div>
            <div class="row">
            </div>
        </div>
    </div>
</div>
@if (Session::has('successDelete'))
<script>
    swal({
    title: "Success Delete!",
    text: "{{ Session::get('successDelete') }}",
    icon: "success",
    button: "ok!",
  });
</script>
@endif
@if (Session::has('successUpdate'))
<script>
    swal({
    title: "Success Update!",
    text: "{{ Session::get('successUpdate') }}",
    icon: "success",
    button: "ok!",
  });
</script>
@endif
@include('modals.viewAnnounce')
@endsection