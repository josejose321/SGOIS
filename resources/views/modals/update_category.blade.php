@foreach ($categories as $category)
<form action="{{ route('admin.programs.store') }}" method="POST">
    @csrf
    <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="announceLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title h3 text-light font-weight-bold" id="announceLabel"> <i class=" fa fa-plus"></i>
                        New Program</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="scholarship">Endorsing Office</label>
                        <select class="form-select form-select-md mb-3" name="officeCode" id="office"
                            aria-label="Default select example">
                                <option value="{{ $office->officeCode }}">{{ $office->officeCode ?? '' }}</option>
                            @foreach ($offices as $office)
                                <option value="{{ $office->officeCode ?? '' }}">{{ $office->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Program Type</label>
                        <select class="form-select form-select-md mb-3" name="type" id="type"
                            aria-label="Default select example">
                            <option value="{{ old('type') }}">Choose..</option>
                            <option value="Administrative">Administrative Scholarship</option>
                            <option value="Academic">Academic Scholarship</option>
                            <option value="External">External Scholarship</option>
                            <option value="Discount">External Scholarship</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Field/Team</label>
                        <input type="text" class="form-control" name="field_team" value="{{ old('field_team') }}">
                    </div>

                    <div class="form-group">
                        <label for="allocation">Allocation</label>
                        <input type="number" class="form-control" name="allocation" min="0" max="100" step="1" value="10">
                        <small class="text-secondary"><li>put 0 for max capacity</li></small>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
