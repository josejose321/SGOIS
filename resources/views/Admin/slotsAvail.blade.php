@extends('layouts.admin1')

@section('title', 'Available Programs')


@section('content')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header py-3">
                <div class="h2 font-weight-bold">AVAILABLE SLOTS</div>
                <button type="button" class="btn btn-secondary float-left" data-target="#categoryModal"
                    data-toggle="modal"><i class="fa fa-plus"></i><span>Add new</span></button>
                {{-- <form action="{{ route('admin.programs.search') }}" method="get">
                    @csrf
                    <div class="col-md-5 input-group float-right">
                        <a href="{{ route('admin.programs') }}" class="btn btn-outline-secondary">Reset</a>
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" name="term" />
                        <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i> search</button>
                    </div>
                </form> --}}
            </div>

            <div class="card-body" style="font-size: 14px;">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">

                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr style="background: var(--bs-red);color: var(--bs-body-bg);font-size: 15px;">
                                <th>Program No</th>
                                <th>Program Name</th>
                                <th>Field/Team</th>
                                <th>Type</th>
                                <th>Total Approved</th>
                                <th>Allocation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr data-aos="fade-right">

                                    <th>{{ $category->categoryNo ?? '' }}</th>
                                    <th>{{ $category->name ?? '' }}</th>
                                    <th>{{ $category->field_team ?? '' }}</th>
                                    <th>
                                        @if ($category->type === 'Discount')
                                            {{ $category->type ?? '' }}
                                        @else
                                            {{ $category->type ?? '' }} {{ 'Scholarship' }}
                                        @endif
                                    </th>
                                    <th>{{ $category->total ?? '' }}</th>
                                    <th>
                                        @if ( !$category->allocation)
                                            {{ 'Unlimited' }}
                                        @else
                                            {{ $category->allocation ?? '' }}
                                        @endif
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <center>
                        {!! $categories->links() !!}
                    </center> --}}
                </div>
            </div>
        </div>
    </div>
    @include('modals.addCategory')
    {{-- @include('modals.update_category') --}}

@endsection
