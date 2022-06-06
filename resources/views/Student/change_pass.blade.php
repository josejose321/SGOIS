@extends('layouts.student')
@section('title', 'Change Password-SGOIS')




@section('content')
    <br><br><br>
    <div class="container d-flex justify-content-center animate__animated animate__fadeInDown">
        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="card-header py-3">
                    <h2 class="fw-bold">Change Password</h2>
                </div>
                <form action="{{ route('student.update.password') }}" method="post">
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
                        <a type="submit" href="{{ route('student.index') }}" class="btn btn-info float-end p-1 m-1">Go
                            Back</a>
                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
@endsection
