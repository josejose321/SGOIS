<form action="{{ route('admin.scholarship.approve', $scholarship->scholarshipNo) }}" method="post">
    @csrf
    <div class="modal fade" id="modalScholarship" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                    <h5 class="modal-title fw-bold">Scholarship No. {{ str_pad($scholarship->scholarshipNo, 6, '0', STR_PAD_LEFT) ?? '' }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="">Program Type</label>
                            <input type="text" class="form-control" readonly value="{{ $scholarship->type ?? '' }}">
                        </div>
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" class="form-control" readonly
                                value="{{ $scholarship->student->user->lastname ?? '' }},{{ $scholarship->student->user->firstname ?? '' }} {{ $scholarship->student->user->middlename ?? '' }}">
                        </div>
                    </div> <br>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="">OFFICE</label>
                            <input type="text" class="form-control" readonly value="{{ $scholarship->category->office->name  ?? ''}}">
                        </div>
                        <div class="col-md-6">
                            <label for="">STATUS</label>
                            <input type="text" class="form-control" readonly
                                value="{{  $scholarship->officeVerification ?? '' }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="discount" class="fw-bold"> Discount</label>
                        <select class="form-select form-select-md mb-3" id="discount" name="discount"
                            aria-label="Default select example">
                            <option value="{{ $scholarship->discount }}">{{ $scholarship->discount }} Discount
                            </option>
                            <option value="10%">15% Discount</option>
                            <option value="25%">25% Discount</option>
                            <option value="50%">50% Discount</option>
                            <option value="75%">75% Discount</option>
                            <option value="100%">100% Discount</option>
                            <option value="Full">Full Discount</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <textarea class="form-control" name="remarks" id="remarks" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Approved this Scholarship</button>
                    <button type="submit" class="btn btn-danger">Decline this Scholarship</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>


                </div>
            </div>
        </div>
    </div>
</form>
