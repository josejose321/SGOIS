<div class="modal fade" id="externalModal" tabindex="-1" role="dialog" aria-labelledby="importLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title h4 font-weight-bold" id="importLabel">External Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2><strong>You Are about to Generate External Scholarship Report</strong></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <a href="{{ route('admin.external.download') }}" type="button" class="btn btn-secondary">
                    Generate External Report
                </a>
            </div>
        </div>
    </div>
</div>
