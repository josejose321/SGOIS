@extends('layouts.employee')
@section('title', 'Change Password-SGOIS')




@section('content')
<div class="col-lg-7" data-aos="fade-up">
    <div class="card mb-3">
        <div class="card-header py-3">
            <h2 class="fw-bold">Change Password</h2>
        </div>
        <form action="{{ route('employee.update.password') }}" method="post">
            @csrf

            @foreach ($errors->all() as $error)
                <p class="text-danger"> {{ $error }}</p>
            @endforeach
            <div class="form-row p-3">
                <div class="form-group w-75">
                    <label for=""> Curent Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group w-75">
                    <label for=""> New Password</label>
                    <input type="password" class="form-control" name="new_password" required>
                </div>
                <div class="form-group w-75">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmed" required>
                </div>
            </div>


        <div class="card-footer">

            <button type="submit" class="btn btn-secondary float-end p-1 m-1">Change Password</button>
            <a type="submit" href="{{ route('employee.index') }}" class="btn btn-danger float-end p-1 m-1">Go Back</a>
            <br><br>
        </div>
        </form>
    </div>
</div>

@endsection
