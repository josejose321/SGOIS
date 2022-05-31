<form action="{{ route('student.apply.scholarship', Auth::user()->student ?? '') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="modal fade bd-example-modal-lg" id="varsityModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">


            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                    <h3> <i class="fa fa-percent"></i> Discount Form</h3>
                    <!-- <img class="img-thumbnail" src="./logo.png" alt="..." class="rounded mx-auto d-block"> -->
                </div>
                <div class="modal-body bg-light">
                    <div class="w-50">
                        <img src="{{ Storage::url('avatar/' . Auth::user()->avatar ?? '') }}"
                            class="img-thumbnail w-25" alt="avatar.jpeg"><br>
                        Name: {{ Auth::user()->lastname ?? '' }}, {{ Auth::user()->firstname ?? '' }}
                        {{ Auth::user()->middlename ?? '' }} <br>
                        Department: {{ Auth::user()->student->course->department->name ?? '' }} <br>
                        Course: {{ Auth::user()->student->course->name ?? '' }} <br> <br>
                    </div>

                    @if ($sem === null)
                        <div class="alert alert-danger">
                            <p>Application is Disabled!</p>
                            <p> Please Contact the SGO for other concerns</p>
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
                        <div class="col-md-5">
                            <label for="semester">Student Id:</label>
                            <input type="text" name="user_id" class="form-control" readonly
                                value="{{ Auth::user()->user_id ?? '' }}">
                        </div>
                        <div class="col-md-5">
                            <label for="semester">Type</label>
                            <input type="text" name="type" class="form-control" readonly value="Discount">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="semester">Semester</label>
                            <input type="text" name="semesterCode" id="id" class="form-control" readonly
                                value="{{ $sem->semesterCode ?? '' }}">
                        </div>
                        <div class="col-md-5">
                            <label for="category">Scholarship Programs</label>
                            <select class="form-select form-select-md mb-3" name="categoryNo" id="category"
                                value="{{ old('category') }}" aria-label="Default select example">
                                @foreach ($discounts as $discount)
                                    <option value="{{ $discount->categoryNo ?? '' }}">{{ $discount->name??'' }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-5">
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
                        <div class="col-md-5">
                            <label for="requirement">Upload Requirement here</label>
                            <input type="file" class="form-control" id="requirement" name="requirement"
                                value="{{ old('requirement') }}">
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-5">
                            <label for="photo">Upload Photo here</label>
                            <input type="file" class="form-control" id="photo" name="photo"
                                value="{{ old('photo') }}">
                        </div>
                    </div>
                </div>

                <br>
                <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"
                        @if ($sem === null) disabled @endif>Submit</button>

                </div>
            </div>
        </div>
    </div>
    </div>
</form>
