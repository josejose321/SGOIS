<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UNC-SGOIS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="bg-dark text-light fixed-bottom animate__animated animate__fadeInDown p-4 m-0" style="background-color: beige">
        <div class="container my-auto">
            <div class="text-center my-auto copyright fw-bold"><span>Copyright © 2022 | University of Nueva Caceres -
                    UNCSGOIS .
                    All Rights Reserved</span></div>
        </div>
    </footer>
</body>
@if (Session::has('success'))
    <script>
        swal({
            title: "Action Success!",
            text: "{{ Session::get('success') }}",
            icon: "success",
            button: "ok!",
        });
    </script>
@endif

@if (Session::has('error'))
    <script>
        swal({
            title: "Invalid Action!",
            text: "{{ Session::get('error') }}",
            icon: "error",
            button: "ok!",
        });
    </script>
@endif

</html>
