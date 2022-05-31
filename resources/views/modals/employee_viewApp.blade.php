<form action="{{ route('employee.scholarship.approve', $scholarship->scholarshipNo) }}" method="post">
    @csrf
    <div class="modal fade" id="modalScholarship" tabindex="-1"
        role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Scholarship No. {{ $scholarship->scholarshipNo }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <h4 class="fw-bold">Approve This Scholarship?</h4>
                    </center>

                    <div class="form-group">
                        <label for="discount" class="fw-bold"> Discount</label>
                        <select class="form-select form-select-md mb-3" id="discount" name="discount"
                            aria-label="Default select example">
                            <option value="{{ $scholarship->discount?? '' }}">{{ $scholarship->discount ?? '' }} Discount
                            </option>
                            <option value="10%">15% Discount</option>
                            <option value="25%">25% Discount</option>
                            <option value="50%">50% Discount</option>
                            <option value="75%">75% Discount</option>
                            <option value="100%">100% Discount</option>
                            <option value="Full">Full Discount</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Accept</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

                </div>
            </div>
        </div>
    </div>
</form>

