@foreach ($semesters as $semester)
    <form action="{{ route('admin.semester.extend', $semester) }}" method="post">
        @csrf
        <div class="modal fade" id="viewSem-{{ $semester->semesterCode }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-light">
                        <h5 class="modal-title" id="exampleModalLabel">Semester</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="year"> Semester</label>
                            <input type="text" id="year" name="year" class="form-control" readonly
                                value="{{ $semester->sem ?? '' }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="year"> For Year</label>
                            <input type="text" id="year" name="year" class="form-control" readonly
                                value="{{ $semester->year ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="period">Extend Submission Untill</label>
                            <input type="date" class="form-control" name="deadline">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Extend</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
