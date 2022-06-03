@foreach ($students as $student)
    <form action="{{ route('admin.external.apply',$student) }}" method="post">
        @csrf
        <div class="modal fade" id="viewStudentForm-{{ $student->student_no }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-light">
                        <h5 class="modal-title" id="exampleModalLabel"><strong>Add to External Scholarship</strong>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="w-75">
                            <div><img src="{{ Storage::url('avatar/' . $student->user->avatar ?? '') }}"
                                    class="img-thumbnail w-25" alt="avatar.jpeg"><br></div>
                        </div> <br>

                        <div class="form-row ">
                            <div class="form-group col-md-5">
                                <label for="id"> Student Number</label>
                                <input type="text" class="form-control" readonly
                                    value="{{ $student->user->user_id ?? '' }}">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="id"> Name</label>
                                <input type="text" class="form-control" readonly
                                    value="{{ $student->user->lastname ?? '' }}, {{ $student->user->firstname ?? '' }} {{ $student->user->middlename ?? '' }} ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5">
                                <label for="category">Add To External Scholarship</label>
                                <select class="form-select form-select-md mb-3" name="categoryNo" id="category"
                                    value="{{ old('category') }}" aria-label="Default select example">
                                    @foreach ($externals as $category)
                                        <option value="{{ $category->categoryNo }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="submit" class=" btn btn-secondary">Submit</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
