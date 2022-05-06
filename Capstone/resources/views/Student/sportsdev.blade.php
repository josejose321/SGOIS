@extends('layouts.student')

@section('content')

@section('title','Sports Development Scholarships')

<br>
<main>
  <div class="container-fluid py-4 animate__animated animate__fadeInUp">
    <header class="pb-3 mb-4 border-bottom bg-danger">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4 h2 fw-bold p-2 m-2"><i class="fa fa-running"></i> UNC SPORTS DEVELOPMENT SCHOLARSHIPS</span>
      </a>
    </header>

    <div class="p-2 mb-4 bg-light rounded-3 animate__animated animate__fadeInDown">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"> <i class="fa fa-dog"></i> APPLY NOW!</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button" data-target="#varsityModal" data-toggle="modal">Click Here To Apply..</button>
      </div>
    </div>

    <div class="row align-items-md-stretch ">
      <div class="col-md-6 animate__animated animate__fadeInLeft">
        <div class="h-100 p-5 bg-light rounded-3">
          <h2>Change the background</h2>
          <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
          <button class="btn btn-primary" type="button">Example button</button>
        </div>
      </div>
      <div class="col-md-6 animate__animated animate__fadeInRight">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Add borders</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
          <button class="btn btn-secondary" type="button">Example button</button>
        </div>
      </div>
    </div>

  </div>
</main>

@include('modals.addVarsity')
@endsection