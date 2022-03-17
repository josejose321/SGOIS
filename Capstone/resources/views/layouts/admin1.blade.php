<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel = "icon" href ="{{ asset('assets/img/homepage%20pictures/unc-logo.png') }}" type = "image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="{{ asset('assets/css/Kalmansk-Regular.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Mono">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Articale-List-With-Image-Zoom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/BreakingNews-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/BreakingNews.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Button-Change-Text-on-Hover.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/CoolFont---Text-Container.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Customizable-Background--Overlay.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Dark-NavBar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Feature-Block-Image-Three-With-Full-Wide-Screen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Features-Boxed.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gradient-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/HoverDownButton.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{ asset('assets/css/News-Cards.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Newsletter-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Pretty-Footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Responsiv-News-Crawler-in-column-No-Costum-Code.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Sakae-Simple-Section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Table-With-Search-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Table-With-Search.css') }}">
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

    {{-- <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark   p-0" style="background-color:#334756">
            <div class="container d-flex flex-column p-1 text-light"><img src="{{ asset('assets/img/dashboard%20logo/unc-logo.png') }}" class="rounded float-left w-50">
                <hr class="sidebar-divider my-2">
                <ul class="navbar-nav" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}"><i class="fa fa-home"></i><span>DASHBOARD</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.profile') }}"><i class="fas fa-user"></i><span>PROFILE</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.scholarhips') }}"><i class="las la-school"></i><span>SCHOLARSHIPS</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.discounts') }}"><i class="fa fa-graduation-cap"></i><span>DISCOUNTS</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.loans') }}"><i class="las la-chalkboard-teacher"></i><span>LOANS</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.students') }}"><i class="fa fa-graduation-cap"></i><span>STUDENTS</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.students') }}"><i class="fa fa-list-alt"></i><span>REPORTS</span></a></li>
                    <li class="nav-item"><a class="nav-link" type="button" id="announce"><i class="fa fa-bell"></i><span>ANNOUNCE</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper" style="background-color: #EEEEEE">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-light shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <div class="h4 font-weight-bold text-danger">UNIVERSITY SCHOLARSHIP AND GRANTS OFFICE</div>

                        <ul class="navbar-nav flex-nowrap ms-auto"> 
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                        <span class="d-none d-lg-inline me-2 text-gray-600 ">{{ $admin->lastname ?? "" }}, {{ $admin->firstname ?? "" }} {{ $admin->middlename ?? "" }}</span>
                                        <img class="border rounded-circle img-profile" src="{{ Storage::url('avatar/defaultAvatar.jpg') }}"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    
                    <main>@yield('content')</main>
                    
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © 2022 | University of Nueva Caceres - UNCSGOIS . All Rights Reserved</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>


@include('modals.announce')
@include('modals.import')

</html>