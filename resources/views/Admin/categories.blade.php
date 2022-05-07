@extends('layouts.admin1')

@section('title', 'Categories')


@section('content')
    <div class="container-fluid">
        <div class="h2 font-weight-bold">SCHOLARSHIP AND GRANTS CATEGORIES</div>
        <div class="card shadow">
            <div class="card-header py-3">
                <div class="h2 font-weight-bold">Available Categories</div>
                <button type="button" class="btn btn-lg btn-secondary float-right" id="categoryBtn"><i
                    class="fa fa-plus"></i><span>Add new</span></button>
            </div>

            <div class="card-body" style="font-size: 14px;">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">

                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                                <th>Category No</th>
                                <th>Category Name</th>
                                <th>Type</th>
                                <th>Field/Team</th>
                                <th>Allocation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>

                                    <th>{{ $category->categoryNo }}</th>
                                    <th>{{ $category->name }}</th>
                                    <th>{{ $category->type }}</th>
                                    <th>{{ $category->field_team }}</th>
                                    <th>{{ $category->allocation ?? ''}}</th>
                                    <td><button class="btn-lg btn-secondary" type="button" data-toggle="modal"
                                        data-target="#viewCategory-{{ $category->categoryNo }}">
                                        <i class="fa fa-pencil"></i></button>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <center>
                        {!! $categories->links() !!}
                    </center>
                </div>
            </div>
        </div>
    </div>
    @include('modals.addCategory')
    @include('modals.viewCategory')

@endsection
