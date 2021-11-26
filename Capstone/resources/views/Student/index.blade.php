@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>UNC SCHOLARSHIP</title>
<head>
</head>

<br><br><br><br>
    <section>
      <div class="container w-50 p-3 bg-light">
        <form action="" id="form">
          @csrf
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
            <div class="form-group w-100">
              <label class="form-label" for="customFile">Upload Photo</label>
              <input type="file" class="form-control w-50 p-3" name="photo" />
            </div>
            
          </div> 
          <button type="button" class="button btn-primary" id ="btnSubmit">Submit</button>
        </form>
        <p id="dataRow"></p>
      </div>
    </section>


    <section class="container">
       <!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Scholarship</button>
<p id="output"></p>
<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">
      <div class="modal-header bg-secondary text-danger">
        <h3>Application Form</h3>
        <!-- <img class="img-thumbnail" src="./logo.png" alt="..." class="rounded mx-auto d-block"> -->
      </div>
      <div class="modal-body bg-light">
        <form action="" id="form">
          
          <div class="row">
            <div class="col-5">
              <div class="form-group">
                <label for="id"> Student Number</label>
                <input type="text" name="student_no" id="id" class="form-control" placeholder="Student No" readonly value="18-08925">
              </div>
            </div>
            
            
            <div class="col-5">
              <div class="form-group">
                <label for="semester"> S/Y 2022 2ndsem</label>
                <input type="text" name="semester" id="id" class="form-control" placeholder="Student No" readonly value="year 2022 2nd semester">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-5">
              <label for="scholarship">Scholarship Office</label>
              <select class="form-select" name="office" id="office" aria-label="Default select example">
                <option selected>Scholarship</option>
                <option value="SP">Sports Development Office</option>
                <option value="HR">Human Resource Office</option>
                <option value="CAS">Culture & Arts Scholarhip Office</option>
              </select>
            </div>
            <div class="col-5">
              <div class="form-group">
                <label for="id"> Student Number</label>
                <input type="text" id="id" name="sdsdg" class="form-control" placeholder="Student No">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-5">
              <label for="Scholarship">Scholarship</label>
              <select class="form-select" name="sdgsg" id="scholarhip" aria-label="Default select example">
                <option selected>Scholarship</option>
                <option value="CS">College of Computer Studies</option>
                <option value="EA">College of Engineering and Architecture</option>
                <option value="CBA">Collge of Business and Accountancy</option>
              </select>
            </div>
            <div class="col-5">
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
            
            <div class="col-5">
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
            <div class="col-5">
              <label class="form-label" for="file">Attach your files here</label>
              <input type="file" class="form-contror" id="file" name="file" />
            </div>
          </div>
          <div class="row w-75 p-3">
            
            <div class="col-5">
              <label class="form-label" for="photo">image</label>
              <input type="file" class="form-contror" id="photo" name="photo"/>
            </div>
          </div>

          <br>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type ="button" id="btnSubmit" class="btn btn-primary">Submit</button>
              
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
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