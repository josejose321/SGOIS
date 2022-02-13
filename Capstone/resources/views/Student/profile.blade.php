@extends('layouts.app')
@section('content')

<section class="container-fluid">
  <!-- Large modal -->

 <div class="jumbotron">
   <h1 class="display-8">
    <img src="{{ Storage::url('avatar/'. $student->avatar) }}" class="img-thumbnail w-25" alt="avatar.jpeg"><br>
     Hello, Mr./Ms 
          {{ $student->firstname}}
          {{ $student->middlename}}
          {{ $student->lastname}} <br>
          {{ $student->student_no}} <br>
          {{ $student->email}}<br>
          {{ $student->department}}<br>
          {{ $student->phoneNumber}}<br>
          {{ $student->course}}<br> 
     </h1>
     <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet perferendis nisi aut voluptate expedita, 
       tempora adipisci in dicta quas iusto totam repellat. Corrupti repellendus nobis culpa perferendis sequi ea accusantium.
       Numquam deserunt facilis molestiae repudiandae nesciunt architecto excepturi maxime molestias distinctio a aliquam dolorem 
       vitae doloribus, esse nulla quidem. Quam eligendi totam expedita ipsa accusamus pariatur quos debitis architecto cupiditate?</p>
     <hr class="my-4">
     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, distinctio temporibus consectetur cum, aperiam cupiditate 
       architecto enim quibusdam magnam recusandae suscipit labore quod facere nobis? Aspernatur fuga cum ad esse?.</p>

       <div class="row">
         <div class="col-sm">
           <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg">Scholarship</button>
           <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg">Discount</button>
           <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg">Loan</button>
           <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg">Government Grant</button>
         </div>
       </div>
     
 </div>
</section>
          {{ $student->student_no}} <br>
          {{ $student->firstname}}<br>
          {{ $student->middlename}}<br>
          {{ $student->lastname}}<br>
          {{ $student->email}}<br>
          {{ $student->department}}<br>
          {{ $student->phoneNumber}}<br>
<br><br><br>

</section>
@endsection