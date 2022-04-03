<form action="{{ route('student.apply.scholarship', $student->student_no) }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="modal fade bd-example-modal-lg" id="addscholar" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">


            <div class="modal-content">
                <div class="modal-header bg-secondary text-light">
                    <h3>Scholarship Form</h3>
                    <!-- <img class="img-thumbnail" src="./logo.png" alt="..." class="rounded mx-auto d-block"> -->
                </div>
                <div class="modal-body bg-light">
                    <div class="w-50">
                        <img src="{{ Storage::url('avatar/' . $student->avatar) }}" class="img-thumbnail w-25"
                            alt="avatar.jpeg"><br>
                        Name: {{ $student->lastname }}, {{ $student->firstname }} {{ $student->middlename }} <br>
                        Department: {{ $student->department->name }} <br> <br>
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
                            <label for="semester">Student_no</label>
                            <input type="text" name="student_no" class="form-control" readonly
                                value="{{ $student->student_no ?? '' }}">
                        </div>
                        <div class="col-md-4">
                            <label for="type">Type</label>
                            <select class="form-select form-select-md mb-3" name="type" id="type"
                                aria-label="Default select example">
                                <option value="Scholarship">Scholarship</option>
                                <option value="discount">Discount</option>
                                <option value="grant">Others</option>
                            </select>
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
                            <label for="scholarship">Scholarship Office</label>
                            <select class="form-select form-select-md mb-3" name="officeCode" id="office"
                                aria-label="Default select example">
                                @foreach ($offices as $office)
                                    <option value="{{ $office->officeCode }}">{{ $office->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="category">Category</label>
                            <select class="form-select form-select-md mb-3" name="categoryNo" id="category" value="{{ old('category') }}"
                                aria-label="Default select example">
                                @foreach ($categories->where('officeCode','UNC-SDO')->get() as $category)
                                    <option value="{{ $category->categoryNo }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="category">Discount</label>
                            <select class="form-select form-select-md mb-3" name="discount" value="{{ old('discount') }}"
                                aria-label="Default select example">
                                <option value="25%">25% Discount</option>
                                <option value="50%">25% Discount</option>
                                <option value="75%">25% Discount</option>
                                <option value="100%">25% Discount</option>
                                <option value="Full">Full Scholarship</option>
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <label for="requirement">Upload Requirement here</label>
                            <input type="file" class="form-control-file" id="requirement" name="requirement" value="{{ old('requirement') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="photo">Upload Photo here</label>
                            <input type="file" class="form-control-file" id="photo" name="photo" value="{{ old('photo') }}">
                        </div>
                    </div>
                </div>

                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>
    </div>
</form>
