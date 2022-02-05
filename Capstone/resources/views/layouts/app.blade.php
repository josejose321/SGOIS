<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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
    <nav class="navbar navbar-dropdown text-secondary navbar-fixed-right navbar-expand-md">
        <div class="navbar-brand w-25">
            <span class="navbar-logo">
                <a href="https://www.unc.edu.ph/">
                    <img src="{{ asset('logo.png') }}" class="w-25" alt="">
                    <span class="text-light"><strong>UNCSGO INFORMATION SYSTEM</strong></span>
                </a>
                
            </span>
            
        </div>
        
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-light" href="{{ url('/') }}">HOME</a></li>
                <li class="nav-item"><a class="nav-link link text-light" href="{{ url('/') }}">SCHOLARHIP</a></li>
                <li class="nav-item"><a class="nav-link link text-light" href="{{ url('/') }}">ABOUT US</a></li>
                @guest
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                @else 
                    <li class="nav-item"><a class="nav-link link text-light" href="{{ route('login') }}">LOG IN</a></li>
                    @if (Route::has('register'))    
                        <li class="nav-item"><a class="nav-link link text-light" href="{{ route('register') }}">REGISTER</a></li>
                    @endif
                    @endauth
            </ul>
                @endif   
                @endguest
        </div>
    </nav>
    
    
    {{-- @include('layouts.sidebar') --}}
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
</body>

</html>
