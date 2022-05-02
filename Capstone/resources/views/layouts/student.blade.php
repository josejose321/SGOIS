<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('assets/img/homepage%20pictures/unc-logo.png') }}" type="image/x-icon">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- axios request --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js"></script>
    {{--  --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/css/Dark-NavBar.css') }}">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: beige">
    <!-- Start: Dark NavBar -->
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button"
            style="height: 90px;color: #ffffff;background: var(--bs-gray-600);">
            <div class="container">
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                </button><img src="{{ asset('assets/img/student%20dashboard%20pictures/unc-logo.png') }}"
                    style="width: 70px;height: 70px;">
                <div class="collapse navbar-collapse" id="navcol-1"
                    style="background: var(--bs-gray-600);width: 1000px;">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link"
                                style="color: #ffffff;background: transparent;"
                                href="{{ route('student.index') }}">&nbsp;
                                <i class="fa fa-home"></i> Home</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                                data-bs-toggle="dropdown" href="#" style="color: var(--bs-body-bg);">ApplyNow</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Scholarships</a><a
                                    class="dropdown-item" href="#">Grants</a><a class="dropdown-item"
                                    href="#">Loans</a><a class="dropdown-item" href="#">Discounts</a></div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"
                                style="color: var(--bs-body-bg);"><img class="rounded-circle"
                                    src="{{ Storage::url('avatar/defaultAvatar.jpg') }}"
                                    style="width: 32px;height: 32px;"></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('student/18-08925') }}"><i
                                        class="fa fa-user" aria-hidden="true"></i> My Profile&nbsp;</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-book"></i></i> My Application</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main>@yield('content')</main>



    <footer class=" sticky-footer" style="background-color: beige">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © 2022 | University of Nueva Caceres - UNCSGOIS .
                    All Rights Reserved</span></div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('assets/js/BreakingNews.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
@if ($errors->any())
    <script>
        swal({
            title: "Invalid Action!",
            text: "Please Check your inputs",
            icon: "error",
            button: "ok!",
        });
    </script>
@endif

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

{{ @Session::forget('success') }}
{{ @Session::forget('error') }}

</html>
