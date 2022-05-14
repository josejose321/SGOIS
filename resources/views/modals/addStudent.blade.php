<form action="{{ route('admin.student.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade bd-example-modal-lg" id="studentmodal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-secondary text-light">
                    <h3>Student Registration Form</h3>
                </div>
                <div class="modal-body bg-light">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label for="id"> Student Number</label>
                            <input type="text" name="user_id" class="form-control" placeholder="Student No"
                                maxlength="8" value="{{ old('user_id') }}">
                            @if ($errors->has('user_id'))
                                <small class="input-error text-danger">{{ $errors->first('user_id') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="id"> Firstname</label>
                            <input type="text" name="firstname" class="form-control" placeholder="First name"
                                value="{{ old('firstname') }}">
                            @if ($errors->has('firstname'))
                                <small class="input-error text-danger">{{ $errors->first('firstname') }}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id"> Middlename</label>
                            <input type="text" name="middlename" class="form-control" placeholder="middlename"
                                value="{{ old('middlename') }}">
                            @if ($errors->has('middlename'))
                                <small class="input-error text-danger">{{ $errors->first('middlename') }}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id"> Lastname</label>
                            <input type="text" name="lastname" class="form-control" placeholder="lastname"
                                value="{{ old('lastname') }}">
                            @if ($errors->has('lastname'))
                                <small class="input-error text-danger">{{ $errors->first('lastname') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="id"> email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email here"
                                value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <small class="input-error text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id"> Phone number</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone number"
                                maxlength="11" value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                                <small class="input-error text-danger">{{ $errors->first('phone') }}</small>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="year"> Select Year</label>
                            <select class="form-select form-select-md mb-3" name="year"
                                aria-label="Default select example">
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
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="id"> Course</label>
                            <select class="form-select form-select-md mb-3" name="courseNo"
                                aria-label="Default select example">
                                <option selected>Select Course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->courseNo ?? ''}}">{{ $course->name ?? '' }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id"> Parent Name</label>
                            <input type="text" name="parentName" class="form-control" placeholder="Lastname,Firstname, MI"
                                maxlength="11" value="{{ old('parentName') }}">
                            @if ($errors->has('parentName'))
                                <small class="input-error text-danger">{{ $errors->first('parentName') }}</small>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    $('#addStudent').on('click', function(e) {
        e.preventDefault();
        $('#studentmodal').modal();
        console.log('hello');
    });
</script>
