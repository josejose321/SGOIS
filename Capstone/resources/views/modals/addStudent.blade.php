<form action="{{ route('admin.student.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade bd-example-modal-lg" id="studentmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-secondary text-light">
                    <h3>Add Student</h3>
                </div>
                <div class="modal-body bg-light">
                    @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
                </div>
                @endif
                    <div class="form-row">
                        <div class="form-group">
                            <label for="id"> Student Number</label>
                            <input type="text" name="student_no" class="form-control" placeholder="Student No" maxlength="8">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="id"> Firstname</label>
                            <input type="text" name="firstname" class="form-control" placeholder="First name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id"> Middlename</label>
                            <input type="text" name="middlename" class="form-control" placeholder="middlename">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id"> Lastname</label>
                            <input type="text" name="lastname" class="form-control" placeholder="lastname">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="id"> email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email here">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id"> Phone number</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone number"  maxlength="11">
                        </div>
                        <div class="col-md-4">
                            <label for="year"> Select Year</label>
                            <select class="form-select form-select-md mb-3" name="year" aria-label="Default select example">
                                <option value="1st year">1st year</option>
                                <option value="2nd year">2nd year</option>
                                <option value="3rd year">3rd year</option>
                                <option value="4th year">4th year</option>
                                <option value="5th year">5th year</option>
                                @for ($grade = 1 ; $grade < 13 ;$grade++)
                                <option value="Grade {{ $grade }}">Grade {{ $grade }}</option>
                                @endfor
                            </select>
                        </div>
                        
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="id"> Course</label>
                            <select class="form-select form-select-md mb-3" name="course" aria-label="Default select example">
                                <option selected>Select Course</option>
                                @foreach ($courses as $course)
                                <option value="{{ $course->name }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id"> Department</label>
                            <select class="form-select form-select-md mb-3" name="departmentCode" aria-label="Default select example">
                                <option selected>Select Department</option>
                                @foreach ($departments as $department)
                                <option value="{{ $department->departmentCode }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>
    
                    </div>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
  </form>
@if ($errors->any())
  <script>
    swal({
          title: "Error!",
          text: "You have an error with the inputs",
          icon: "error",
          button: "ok!",
        });
</script>
      
  @endif
  <script>
      $('#addStudent').on('click',function(e){
          e.preventDefault();
        $('#studentmodal').modal();
        console.log('hello');
    });
  </script>
