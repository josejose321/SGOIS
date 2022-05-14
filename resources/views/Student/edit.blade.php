@extends('layouts.student')

@section('title', 'Edit Profile')
@section('content')

    <section class="container w-50 bg-light"><br>
        <form action="{{ route('student.avatar.update', $student->student_no) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
                <label for="avatar">
                    <img src="{{ Storage::url('avatar/' . $student->user->avatar) }}" class="img-round w-25"
                        alt="avatar.jpeg">
                    <input type="file" id="avatar" class="form-control-file" name="avatar" style="display:none">

                </label>
                <button type="submit" class="btn btn-primary p-1 m-1"> update avatar</button>
        </form>

        <div class="container">
            <form action="{{ route('student.studentUpdate', $student->student_no) }}" method="POST">
                @csrf
                <h1>Edit Profile</h1>
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

                    <div class="col-md-6">
                        <label for="student_no">Student_no</label>
                        <input type="text" class="form-control" placeholder="Student No"
                            value="{{ $student->user->user_id }}" readonly>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <label for="inputAddress">Firstname</label>
                        <input type="text" class="form-control" name="firstname"
                            placeholder="{{ $student->user->firstname }}" value="{{ $student->user->firstname }}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress">Middlename</label>
                        <input type="text" class="form-control" name="middlename"
                            placeholder="{{ $student->user->middlename }}" value="{{ $student->user->middlename }}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress">Lastname</label>
                        <input type="text" class="form-control" name="lastname"
                            placeholder="{{ $student->user->lastname }}" value="{{ $student->user->lastname }}">
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputAddress">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="{{ $student->user->email }}"
                            value="{{ $student->user->email }}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress">Contact Number</label>
                        <input type="text" class="form-control" name="phone"
                            placeholder="{{ $student->user->phoneNumber }}" value="{{ $student->user->phone }}"
                            maxlength="11">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="courseNo"> Select Year</label>
                        <select class="form-select form-select-md mb-3" name="courseNo" aria-label="Default select example">
                            <option value="{{ $student->courseNo }}">{{ $student->course->name }}</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->courseNo }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="year"> Select Year</label>
                        <select class="form-select form-select-md mb-3" name="year" aria-label="Default select example">
                            <option>{{ $student->year }}</option>
                            <option value="1st year">1st year</option>
                            <option value="2nd year">2nd year</option>
                            <option value="3rd year">3rd year</option>
                            <option value="4th year">4th year</option>
                            <option value="5th year">5th year</option>
                            @for ($grade = 1; $grade < 13; $grade++)
                                <option value="Grade {{ $grade }}">Grade {{ $grade }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit Profile</button>
                <a href="{{ url('student/' . $student->student_no) }}"><button type="button"
                        class="btn btn-danger">Back</button></a>
            </form>
            <br>
        </div>
    </section>
    @if (Session::has('avatarSuccess'))
        <script>
            swal({
                title: "Import Success!",
                text: "{{ Session::get('avatarSuccess') }}",
                icon: "success",
                button: "ok!",
            });
        </script>
    @endif
    @if (Session::has('successUpdate'))
        <script>
            swal({
                title: "Update Success!",
                text: "{{ Session::get('successUpdate') }}",
                icon: "success",
                button: "ok!",
            });
        </script>
    @endif
    @if (Session::has('errorUpdate'))
        <script>
            swal({
                title: "Update Failed!",
                text: "{{ Session::get('errorUpdate') }}",
                icon: "error",
                button: "ok!",
            });
        </script>
    @endif
    @if (Session::has('avatarError'))
        <script>
            swal({
                title: "MISSING!",
                text: "{{ Session::get('avatarError') }}",
                icon: "error",
                button: "ok!",
            });
        </script>
    @endif
    {{ Session::forget('avatarError') }}
    {{ Session::forget('successUpdate') }}
    {{ Session::forget('errorUpdate') }}
    {{ Session::forget('avatarSuccess') }}
@endsection
