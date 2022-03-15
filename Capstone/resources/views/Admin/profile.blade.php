@extends('layouts.admin1')
@section('title','Admin Profile')


@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow">
                    <img class="rounded-circle mb-3 mt-4" width="200" height="200" style="width: 200px;height: 200px;" src="{{ Storage::url('avatar/defaultAvatar.jpg') }}">
                    <div class="mb-3">
                        
                        <button class="btn btn-sm" type="button" style="background: var(--bs-red);color: var(--bs-body-bg);">Change Photo</button>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4"></div>
        </div>
        <div class="col-lg-8">

            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">User Profile</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="username"><strong>Admin No</strong></label>
                                            <input class="form-control" type="text" id="username" name="username" value="{{ $admin->admin_no }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label>
                                        <input class="form-control" type="email" id="email" name="email"value="{{ $admin->email }}">
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label>
                                            <input class="form-control" type="text" id="first_name" name="first_name" value="{{ $admin->firstname }}">
                                        </div>
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Middle Name</strong></label>
                                            <input class="form-control" type="text" id="first_name-2" name="first_name"value="{{ $admin->middlename }}">
                                        </div>
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Last Name</strong></label>
                                            <input class="form-control" type="text" id="first_name-1" name="first_name"value="{{ $admin->lastname }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Phone&nbsp;</strong></label>
                                            <input class="form-control" type="text" id="last_name" name="last_name" value="{{ $admin->phone }}">
                                    </div>
                                </div>
                                <div class="mb-3"><button class="btn btn-sm" type="submit" style="background: var(--bs-red);color: var(--bs-body-bg);">Save Settings</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection