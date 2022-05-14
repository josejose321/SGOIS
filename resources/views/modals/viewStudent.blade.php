@foreach ($users as $user)
    <div class="modal fade" id="viewStudent-{{ $user->user_id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="w-100">
                        <div><img src="{{ Storage::url('avatar/' . $user->avatar) }}" class="img-thumbnail w-25"
                                alt="avatar.jpeg"><br></div>
                    </div>
                    user_No: {{ $user->user_id }} <br>
                    Name:{{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }} <br>
                    Course: {{ $user->student->course->name ?? '' }} <br>
                    Year/Grade: {{ $user->student->year ?? '' }} <br>
                    Contact: {{ $user->phone ?? '' }} <br>
                    Email: {{ $user->email ?? '' }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
