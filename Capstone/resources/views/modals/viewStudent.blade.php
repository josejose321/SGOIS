@foreach ($students as $student)
<div class="modal fade" id="viewStudent-{{ $student->student_no }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="w-100">
                <div ><img src="{{ Storage::url('avatar/'. $student->avatar) }}" class="img-thumbnail w-25" alt="avatar.jpeg"><br></div>
            </div>
          Student_no: {{ $student->student_no }} <br>
          Name:{{ $student->lastname }}, {{ $student->firstname }} {{ $student->middlename }} <br>
          Department: @if ($student->department->name != null) {{ $student->department->name }} @endif <br>
          Course: {{ $student->course ?? '' }} <br>
          Year/Grade: {{ $student->year ?? '' }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
    
@endforeach