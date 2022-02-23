<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade bd-example-modal-lg" id="studentmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
    
    
            <div class="modal-content">
                <div class="modal-header bg-secondary text-light">
                    <h3>Add Student</h3>
                </div>
                <div class="modal-body bg-light">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="id"> Student Number</label>
                            <input type="text" name="student_no" class="form-control" placeholder="Student No">
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
                            <label for="id"> Department</label>
                            <input type="text" name="department" class="form-control" placeholder="Department">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id"> Phone number</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone number">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id"> Course</label>
                            <input type="text" name="course" class="form-control" placeholder="Course">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id">Year</label>
                            <input type="text" name="year" class="form-control" placeholder="Year">
                        </div>
    
                    </div>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
  </form>
