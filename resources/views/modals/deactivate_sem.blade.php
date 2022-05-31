@foreach ($semesters as $semester)
    <div class="modal fade" id="deactivate_sem_modal-{{ $semester->semesterCode }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-info"></i> DEACTIVATION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4>Application Deativation/Activation</h4>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <a type="submit" href="{{ route('admin.semester.deactivate',$semester->semesterCode) }}" class="btn btn-danger">Continue</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endforeach
