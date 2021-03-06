@extends('layouts.employee')
@section('title', 'Endorser_Employee Profile')


@section('content')

    <div class="container-fluid">
        <h3 class="text-dark mb-4">Profile</h3>
        <div class="row mb-3">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="card mb-3 ">
                    <div class="card-body text-center shadow">

                        <form action="{{ route('employee.avatar.update', Auth::user()) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <label for="avatar">
                                <img class="rounded-circle mb-3 mt-4 w-50"
                                    src="{{ Storage::url('avatar/'. Auth::user()->avatar ?? '') }}">
                                <input type="file" id="avatar" name="avatar" style="display:none">

                            </label>

                            <div class="mb-3">
                                <button class="btn btn-sm" type="submit"
                                    style="background: var(--bs-red);color: var(--bs-body-bg);">Change Photo
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-left">

                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="h text-secondary m-0 font-weight-bold">employee Profile</p>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('employee.profile.update', Auth::user()) }}" method="POST">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="username"><strong>employee
                                                        No</strong></label>
                                                <input class="form-control" type="text"
                                                    value="{{ Auth::user()->user_id ?? '' }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label"
                                                    for="email"><strong>Email Address</strong></label>
                                                <input class="form-control" type="email" id="email" name="email"
                                                    value="{{ Auth::user()->email ?? '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label"
                                                    for="first_name"><strong>First Name</strong></label>
                                                <input class="form-control" type="text" id="first_name" name="firstname"
                                                    value="{{ Auth::user()->firstname ?? '' }}">
                                            </div>
                                            <div class="mb-3"><label class="form-label"
                                                    for="first_name"><strong>Middle Name</strong></label>
                                                <input class="form-control" type="text" id="first_name-2"
                                                    name="middlename" value="{{ Auth::user()->middlename ?? '' }}">
                                            </div>
                                            <div class="mb-3"><label class="form-label"
                                                    for="first_name"><strong>Last Name</strong></label>
                                                <input class="form-control" type="text" id="first_name-1" name="lastname"
                                                    value="{{ Auth::user()->lastname ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="phone"><strong>Phone&nbsp;</strong></label>
                                                <input class="form-control" type="text" id="phone" name="phone"
                                                    value="{{ Auth::user()->phone ?? '' }}" maxlength="11">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="officeCode"><strong>Office&nbsp;</strong></label>
                                                <input class="form-control" type="text" id="officeCode" name="officeCode"
                                                    value="{{ Auth::user()->employee->office->name ?? '' }}" maxlength="11" disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3"><button class="btn btn-sm" type="submit"
                                            style="background: var(--bs-red);color: var(--bs-body-bg);">Save
                                            Profile</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
