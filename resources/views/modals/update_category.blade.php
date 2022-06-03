@foreach ($categories as $category)
    <form action="{{ route('admin.programs.update', $category->categoryNo) }}" method="POST">
        @csrf
        <div class="modal fade" id="viewCategory-{{ $category->categoryNo }}" tabindex="-1" role="dialog"
            aria-labelledby="announceLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title h3 text-light font-weight-bold" id="announceLabel"> <i
                                class=" fa fa-plus"></i>
                            UPDATE SGO PROGRAMS</h5>
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
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="officeCode">Category Name</label>
                            <input type="text" class="form-control" name="officeCode"
                                value="{{ $category->office->officeCode ?? '' }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="name">Program Type</label>
                            <select class="form-select form-select-md" name="type" id="type"
                                aria-label="Default select example">
                                <option value="{{ $category->type ?? '' }}"> {{ $category->type ?? '' }}</option>
                                <option value="Administrative">Administrative Scholarship</option>
                                <option value="Academic">Academic Scholarship</option>
                                <option value="External">External Scholarship</option>
                                <option value="Discount">Discount</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="field_team">Field/Team</label>
                            <input type="text" class="form-control" name="field_team"
                                value="{{ $category->field_team ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="allocation">Allocation</label>
                            <input type="number" class="form-control" name="allocation" min="0" max="100" step="1"
                                value="{{ $category->allocation ?? '' }}">
                            <small class="text-secondary">
                                <li>put 0 for max capacity</li>
                            </small>
                        </div>

                        <div class="form-group">
                            <label for="instruction">Procedure:</label>
                            <textarea class="form-control" onInput="handleInput(event)" rows="7"
                                name="instruction">{{ $category->instruction ?? '' }}</textarea>
                            <small class="text-secondary">
                                <li>Please aput brief Instruction here</li>
                            </small>
                        </div>

                        Date Added: {{ $category->created_at ?? '' }} <br>
                        Date Updated: {{ $category->updated_at ?? '' }}

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
