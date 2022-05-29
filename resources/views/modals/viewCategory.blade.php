@foreach ($categories as $category)
    <div class="modal fade" id="viewCategory-{{ $category->categoryNo }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header bg-dark text-light">
                    <h5 class="modal-title" id="exampleModalLabel">Programs Available</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name ??'' }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->office->name ??'' }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="name">Program Type</label>
                        <select class="form-select form-select-md mb-3" name="type" id="type"
                            aria-label="Default select example">
                            <option value="{{ old('type') }}">Choose..</option>
                            <option value="Administrative">Administrative Scholarship</option>
                            <option value="Academic">Academic Scholarship</option>
                            <option value="External">External Scholarship</option>
                            <option value="Discount">Discount</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Field/Team</label>
                        <input type="text" class="form-control" name="field_team" value={{ $category->field_team ?? '' }}>
                    </div>

                    <div class="form-group">
                        <label for="allocation">Allocation</label>
                        <input type="number" class="form-control" name="allocation" min="0" max="100" step="1" value="{{ $category->allocation ?? '' }}">
                        <small class="text-secondary"><li>put 0 for max capacity</li></small>
                    </div>

                    date Added: {{  $category->created_at ?? '' }} <br>
                    date updated: {{  $category->updated_at ?? '' }}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
