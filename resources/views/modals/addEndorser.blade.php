<form action="{{ route('admin.employee.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade bd-example-modal-lg" id="endorserModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h3>Endorser Registration Form</h3>
                </div>
                <div class="modal-body bg-white">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-row ">
                        <div class="form-group col-md-5">
                            <label for="id"> Employee ID</label>
                            <input type="text" name="user_id" class="form-control" placeholder="Employee ID"
                                maxlength="8" value="{{ old('user_id') }}">
                            @if ($errors->has('user_id'))
                                <small class="input-error text-danger">{{ $errors->first('user_id') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="id"> Firstname</label>
                            <input type="text" name="firstname" class="form-control" placeholder="First name"
                                value="{{ old('firstname') }}">
                            @if ($errors->has('firstname'))
                                <small class="input-error text-danger">{{ $errors->first('firstname') }}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-5">
                            <label for="id"> Middlename</label>
                            <input type="text" name="middlename" class="form-control" placeholder="middlename"
                                value="{{ old('middlename') }}">
                            @if ($errors->has('middlename'))
                                <small class="input-error text-danger">{{ $errors->first('middlename') }}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-5">
                            <label for="id"> Lastname</label>
                            <input type="text" name="lastname" class="form-control" placeholder="lastname"
                                value="{{ old('lastname') }}">
                            @if ($errors->has('lastname'))
                                <small class="input-error text-danger">{{ $errors->first('lastname') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="id"> email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email here"
                                value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <small class="input-error text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-5">
                            <label for="id"> Phone number</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone number"
                                maxlength="11" value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                                <small class="input-error text-danger">{{ $errors->first('phone') }}</small>
                            @endif
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="id">Assign Office</label>
                            <select class="form-select form-select mb-3" name="officeCode"
                                aria-label="Default select example">
                                @foreach ($offices as $office)
                                    <option value="{{ $office->officeCode ?? '' }}">{{ $office->name ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    $('#addEndorser').on('click', function(e) {
        e.preventDefault();
        $('#endorserModal').modal();
        console.log('hello');
    });
</script>
