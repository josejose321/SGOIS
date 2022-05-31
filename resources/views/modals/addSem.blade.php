<form action="{{ route('admin.semester.store') }}" method="POST">
    @csrf
    <div class="modal fade " id="semModal" tabindex="-1" role="dialog" aria-labelledby="importLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title h4 font-weight-bold" id="importLabel">Open Scholarship Application</strong>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="semester"> Semester</label>
                        <select class="form-control" name="sem" aria-label="Default select example">
                            <option value="1STSEM">1st Semester</option>
                            <option value="2NDSEM">2nd Semester</option>
                            <option value="SUMMER"> Summer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year"> For Year</label>
                        <input type="text" id="year" name="year" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="deadline">Deadline Of Application</label>
                        <input type="date" class="form-control" name="deadline" min="0" max="100" step="1" value="30">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $(function() {
        $('#year').val(new Date().getFullYear());

        $('#application').on('click', function(e) {
            e.preventDefault();
            $('#semModal').modal('show');
        })
    });
</script>
