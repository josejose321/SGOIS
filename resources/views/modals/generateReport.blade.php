<form action="{{ route('admin.grants.export') }}" method="get">
    @csrf
    <div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="importLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5><strong></strong></h5>
                    <div class="form-group">
                        <label for="type">Select to Generate Report</label>
                        <select class="form-select form-select-md mb-3" name="type" id="type"
                            aria-label="Default select example">
                            <option value="Administrative">Administrative Scholarships</option>
                            <option value="External">External Scholarships</option>
                            <option value="Loan">Loan Programs</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-secondary">
                        Continue
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
