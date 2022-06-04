@foreach ($students as $student)
    <div class="modal fade" id="deactivateStudent-{{ $student->student_no }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Activation/Deactivation</h5>
                </div>
                <div class="modal-body">
                    @if ($student->user->isActive)
                        <center>
                            <h5><strong>You are about to Deactivate this user</strong></h5>
                        </center>
                    @else
                        <center>
                            <h5><strong>You are about to Activate this user</strong></h5>
                        </center>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                    @if ($student->user->isActive)
                        <a href="{{ route('admin.student.deactivate', $student) }}"><button type="button"
                                class="btn btn-danger">Continue</button></a>
                    @else
                        <center>
                            <a href="{{ route('admin.student.deactivate', $student) }}"><button type="button"
                                    class="btn btn-secondary">Continue</button></a>
                        </center>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endforeach
