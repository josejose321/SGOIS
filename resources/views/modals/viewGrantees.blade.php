@foreach ($students as $student)
    <div class="modal fade" id="viewGrantee-{{ $student->student_no }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class="modal-title" id="exampleModalLabel">STUDENTS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="w-75">
                        <div><img src="{{ Storage::url('avatar/' . $student->user->avatar ?? '') }}"
                                class="img-thumbnail w-25" alt="avatar.jpeg"><br></div>
                        <p class="fw-bold">{{ $student->user->lastname ?? '' }}, {{ $student->user->firstname ?? '' }}
                            {{ $student->user->middlename ?? '' }}</p>

                    </div> <br>

                    <div class="form-row ">
                        <div class="form-group col-md-5">
                            <label for="id"> Student Number</label>
                            <input type="text" class="form-control" readonly
                                value="{{ $student->user->user_id ?? '' }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="id"> Course</label>
                            <input type="text" class="form-control" readonly
                                value="{{ $student->course->name ?? '' }}">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="id"> YEAR</label>
                            <input type="text" class="form-control" readonly value="{{ $student->year ?? '' }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="id"> CONTACT NUMBER</label>
                            <input type="text" class="form-control" readonly
                                value="{{ $student->user->phone ?? '' }}">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="id"> EMAIL</label>
                            <input type="text" class="form-control" readonly
                                value="{{ $student->user->email ?? '' }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
