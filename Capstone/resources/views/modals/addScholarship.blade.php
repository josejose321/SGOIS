<form action="" method="post">
    <div class="modal fade bd-example-modal-lg" id="addscholar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          
          
          <div class="modal-content">
            <div class="modal-header bg-secondary text-light">
              <h3>Scholarship Form</h3>
              <!-- <img class="img-thumbnail" src="./logo.png" alt="..." class="rounded mx-auto d-block"> -->
            </div>
            <div class="modal-body bg-light">
              <form  id="form">
                @csrf
                <div class="w-50">
                  <img src="{{ Storage::url('avatar/'. $student->avatar) }}" class="img-thumbnail w-25" alt="avatar.jpeg"><br>
                  Name: {{ $student->lastname }}, {{ $student->firstname }} {{ $student->middlename }} <br>
                  StudentNo: {{ $student->student_no }} <br>
                  Department: {{ $student->department->name }} <br> <br>
                </div>
                
                <div class="form-row">
                  
                  <div class="col-4">
                    <div class="form-group">
                      <label for="id"> Student Number</label>
                      <input type="text" name="student_no" id="id" class="form-control" placeholder="Student No" readonly value="{{ $student->student_no }}">
                    </div>
                  </div>
                  
                  
                  <div class="col-4">
                    <div class="form-group">
                      <label for="semester">Semester</label>
                      <input type="text" name="semester" id="id" class="form-control" placeholder="Student No" readonly value="{{ $sem->semesterCode ?? '' }}">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4">
                    <div class="form-group">
                        <label for="scholarship">Scholarship Office</label>
                        <select class="form-select form-select-lg mb-3" name="office" id="office" aria-label="Default select example">
                          @foreach ($offices as $office)
                              <option value="{{ $office->officeCode }}">{{ $office->name }}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                  
                </div>
                <div class="form-row">
                  <div class="col-4">
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-select form-select-lg mb-3" name="category" id="category" aria-label="Default select example">
                          @foreach ($categories as $category)
                              <option value="{{ $category->categoryCode }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                </div>
                  
                  <div class="col-4">
                    <label for="discount"> Discount</label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="discount" id="inlineRadio1" value="25">
                      <label class="form-check-label" for="inlineRadio1">25%</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="discount" id="inlineRadio2" value="50">
                      <label class="form-check-label" for="inlineRadio2">50%</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="discount" id="inlineRadio2" value="75">
                      <label class="form-check-label" for="inlineRadio2">75%</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="discount" id="inlineRadio2" value="100">
                      <label class="form-check-label" for="inlineRadio2">100%</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="discount" id="inlineRadio2" value="Full">
                      <label class="form-check-label" for="inlineRadio2">Full</label>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
                </div>
                <div class="row w-75 p-3">
                  
                  <div class="col-4">
                    <label class="form-label" for="photo">image</label>
                    <input type="file" class="form-control" id="photo" name="image" />
                  </div>
                </div>
      
                <br>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type ="submit" class="btn btn-primary">Submit</button>
                    
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</form>