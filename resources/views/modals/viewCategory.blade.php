@foreach ($categories as $category)
    <div class="modal fade" id="viewCategory-{{ $category->categoryNo }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Category No: {{ $category->categoryNo ?? '' }} <br>
                    Category: {{ $category->name ?? '' }} <br>
                    Category Type: {{ $category->type ?? '' }} <br>
                    Fied/Team: {{ $category->field_team ?? '' }} <br>
                    Allocation: {{ $category->allocation ?? '' }}

                    <div class="form-group">
                        <label for="allocation">Edit Allocation</label>
                        <input type="number" class="form-control" name="student_no" class="form-control"
                            value="{{ $category->allocation ?? '' }}">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
