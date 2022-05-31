@extends('layouts.student')

@section('title', 'Edit Profile')
@section('content')
    <br><br>
    {{-- <section class="container w-50 bg-light"><br>
        <form action="{{ route('student.avatar.update', Auth::user()->student) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <label for="avatar">
                <img src="{{ Storage::url('avatar/' . Auth::user()->avatar) }}" class="img-round w-25" alt="avatar.jpeg">
                <input type="file" id="avatar" class="form-control-file" name="avatar" style="display:none">

            </label>
            <button type="submit" class="btn btn-primary p-1 m-1"> update avatar</button>
        </form>

        <div class="container">
            <form action="{{ route('student.studentUpdate', Auth::user()->student) }}" method="POST">
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
                            value="{{ Auth::user()->user_id }}" readonly>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <label for="inputAddress">Firstname</label>
                        <input type="text" class="form-control" name="firstname"
                            placeholder="{{ Auth::user()->firstname ?? '' }}"
                            value="{{ Auth::user()->firstname ?? '' }}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress">Middlename</label>
                        <input type="text" class="form-control" name="middlename"
                            placeholder="{{ Auth::user()->middlename ?? '' }}"
                            value="{{ Auth::user()->middlename ?? '' }}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress">Lastname</label>
                        <input type="text" class="form-control" name="lastname"
                            placeholder="{{ Auth::user()->lastname }}" value="{{ Auth::user()->lastname }}">
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputAddress">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="{{ Auth::user()->email }}"
                            value="{{ Auth::user()->email }}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress">Contact Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="{{ Auth::user()->phone }}"
                            value="{{ Auth::user()->phone }}" maxlength="11">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="courseNo"> Select Year</label>
                        <select class="form-select form-select-md mb-3" name="courseNo" aria-label="Default select example">
                            <option value="{{ Auth::user()->student->courseNo ?? '' }}">
                                {{ Auth::user()->student->course->name ?? '' }}</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->courseNo ?? '' }}">{{ $course->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="year"> Select Year</label>
                        <select class="form-select form-select-md mb-3" name="year" aria-label="Default select example">
                            <option>{{ Auth::user()->student->year }}</option>
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
                <a href="{{ route('student.index') }}"><button type="button" class="btn btn-danger">Back</button></a>
            </form>
            <br>
        </div>
    </section> --}}

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="card mb-3 ">
                    <div class="card-body text-center shadow">
                        <form action="{{ route('student.avatar.update', Auth::user()->student) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <label for="avatar">
                                <img class="rounded-circle mb-3 mt-4 w-50"
                                    src="{{ Storage::url('avatar/' . Auth::user()->avatar ?? '') }}">
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
                                <p class="h text-secondary m-0 font-weight-bold">Student Profile</p>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('student.update.profile', Auth::user()->student) }}" method="POST">
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
                                                <label class="form-label" for="username"><strong>Admin
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
                                                <label for="courseNo"> Course</label>
                                                <select class="form-select form-select-md mb-3" name="courseNo"
                                                    aria-label="Default select example">
                                                    <option value="{{ Auth::user()->student->courseNo ?? '' }}">
                                                        {{ Auth::user()->student->course->name ?? '' }}</option>
                                                    @foreach ($courses as $course)
                                                        <option value="{{ $course->courseNo ?? '' }}">
                                                            {{ $course->name ?? '' }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="year"> Select Year</label>
                                                <select class="form-select form-select-md mb-3" name="year"
                                                    aria-label="Default select example">
                                                    <option>{{ Auth::user()->student->year }}</option>
                                                    <option value="1st year">1st year</option>
                                                    <option value="2nd year">2nd year</option>
                                                    <option value="3rd year">3rd year</option>
                                                    <option value="4th year">4th year</option>
                                                    <option value="5th year">5th year</option>
                                                    @for ($grade = 1; $grade < 13; $grade++)
                                                        <option value="Grade {{ $grade }}">Grade
                                                            {{ $grade }}</option>
                                                    @endfor
                                                </select>
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
