@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Document</title>
</head>

    <section>
      <div class="container w-25 p-3">
        <form action="">
          <img src="logo.png" alt="..." class="rounded mx-auto d-block">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="text-secondary">We'll never share your email with anyone else.</small>
                
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">First name</label>
                <input type="email" name = "firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Middle name</label>
                <input type="email" name = "middlename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Middle Name">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="email" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Suffix</label>
                <input type="email" name="suffix" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Suffix">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="text-secondary">We'll never share your email with anyone else.</small>
                
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
              <select class="form-select" name="department" aria-label="Default select example">
                <option selected>Department</option>
                <option value="CS">College of Computer Studies</option>
                <option value="EA">College of Engineering and Architecture</option>
                <option value="CBA">Collge of Business and Accountancy</option>
              </select>
            </div>
            <div class="col">
              <div class="form-group">
                <input type="email" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
              </div>
            </div>
  
            <div class="wd-100"></div>
            <div class="col">
              <select class="form-select" name="course" aria-label="Default select example">
                <option selected>Course</option>
                <option value="BSIT">BSIT</option>
                <option value="BSCS">BSCS</option>
                <option value="BSA">BSA</option>
              </select>
            </div>
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
            <input type="file" class="form-control w-50 p-3" id="customFile" />
            
          </div> 
          <button class="button btn-primary" id ="button" name ="submit">Submit</button>
        </form>
        
      </div>
    </section>
<script src="index.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection