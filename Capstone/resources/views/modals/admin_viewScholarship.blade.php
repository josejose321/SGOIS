@foreach ($scholarships as $scholarship)
<form action="{{ route('admin.scholarship.approve',$scholarship->scholarshipNo) }}" method="post">
  @csrf
  <div class="modal fade" id="admin_viewModalScholarship-{{ $scholarship->scholarshipNo }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" >Scholarship No. {{ $scholarship->scholarshipNo }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Type: {{ $scholarship->type }} <br>
          Name of Applicant: {{ $scholarship->student->lastname }}, {{ $scholarship->student->firstname }} {{ $scholarship->student->middlename }} <br>
          Endorser Office: {{ $scholarship->office->name }} <br>
          Endorser Status: {{ $scholarship->officeVerification }} <br>
          Requirement: {{ $scholarship->requirement }} <br>
          photo: {{ $scholarship->photo }} <br>
          

          <div class="row">
            <div class="col-md-5">
              <label for="requirement">Requirements</label>
              <a href="{{ route('admin.scholarship.requirement-download',$scholarship->scholarshipNo) }}" class="btn btn-primary" id="requirement">Download Requirement</a>
            </div>
            <div class="col-md-5">
              <label for="photo">Photo Provided</label>
              <a href="{{ route('admin.scholarship.photo-download',$scholarship->scholarshipNo) }}" class="btn btn-primary" id="photo">Download Photo</a>
            </div>
          </div>
          <div class="form-group">
            <label for="discount"> Discount</label>
            <select class="form-select form-select-md mb-3" id="discount" name="discount" aria-label="Default select example">
                <option value="{{ $scholarship->discount }}">{{ $scholarship->discount }} Discount</option>
                <option value="25%">25% Discount</option>
                <option value="50%">50% Discount</option>
                <option value="75%">75% Discount</option>
                <option value="100%">100% Discount</option>
                <option value="Full">Full Discount</option>
            </select>
        </div>
          <div class="form-group">
            <label for="remarks">Remarks</label>
            <textarea class="form-control" name="remarks" id="remarks" rows="6"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" >Approved this Scholarship</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

        </div>
      </div>
    </div>
  </div>
</form>
@endforeach