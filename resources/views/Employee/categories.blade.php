@extends('layouts.employee')

@section('title', 'Available Programs - SGOIS')


@section('content')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header py-3">
                <div class="h3 font-weight-bold">Available Programs</div>
            </div>
            <div class="card-body" style="font-size: 14px;">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <div class="col mb-3 w-25 float-right">
                            {{-- <button type="button" class="btn btn-secondary" id="categoryBtn"><i
                                    class="fa fa-plus"></i><span>Add new</span></button> --}}
                        </div>
                        <thead>
                            <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                                <th>Program No</th>
                                <th>Program Name</th>
                                <th>Type</th>
                                <th>Field/Team</th>
                                <th>Allocation</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($office->categories as $category)
                                <tr>

                                    <th>{{ $category->categoryNo }}</th>
                                    <th>{{ $category->name }}</th>
                                    <th>{{ $category->type }}</th>
                                    <th>{{ $category->field_team }}</th>
                                    <th>{{ $category->allocation }}</th>
                                    {{-- <td><button class="btn btn-secondary" type="button" data-toggle="modal"
                                            data-target="#admin_viewCategory-{{ $category->categoryNo }}">
                                            <i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger" type="button">
                                            <i class="fa fa-trash-o"></i></button>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    @include('modals.addCategory')

@endsection
