<form action="{{ url('/admin/import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="importmodal" tabindex="-1" role="dialog" aria-labelledby="importLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4 font-weight-bold" id="importLabel">Import Students</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Choose File Here..</label>
                        <input type="file" class="form-control" name="file" value="{{ old('file') }}">
                        @if ($errors->has('file'))
                            <small class="input-error text-danger">{{ $errors->first('file') }}</small>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-secondary">Import File</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    $('#import').on('click', function(e) {
        $('#importmodal').modal();
    });
</script>
