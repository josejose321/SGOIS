<form action="" method="POST">
    @csrf
    <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="announceLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4 font-weight-bold" id="announceLabel"> <i class="fa fa-plus"></i> Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="scholarship">Scholarship Office</label>
                            <select class="form-select form-select-md mb-3" name="officeCode" id="office"
                                aria-label="Default select example">
                                @foreach ($offices as $office)
                                    <option value="{{ $office->officeCode }}">{{ $office->name }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="col-md-4">
                            <label for="name">Category Name</label>
                            <input type="text" name="category" value="{{ old('category') }}" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="name">Category Type</label>
                            <select class="form-select form-select-md mb-3" name="type" id="type"
                                aria-label="Default select example">Select Type
                                <option value="{{ old('type') }}"></option>
                                <option value="Discount">Discount</option>
                                <option value="Scholarship">Scholarship</option>
                                <option value="Loan">Loan</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="name">Allocation</label>
                            <input type="text" name="category" value="{{ old('allocation') }}" >
                        </div>
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
    $('#categoryBtn').on('click', function(e) {
        $('#categoryModal').modal();
    });
</script>
