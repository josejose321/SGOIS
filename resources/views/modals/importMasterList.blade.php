<form action="#" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="masterListModal" tabindex="-1" role="dialog" aria-labelledby="importLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title h4 font-weight-bold" id="importLabel">Import MasterList</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-select form-select-md mb-3" name="categoryNo" id="category"
                            value="{{ old('category') }}" aria-label="Default select example">
                            @foreach ($externals as $external)
                                <option value="{{ $external->categoryNo }}">{{ $external->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Import file </label>
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
