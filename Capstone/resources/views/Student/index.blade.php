@extends('layouts.app')

@section('title',"Student")
@section('content')
<div class="btn-group btn-group-lg d-flex justify-content-center" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg">Scholarhip</button>
  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg">Students</button>
  <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg">log out</button>
  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg">log out</button>
 
</div>
<br><br>
    


    <section class="container-fluid">
       <!-- Large modal -->
       
      <div class="jumbotron">
        <div class="w-50"><img src="{{ Storage::url('avatar/'. $student->avatar) }}" class="img-thumbnail w-25" alt="avatar.jpeg"><br></div>
        <h1 class="display-8">
          Hello, Mr./Ms {{$student->firstname }} {{ $student->middlename }} {{ $student->lastname }}! 
          <br> {{ $student->year }} 
          <br> {{ $student->course }} 
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
    <div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        
        
        <div class="modal-content">
          <div class="modal-header bg-secondary text-light">
            <h3>Application Form</h3>
            <!-- <img class="img-thumbnail" src="./logo.png" alt="..." class="rounded mx-auto d-block"> -->
          </div>
          <div class="modal-body bg-light">
            <form  id="form">
              {{-- action="{{ route('Student.store') }}" method="POST" --}}
              @csrf
              <div class="w-50">
                <img src="{{ Storage::url('avatar/'. $student->avatar) }}" class="img-thumbnail w-25" alt="avatar.jpeg"><br>
                Name: {{ $student->lastname }}, {{ $student->firstname }} {{ $student->middlename }} <br>
                StudentNo: {{ $student->student_no }} <br>
                Department: {{ $student->department->name }} <br> <br>
              </div>
              <div class="row">
                
                <div class="col-4">
                  <div class="form-group">
                    <label for="id"> Student Number</label>
                    <input type="text" name="student_no" id="id" class="form-control" placeholder="Student No" readonly value="{{ $student->student_no }}">
                  </div>
                </div>
                
                
                <div class="col-4">
                  <div class="form-group">
                    <label for="semester"> S/Y 2022 2ndsem</label>
                    <input type="text" name="semester" id="id" class="form-control" placeholder="Student No" readonly value="year 2022 2nd semester">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="scholarship">Scholarship Office</label>
                  <select class="form-select" name="office" id="office" aria-label="Default select example">
                    @foreach ($offices as $office)
                        <option value="{{ $office->officeCode }}">{{ $office->officeCode }} - {{ $office->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="extrainfo"> Extra Info</label>
                    <input type="text" id="extrainfo" name="extra" class="form-control" placeholder="Extra Info">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="Scholarship">Scholarship</label>
                  <select class="form-select" name="scholarhipOffice" id="scholarhip" aria-label="Default select example">
                    <option selected>Scholarship</option>
                    <option value="CS">College of Computer Studies</option>
                    <option value="EA">College of Engineering and Architecture</option>
                    <option value="CBA">Collge of Business and Accountancy</option>
                  </select>
                </div>
                <div class="col-4">
                  <label for="Scholarship">Semester</label>
                  <select class="form-select" aria-label="Default select example">
                    <option>Category</option>
                    <option value="SportsDev">Sports Development Office</option>
                    <option value="Band">Band</option>
                    <option value="Loan">Loan</option>
                  </select>
                </div>
              </div>
              <div class="row">
                
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
                <div class="col-4">
                  <label class="form-label" for="file">Attach your files here</label>
                  <input type="file" class="form-contror" id="file" name="file" />
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
    {{-- <script src="{{URL:: asset('js/request.js') }}"></script> --}}
    <script>
    $("#form").on('submit', function(e)
    {
      e.preventDefault();
      alert($(this).serialize())
      axios.post('{{ route('student.store') }}',
        $(this).serialize()
      )
      .then(res => {
        console.log(res)
      })
      .catch(err => {
        console.error(err); 
      })
      
    })
    </script>
@endsection