<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('assets/img/homepage%20pictures/unc-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="{{ asset('assets/css/Kalmansk-Regular.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Mono">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{ asset('assets/css/Sakae-Simple-Section.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- axios request --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js"></script>
    {{--  --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css"> --}}
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar-fluid navbar-dark align-items-start sidebar sidebar-dark" style="background-color:#334756">
            <div class="container d-flex flex-column p-0 m-1 text-light">
                <ul class="navbar-nav" id="accordionSidebar">
                    <li class="nav-item"><img src="{{ asset('assets/img/dashboard%20logo/unc-logo.png') }}"
                            class="rounded w-75"></li>
                    <hr class="sidebar-divider my-2">
                    <li class="nav-item"><a class="nav-link" href="{{ route('employee.index') }}"><i
                                class="fa fa-home"></i><span>DASHBOARD</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('employee.show') }}"><i
                                class="fas fa-user"></i><span>PROFILE</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('employee.scholarhips') }}"><i
                                class="las la-school"></i><span>SCHOLARSHIPS</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('employee.discounts') }}"><i
                                class="fa fa-graduation-cap"></i><span>DISCOUNTS</span></a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('employee.loans') }}"><i
                                class="las la-chalkboard-teacher"></i><span>LOANS</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('employee.categories') }}"><i
                                class="fa fa-list-alt"></i><span>PROGRAMS</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline text-light"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper" style="background-color: beige">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand shadow mb-4 topbar static-top"
                    style="background-color: #334756">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <div class="h4 fw-bold text-light">UNC SCHOLARSHIP AND GRANTS </div>

                        <ul class="navbar-nav ms-auto float-right">

                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" href="{{ route('admin.profile') }}"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="d-none d-lg-inline me-2">{{ Auth::user()->lastname ?? '' }},
                                            {{ Auth::user()->firstname ?? '' }}
                                            {{ Auth::user()->middlename ?? '' }}</span>
                                        <img class="border rounded-circle img-profile"
                                            src="{{ Storage::url('avatar/' . Auth::user()->avatar ?? '') }}">
                                    </a>
                                    <div class="dropdown-menu shadow dropdown-menu-end">
                                        <a class="dropdown-item" href="{{ route('employee.show') }}"><i
                                                class="fas fa-user"></i>&nbsp;Profile</a>
                                        <a class="dropdown-item" href="{{ route('employee.show.password') }}">
                                            <i class="fa fa-key" aria-hidden="true"></i> &nbsp;Change Password</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('employee.logout') }}"><i
                                                class="fa fa-sign-out"></i>
                                            &nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main>@yield('content')</main>
            </div>
            <footer class="sticky-footer" style="background-color: beige">
                <div class="container my-auto">
                    <div class="text-center text-dark my-auto copyright"><span>Copyright ?? 2022 | University of Nueva
                            Caceres - UNCSGOIS . All Rights Reserved</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
<script>
    AOS.init();
</script>
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
