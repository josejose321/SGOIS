@extends('layouts.admin1')
@section('title','Admin Profile')


@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3 ">
                <div class="card-body text-center shadow">
                    <img class="rounded-circle mb-3 mt-4"src="{{ Storage::url('avatar/defaultAvatar.jpg') }}">
                    <div class="mb-3">
                        <button class="btn btn-sm" type="button" style="background: var(--bs-red);color: var(--bs-body-bg);">Change Photo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">

            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="h text-secondary m-0 font-weight-bold">Admin Profile</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.update', $admin->admin_no) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="username"><strong>Admin No</strong></label>
                                            <input class="form-control" type="text" value="{{ $admin->admin_no }}" disabled>
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
                                            <input class="form-control" type="text" id="first_name" name="firstname" value="{{ $admin->firstname }}">
                                        </div>
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Middle Name</strong></label>
                                            <input class="form-control" type="text" id="first_name-2" name="middlename"value="{{ $admin->middlename }}">
                                        </div>
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Last Name</strong></label>
                                            <input class="form-control" type="text" id="first_name-1" name="lastname"value="{{ $admin->lastname }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="phone"><strong>Phone&nbsp;</strong></label>
                                            <input class="form-control" type="text" id="phone" name="phone" value="{{ $admin->phone }}" maxlength="11">
                                        </div>
                                </div>
                                <div class="mb-3"><button class="btn btn-sm" type="submit" style="background: var(--bs-red);color: var(--bs-body-bg);">Save Profile</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if (Session::has('success'))
<script>
    swal({
          title: "Successfully Added!",
          text: "{{ Session::get('success') }}",
          icon: "success",
          button: "ok!",
        });
</script>
@endif
{{-- @if ($errors->any())
<script>
    swal({
    title: "Successfully Added!",
    text: "{{ $errors->all() }}",
    icon: "success",
    button: "ok!",
  });
</script>
@endif --}}

    
@endsection