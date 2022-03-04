<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- axios request --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js"></script>
    {{--  --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
        .navbar{
          background-color: rgb(49, 49, 49);
          
        }
      </style>
</head>
<body>
  
    {{-- NAVBAR --}}
    <nav class="navbar navbar-dropdown  navbar-fixed-left navbar-expand-md">
        <div class="navbar-brand w-25">
            <span class="navbar-logo">
                <a href="https://www.unc.edu.ph/">
                    <img src="{{ asset('logo.png') }}" class="w-25" alt="">
                    <span class="text-light"><strong>UNIVERSITY OF NUEVA CACERES</strong></span>
                </a>
                
            </span>
            
        </div>
        
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-light" href="{{ route('admin.index') }}"><h5>HOME</h5></a></li>
                <li class="nav-item"><a class="nav-link link text-light" href="{{ url('/') }}"><h5>SCHOLARHIP</h5></a></li>
                <li class="nav-item"><a class="nav-link link text-light" href="{{ url('/') }}"><h5>ABOUT US</h5></a></li>
            </ul>
        </div>
    </nav>
    <div class="btn-group btn-group-lg d-flex justify-content-center" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-secondary" id="studentBtn">Add Student</button>
      <a href="{{ route('admin.students') }}" type="button" class="btn btn-secondary">Students</a>
      <button type="button" class="btn btn-secondary" id="semBtn">Application Period </button>
      <a href="{{ route('admin.scholarhips') }}" type="button" class="btn btn-secondary">Scholarships</a>
      <a href="{{ route('admin.loans') }}" type="button" class="btn btn-secondary ">Loans</a>
      <a href="{{ route('admin.discounts') }}" type="button" class="btn btn-secondary">Discounts</a>
      <a href="{{ route('admin.stats') }}" type="button" class="btn btn-secondary">Statistics</a>
      <a href="#" type="button" class="btn btn-secondary">Reports</a>
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#announceModal">Annoucenment</button>
      <button type="button" class="btn btn-secondary">Import Data</button>
      <button type="button" class="btn btn-secondary">log out</button>
     
    </div>

        <main>
            @yield('content')
        </main>
    <!-- Footer -->
    <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          </ul>
          <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
      </div>
@include('modals.viewStudent')
@include('modals.addStudent')
@include('modals.addSem')
@include('modals.announce')
<script>
  $('#studentBtn').on("click", function(e){
    e.preventDefault();
    $('#studentmodal').modal();
  })

  $('#semBtn').on("click", function(e){
    e.preventDefault();
    console.log('hello');
    $('#addSem').modal();
  })
</script>
</body>

</html>
