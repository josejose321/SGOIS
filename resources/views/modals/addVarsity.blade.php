<form action="{{ route('student.apply.scholarship', $student->student_no ?? '') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="modal fade bd-example-modal-lg" id="varsityModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">


            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                    <h3> <i class="fa fa-basketball-ball"></i> Varisity Scholarship Form</h3>
                    <!-- <img class="img-thumbnail" src="./logo.png" alt="..." class="rounded mx-auto d-block"> -->
                </div>
                <div class="modal-body bg-light">
                    <div class="w-50">
                        <img src="{{ Storage::url('avatar/' . $student->user->avatar ?? '') }}" class="img-thumbnail w-25"
                            alt="avatar.jpeg"><br>
                        Name: {{ $student->user->lastname ?? '' }}, {{ $student->user->firstname ?? '' }} {{ $student->middlename ?? '' }} <br>
                        Department: {{ $student->course->department->name ?? '' }} <br>
                        Course: {{  $student->course->name ?? '' }} <br> <br>
                    </div>

                    @if ($sem->count() === 0)
                        <div class="alert alert-danger">
                            <p class="display-5"> You cannot Apply right now</p>
                            <p> Please Contact the SGO if having any concerns</p>
                            <p> THANK YOU!</p>
                        </div>
                    @endif

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
                        <div class="col-md-4">
                            <label for="semester">Student Id:</label>
                            <input type="text" name="user_id" class="form-control" readonly
                                value="{{ $student->user->user_id ?? '' }}">
                        </div>
                        <div class="col-md-4">
                            <label for="semester">Type</label>
                            <input type="text" name="type" class="form-control" readonly
                                value="Scholarship">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <input type="text" name="semesterCode" id="id" class="form-control" readonly
                                    value="{{ $sem->semesterCode ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="semester">Office</label>
                            <input type="text" name="officeCode" class="form-control" readonly
                                value="{{ $office->officeCode ?? '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="category">Category</label>
                            <select class="form-select form-select-md mb-3" name="categoryNo" id="category"
                                value="{{ old('category') }}" aria-label="Default select example">
                                @foreach ($office->categories as $category)
                                    <option value="{{ $category->categoryNo }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="category">Discount</label>
                            <select class="form-select form-select-md mb-3" name="discount"
                                value="{{ old('discount') }}" aria-label="Default select example">
                                <option value="10%">10% Discount</option>
                                <option value="15%">15% Discount</option>
                                <option value="25%">25% Discount</option>
                                <option value="50%">50% Discount</option>
                                <option value="75%">75% Discount</option>
                                <option value="100%">100% Discount</option>
                                <option value="Full">Full Scholarship</option>
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <label for="requirement">Upload Requirement here</label>
                            <input type="file" class="form-control-file" id="requirement" name="requirement"
                                value="{{ old('requirement') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="photo">Upload Photo here</label>
                            <input type="file" class="form-control-file" id="photo" name="photo"
                                value="{{ old('photo') }}">
                        </div>
                    </div>
                </div>

                <br>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>
    </div>
</form>