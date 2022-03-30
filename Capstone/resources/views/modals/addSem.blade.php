<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="semModal" tabindex="-1" role="dialog" aria-labelledby="importLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4 font-weight-bold" id="importLabel">Open Scholarship Application</strong>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="year"> For Year</label>
                            <input type="text" id="year" name="year" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="semester"> Semester</label>
                            <select class="form-select form-select-md mb-3" name="semester"
                                aria-label="Default select example">
                                <option value="1st Semester">1st Semester</option>
                                <option value="2nd Semester">2nd Semester</option>
                                <option value="Summer"> Summer</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="semester"> Application Period</label>
                            <select class="form-select form-select-md mb-3" name="semester"
                                aria-label="Default select example">
                                <option value="14">14 days</option>
                                <option value="21">21 days</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Submit</button>
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
