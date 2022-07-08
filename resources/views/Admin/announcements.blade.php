@extends('layouts.admin1')
@section('title', 'Announcements')


@section('content')
    <div class="container-fluid" data-aos="fade-right">
        <div class="card shadow">
            <div class="card-header">
                <div class="h3 font-weight-bold">Announcements</div>
                <div class="col-md-4 float-right">
                    <button type="button" class="btn btn-secondary" id="announce"><i class="fa fa-bell"></i><span>COMPOSE
                            ANNOUNCEMENT</span></button>
                </div> <br>
            </div>
            <div class="card-body" style="font-size: 14px;">

                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">

                        <thead>
                            <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                                <th>Announcement No.</th>
                                <th>SUBJECT</th>
                                <th>DATE CREATED</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($announcements as $announcement)
                                <tr>
                                    <td>{{ $announcement->id ?? '' }}</td>
                                    <td>{{ $announcement->subject ?? '' }}</td>
                                    <td>{{ $announcement->created_at->format('y/m/d') }}</td>
                                    <td>
                                        <button class="btn btn-secondary" type="button" data-toggle="modal"
                                            data-target="#viewAnnouce-{{ $announcement->id }}">
                                            <i class="fa fa-pencil"></i></button>
                                        <a href="{{ route('admin.announce.delete', $announcement->id) }}"><button
                                                class="btn btn-danger" type="button">
                                                <i class="fa fa-trash-o"></i></button></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No Announcements</td>
                                </tr>
                            @endforelse
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
    @include('modals.viewAnnounce')
    @include('modals.announce')
@endsection
