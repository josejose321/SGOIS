@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Document</title>
<head>
</head>

<br><br>
    <section>
      <div class="container w-50 p-3">
        <form action="" id="form">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="">Student Number</label>
                <input type="text" name="student_no" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputPassword1">Firstname</label>
                <input type="text" name = "firstname" class="form-control"  placeholder="firstname">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Middlename</label>
                <input type="text" name = "middlename" class="form-control" aria-describedby="emailHelp" placeholder="middlename">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Lastname</label>
                <input type="text" name = "lastname" class="form-control"  aria-describedby="emailHelp" placeholder="lastname">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
              <div class="form-group">
                <label for="">Suffix</label>
                <input type="text" name="suffix" class="form-control"  aria-describedby="emailHelp" placeholder="suffix">
              </div>
            </div>
            
            
            <div class="col">
              <label for="">Department</label>
              <select class="form-select" name="department" aria-label="Default select example">
                <option selected>Department</option>
                <option value="CS">College of Computer Studies</option>
                <option value="EA">College of Engineering and Architecture</option>
                <option value="CBA">Collge of Business and Accountancy</option>
              </select>
            </div>
            <div class="w-100"></div>
            <div class="col">
              <div class="form-group">
                <input type="text" name="phone" class="form-control"  aria-describedby="emailHelp" placeholder="Phone">
              </div>
            </div>
  
            
            <div class="col">
              <select class="form-select" name="course" aria-label="Default select example">
                <option selected>Course</option>
                <option value="BSIT">BSIT</option>
                <option value="BSCS">BSCS</option>
                <option value="BSA">BSA</option>
              </select>
            </div>
            <div class="wd-100"></div>
            <div class="col">
              <select class="form-select" name="year" aria-label="Default select example">
                <option selected>Year</option>
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>
                <option value="4">4th Year</option>
                <option value="5">5th Year</option>
              </select>
            </div>
            <label class="form-label" for="customFile">Upload Photo</label>
            <input type="file" class="form-control w-50 p-3" name="photo" />
            
          </div> 
          <button type="button" class="button btn-primary" id ="btnSubmit">Submit</button>
        </form>
        <p id="dataRow"></p>
      </div>
    </section>
    <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    
      $("#btnSubmit").click(function(e){(
          e.preventDefault();
          var data = $("form").serializeArray();
          console.log(data);
          var row = document.getElementById('dataRow');
          row.innerHTML = JSON.stringify(data);

          // $.ajax({
          //   url:"Student.create",
          //   type:"POST",
          //   data:data,
          //   success:function(response)
          //   {
          //     if(response)
          //     {
          //       alert('success');
          //       $("form")[0].reset();
          //     }
          //   }
          // });
      });
    </script>
@endsection