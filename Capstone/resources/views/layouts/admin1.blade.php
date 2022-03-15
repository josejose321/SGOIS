<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
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
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-gray-700);">
            <div class="container-fluid d-flex flex-column p-0"><img src="{{ asset('assets/img/dashboard%20logo/unc-logo.png') }}" style="width: 100px;height: 100px;margin: 20px;">
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}"><i class="fa fa-home"></i><span>DASHBOARD</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.profile') }}"><i class="fas fa-user" style="background: transparent;"></i><span>PROFILE</span></a>
                    <a class="nav-link active" href="{{ route('admin.students') }}"><i class="fa fa-graduation-cap" style="font-size: 12PX;"></i><span>STUDENTS</span></a><a class="nav-link" href="admin-profile.html"><i class="fa fa-stack-overflow" style="color: rgba(255, 255, 255, 0.3);"></i><span style="color: rgba(255, 255, 255, 0.8);">&nbsp;STATISTICS</span></a></li>
                    
                    <li class="nav-item"><a class="nav-link active" href="students.html"><i class="fa fa-list-alt"></i><span>REPORTS</span></a><a class="nav-link"><i class="fa fa-bell"></i><span>ANNOUNCEMENT</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html"></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn py-0" type="button" style="background: var(--bs-danger);border-bottom-color: var(--bs-red);color: var(--bs-body-bg);"><i class="fas fa-search" style="border-bottom-color: var(--bs-body-bg);"></i></button></div>
                        </form>

                        <ul class="navbar-nav flex-nowrap ms-auto"> 
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                        <span class="d-none d-lg-inline me-2 text-gray-600 ">{{ $admin->lastname }}, {{ $admin->firstname }} {{ $admin->middlename }}</span>
                                        <img class="border rounded-circle img-profile" src="{{ Storage::url('avatar/defaultAvatar.jpg') }}"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Change Password</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h2 class="text-dark mb-4">
                        <button class="btn pull-right" id="import" type="button" style="background: var(--bs-gray-800);color: var(--bs-body-bg);">
                            <i class="fa fa-download" ></i>&nbsp; IMPORT STUDENTS</button>
                        <button class="btn pull-right" type="button" id="addStudent" style="background: var(--bs-red);margin-right: 5px;border-bottom-color: var(--bs-red);color: var(--bs-body-bg);">
                            <i class="fa fa-pencil-square-o"></i>&nbsp; ADD STUDENT</button>
                        STUDENTS
                    </h2>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
@include('modals.addStudent')
@include('modals.addSem')
@include('modals.announce')
@include('modals.import')
<script>
    
$(function() {
    console.log( "ready!" );
    $('#import').on('click',function(e){
        $('#importmodal').modal('show');
        console.log('hello');
    });
    $('#addStudent').on('click',function(e){
        $('#studentmodal').modal('show');
        console.log('hello');
    });
});
</script>
</html>