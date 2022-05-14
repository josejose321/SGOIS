@foreach ($announcements as $announcement)
    <form action="{{ route('admin.announce.update', $announcement->id) }}" method="post">
        @csrf
        <div class="modal fade" id="viewAnnouce-{{ $announcement->id }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Recent Announcement:ID {{ $announcement->id }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control fw-bold" name="subject" id="subject"
                                value="{{ $announcement->subject }}">
                        </div>

                        <div class="form-group">
                            <label for="content">Input Details Here</label>
                            <textarea class="form-control" name="content" id="content" rows="6">{{ $announcement->content }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
