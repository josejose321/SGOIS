@foreach ($grantees as $grantee)
    <div class="modal fade" id="viewGrantee-{{ $grantee->scholarshipNo }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Grantee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <img src="{{ Storage::url('avatar/' . $grantee->student->user->avatar) }}" alt=""
                            class="rounded w-25">
                    </div>
                    <div class="row border-bottom">
                        <div class="col-md-5 fw-bold">Fullname</div>
                        <div class="col-md-5">{{ $grantee->student->user->lastname ?? '' }},
                            {{ $grantee->student->user->firstname ?? '' }}
                            {{ $grantee->student->user->middlename ?? '' }}</div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-md-5 fw-bold">College</div>
                        <div class="col-md-5">{{ $grantee->student->course->department->name ?? '' }}</div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-md-5 fw-bold">Course</div>
                        <div class="col-md-5">{{ $grantee->student->course->name ?? '' }}</div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-md-5 fw-bold">Program Type</div>
                        <div class="col-md-5">{{ $grantee->category->type ?? '' }}</div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-md-5 fw-bold">Program Applied</div>
                        <div class="col-md-5">{{ $grantee->category->name ?? '' }}</div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-md-5 fw-bold">Grant Applied</div>
                        <div class="col-md-5">{{ $grantee->discount ?? '' }}</div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-md-5 fw-bold">STATUS</div>
                        <div class="col-md-5">
                            <p class="text-success"> <i
                                    class="fa fa-check"></i>{{ $grantee->adminVerification ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
