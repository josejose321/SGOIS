

<h1>STUDENTS</h1>
@foreach ($students as $student)
    <tr>
        <th class="col">Student no:     {{ $student->student_no }}</th>
        <th class="col">Name:           {{ $student->lastname }} , {{ $student->firstname }} {{ $student->middlename }}</th>
        <th class="col">Department:     {{ $student->department->name }}</th>
        <th class="col">Course:         {{ $student->course }}</th>
        <th class="col">YEAR:           {{ $student->year }}</th>
        <th class="col">Avatar:         {{ $student->avatar }}</th>
        <th class="col">Email:          {{ $student->email }}</th>
    </tr>
    <br>
@endforeach

<br><br>
<h1>Department</h1>
@foreach ($departments as $department)
    {{ $department }}
@endforeach


<h1>Admin</h1>
{{ $admin->admin_no }} <br>
{{ $admin }}