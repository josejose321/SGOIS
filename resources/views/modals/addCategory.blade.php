<form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="announceLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title h3 text-light font-weight-bold" id="announceLabel"> <i
                            class=" fa fa-plus"></i>
                        New Program</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="name">Program Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="scholarship">Endorsing Office</label>
                        <select class="form-select form-select-md mb-3" name="officeCode" id="office"
                            aria-label="Default select example">
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
                            <option value="Discount">Discount Programs</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="field_team">Field/Team</label>
                        <input type="text" class="form-control" name="field_team" value="{{ old('field_team') }}">
                    </div>
                    <div class="form-group">
                        <label for="allocation">Allocation</label>
                        <input type="number" class="form-control" value="{{ old('allocation') }}" min="0" max="100" name="allocation">
                        <small class="text-secondary">
                            <li>put 0 for max capacity</li>
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="instruction">Proceedure</label>
                        <textarea class="form-control" onInput="handleInput(event)" rows="7" name="instruction"></textarea>
                        <small class="text-secondary">
                            <li>Please input Proceedure here</li>
                        </small>
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
<script>
    let previousLength = 0;

    const handleInput = (event) => {
        const bullet = "#";
        const newLength = event.target.value.length;
        const characterCode = event.target.value.substr(-1).charCodeAt(0);

        if (newLength > previousLength) {
            if (characterCode === 10) {
                event.target.value = `${event.target.value}${bullet} `;
            } else if (newLength === 1) {
                event.target.value = `${bullet} ${event.target.value}`;
            }
        }

        previousLength = newLength;
    }
</script>
