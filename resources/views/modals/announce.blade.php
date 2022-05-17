<form action="{{ route('admin.announce.store', Auth::user()->employee) }}" method="POST">
    @csrf
    <div class="modal fade" id="announceModal" tabindex="-1" role="dialog" aria-labelledby="announceLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4 font-weight-bold" id="announceLabel">Compose an Announcement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" autocomplete="off"
                            placeholder="Subject" value="{{ old('subject') }}">
                    </div>

                    <div class="form-group">
                        <label for="content">Your Content Here..</label>
                        <textarea class="form-control" name="content" id="content" rows="6"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>



<script>
    $('#announce').on('click', function(e) {
        $('#announceModal').modal();
    });
</script>
