<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>UNCSGOIS</title>
    <link rel="icon" href="{{ asset('unc-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Kalmansk-Regular.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Mono">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Articale-List-With-Image-Zoom.css">
    <link rel="stylesheet" href="assets/css/BreakingNews-1.css">
    <link rel="stylesheet" href="assets/css/BreakingNews.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/CoolFont---Text-Container.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Feature-Block-Image-Three-With-Full-Wide-Screen.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar-1.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="assets/css/HoverDownButton-1.css">
    <link rel="stylesheet" href="assets/css/HoverDownButton.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/News-Cards.css">
    <link rel="stylesheet" href="assets/css/Newsletter-v2.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Responsiv-News-Crawler-in-column-No-Costum-Code.css">
    <link rel="stylesheet" href="assets/css/Sakae-Simple-Section.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Start: Dark NavBar -->
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button"
            style="background-color: #2C394B">
            <div class="container-fluid animate__animated animate__fadeIn"><a class="navbar-brand" href="{{ url('/') }}"><img
                        src="{{ asset('unc-logo.png') }}"
                        style="width: 80px;height: 80px;">&nbsp;</a><button data-bs-toggle="collapse"
                    class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle
                        navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav ms-auto animate__animated animate__fadeIn">
                        <li class="nav-item"><a class="nav-link" style="color:#ffffff;"
                                href="{{ url('') }}">&nbsp;HOME</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                                data-bs-toggle="dropdown" href="#" style="color: var(--bs-body-bg);">SCHOLARSHIPS</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('/login') }}">SCHOLARSHIPS</a>
                                <a class="dropdown-item" href="{{ url('/login') }}">GRANTS</a>
                                <a class="dropdown-item" href="{{ url('/login') }}">LOANS</a>
                                <a class="dropdown-item" href="{{ url('/login') }}">DISCOUNTS</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav animate__animated animate__fadeIn">
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link" href="#footer"
                                style="color: var(--bs-body-bg);">CONTACT US</a></li>
                        <li class="nav-item"></li>
                    </ul><a class="btn active border rounded-pill" role="button"
                        style="background: var(--bs-red);color: var(--bs-body-bg);border-color: transparent;border-top-color: transparent;border-right-color: transparent;border-bottom-color: transparent;border-left-color: transparent;width: 80px;height: 35px;"
                        href="{{ url('/admin') }}">LOGIN</a>
                </div>
            </div>
        </nav>
    </div><!-- End: Dark NavBar -->
    <!-- Start: Customizable Background & Overlay -->
    <div
        style="background-image:url(&quot;assets/img/login pictures/Dko7FBnVsAE3A8G.jpg&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
        <!-- Start: Overlay -->
        <div class="d-flex justify-content-center align-items-center"
            style="height: inherit;min-height: initial;width: 100%;position: absolute;left: 0;background: rgba(30,41,99,0.53);">
            <!-- Start: Landing content -->
            <div class="d-flex align-items-center order-5" style="height:200px;">
                <div class="container">
                    <div data-aos="fade-up" class="display-4 text-center text-light fw-bold">Everyone Makes It
                    </div>
                    <p style="color: var(--bs-body-bg);text-align: center;" data-aos="fade-down"><br>Be an instrument in providing better
                        tomorrows for the BICOLANO'S.&nbsp; Join UNC's Everybody Shares Project.&nbsp;<br><br><br></p>
                </div>
            </div><!-- End: Landing content -->
            <section></section>
        </div><!-- End: Overlay -->
    </div><!-- End: Customizable Background & Overlay -->
    <!-- Start: Articale List With Image Zoom -->
    <!-- Start: Articale List With Image Zoom -->
    <div  class="article-list" style="background-color: #B4A5A5">
        <!-- Start: 2 Rows 1+4 Columns -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center fw-bold animate__animated animate__slideInDown" style="color: var(--bs-red);">AVAILABLE SCHOLARSHIPS</h2>
                    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Title</h4><button type="button"
                                        class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>The content of your modal.</p>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light" type="button"
                                        data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                        type="button">Save</button></div>
                            </div>
                        </div>
                    </div>
                    <hr
                        style="width: 100px;height: 3px;text-align: center;background: #ff0000;color: var(--bs-red);margin-left: 500px;">
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-md-3" data-aos="fade-right">
                    <div class="dropdown"><button class="btn dropdown-toggle" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"
                            style="width: 270px;height: 60px;font-size: 20px;color: var(--bs-body-bg);background: var(--bs-red);">SCHOLARSHIPS&nbsp;
                            &nbsp; &nbsp;&nbsp;</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" style="font-size: 20px;">ELEMENTARY&nbsp; DEPARTMENT</a>
                            <a class="dropdown-item" style="font-size: 20px;">JUNIOR HIGH SCHOOL DEPARTMENT</a>
                            <a class="dropdown-item" style="font-size: 20px;">SENIOR HIGH SCHOOL DEPARTMENT</a>
                            <a class="dropdown-item" style="font-size: 20px;">COLLEGE DEPARTMENT</a>
                            <a class="dropdown-item" style="font-size: 20px;">GRADUATE SCHOOL AND LAW</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-left">
                    <div class="dropdown"><button class="btn dropdown-toggle" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"
                            style="width: 270px;height: 60px;font-size: 20px;background: var(--bs-red);color: var(--bs-body-bg);">GRANTS&nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" style="font-size: 20px;">EDUCATION SERVICE CONTRACTING (ESC)
                                SCHEME FOR JUNIOR HIGH SCHOOL</a>
                            <a class="dropdown-item" style="font-size: 20px;">VOUCHER SYSTEM FOR SENIOR HIGH SCHOOL</a>
                            <a class="dropdown-item" style="font-size: 20px;">TERTIARY EDUCATION SUBSIDY (TES)</a>
                            <a class="dropdown-item" style="font-size: 20px;">COMMISION ON HIGHER EDUCATION SCHOLARSHIP
                                PROGRAMS (CSPs)</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-right">
                    <div class="dropdown"><button class="btn dropdown-toggle" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"
                            style="width: 270px;height: 60px;font-size: 20px;background: var(--bs-red);color: var(--bs-body-bg);">LOANS&nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</button>
                        <div class="dropdown-menu" style="font-size: 20px;">
                            <a class="dropdown-item">PGMA HELP</a>
                            <a class="dropdown-item">SAFE 4SR</a>
                            <a class="dropdown-item">BRIDGE LOAN</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-left">
                    <div class="dropdown"><button class="btn dropdown-toggle" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"
                            style="width: 270px;height: 60px;font-size: 20px;color: var(--bs-body-bg);background: var(--bs-red);">DISCOUNTS&nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</button>
                        <div class="dropdown-menu" style="font-size: 20px;">
                            <a class="dropdown-item">CASH PAYMENT</a>
                            <a class="dropdown-item">MEMBERS OF THE SAME FAMILY (MOSF)</a>
                            <a class="dropdown-item">ALUMNI DISCOUNT</a>
                            <a class="dropdown-item">LOYALTY DISCOUNT</a>
                            <a class="dropdown-item">EMPLOYEE BENEFIT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End: 2 Rows 1+4 Columns -->
        <div data-aos="fade-up" class="container-fluid text-danger">
            <!-- Start: Intro -->
            <div class="intro"></div><!-- End: Intro -->
            <div class="w-100"></div><!-- Start: Articles -->
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item">
                    <!-- Start: Zoom in Frame -->
                    <div class="zoomin frame" style="width:100%;height:236px;"><img style="width:100%;height:236px;"
                            src="{{ asset('unc1.jpg') }}"></div><!-- End: Zoom in Frame -->
                    <h3 class="name">OUR MISSION</h3>
                    <p class="description text-danger">Our mission is to expand opportunities for every Bicolano
                        everywhere and prepare them for a porposeful life, by providing empowering outcome-based
                        education and a nurturing learning environment.</p>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <!-- Start: Zoom in Frame -->
                    <div class="zoomin frame" style="width:100%;height:236px;"><img style="width:100%;height:236px;"
                            src="{{ asset('unc2.jpg') }}"></div><!-- End: Zoom in Frame -->
                    <h3 class="name">OUR VISION</h3>
                    <p class="description text-danger">Our vision is to be the top university of choice for Bicolanos
                        everywhere. We will nurture our students through empowering, outcome-based education, to help
                        them become purposeful, productive, and future-ready human beings who will contribute to the
                        sustainable development of Bicol and better tomorrows for all.&nbsp;</p>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <!-- Start: Zoom in Frame -->
                    <div class="zoomin frame" style="width:100%;height:236px;"><img style="width:100%;height:236px;"
                            src="{{ asset('unc3.jpg') }}"></div><!-- End: Zoom in Frame -->
                    <h3 class="name">WE CHAMPION EXCELLENCE</h3>
                    <p class="description text-danger">We are also among the select college schools in Bicol that offer
                        equally excellent academic programs for pre-school, elementary, and high school students. In
                        addition, we are majority-owned by AC Education, the education arm of the Ayala Group. AC
                        Education helps us introduce innovative learning methods that will further boost the quality of
                        our course offerings.<br><br></p>
                </div>
            </div><!-- End: Articles -->
        </div>
        <div class="container-fluid" id="results">
            <div class="row">
                @foreach ($scholarshipsResults as $result)
                    <div class="col-md-6 col-xl-3 mb-4" data-aos="fade-up">
                        <div class="card-body" style="color: var(--bs-body-bg);background: var(--bs-red);">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                    <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                                        <center>
                                            <h5><strong>{{ $result->title ?? '' }}</strong></h5>
                                        </center>
                                        <center>
                                            <h5><strong>{{ $result->total ?? 0 }}</strong></h5>
                                        </center>
                                    </div>
                                </div>
                                <div class="col-auto"><i class="fas fa-solid fa-school fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            <!-- Start: Feature Block Image Three With Full Wide Screen -->
            <section>
                <!-- Start: Feature - Block Image Three - Full Wide Screen -->
                <section data-aos="fade-down" style="background-color: #efefef;padding-top: 40px;padding-bottom: 40px;">
                    <p class="fw-bold animate__animated animate__fadeIn" style="text-align: center;font-size: 35px;color: var(--bs-red);">
                        DEVELOPERS PROFILE</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-11 col-md-12 col-lg-4 col-xl-4">
                                <h1 class="text-center"
                                    style="font-family: Oswald, sans-serif;background-color: #efefef;margin: 0px;font-size: 38px;padding-top: 20px;">
                                    <img class="rounded-circle"
                                        src="{{ Storage::url('avatar/5w3cpHa1tFearfNwwhxBv9kkXBUjfdT8e8c1FXu4.jpg') }}"
                                        style="width: 100px;"><br>
                                </h1>
                                <h1 style="text-align: center;font-size: 15px;font-weight: bold;">JOSE V. EVASCO II</h1>
                                <p class="text-start" style="background-color: #efefef;padding: 10px;margin: 0px;">
                                    To deliver High Quality, Cost Effective service &amp; products to our clients by
                                    employing and supporting a motivated, flexible and focused team and to actively
                                    participate in building &amp; developing an Engineering Business Enterprise based on
                                    sound engineering principles coupled with ethical business practices.<br></p>

                            </div>
                            <div class="col-sm-11 col-md-12 col-lg-4 col-xl-4">
                                <h1 class="text-center"
                                    style="font-family: Oswald, sans-serif;background-color: #efefef;margin: 0px;font-size: 38px;padding-top: 20px;">
                                    <img class="rounded-circle"
                                        src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200"
                                        style="width: 100px;"><br>
                                </h1>
                                <header></header>
                                <header></header>
                                <h1 style="text-align: center;font-size: 15px;font-weight: bold;">MAR ROBIN V. LUMBIS
                                </h1>
                                <p class="text-start" style="background-color: #efefef;padding: 10px;margin: 0px;">
                                    Committed in designing a new concept of living, to build perpetual trust with
                                    clients and providing people the essence of what they need: a personalized ideal
                                    life and to be leading provider of quality Electro Mechanical and Engineering
                                    services across the globe.<br></p>
                            </div>
                            <div class="col-sm-11 col-md-12 col-lg-4 col-xl-4">
                                <h1 class="text-center"
                                    style="font-family: Oswald, sans-serif;background-color: #efefef;margin: 0px;font-size: 20px;padding-top: 20px;">
                                    <img class="rounded-circle" src="assets/img/homepage%20pictures/IMG_2166.jpg"
                                        style="width: 100px;height: 100px;"><br>
                                </h1>
                                <h1 style="text-align: center;font-size: 15px;font-weight: bold;">ANGELINE R. REMOLACIO
                                </h1>
                                <p class="text-start" style="background-color: #efefef;padding: 10px;margin: 0px;">
                                    We base our management philosophy on the highest quality standards and have
                                    implemented a phased review process to maintain and enhance the quality of our
                                    products and services.<br></p>
                            </div>
                        </div>
                    </div>
                </section><!-- End: Feature - Block Image Three - Full Wide Screen -->
            </section><!-- End: Feature Block Image Three With Full Wide Screen -->
        </div>
    </div><!-- End: Articale List With Image Zoom -->
    <div class="col" id="footer" data-aos="fade-up">
        <!-- Start: Pretty Footer -->
        <footer style="background-color: #2C394B">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#"><span></span></a></h3><img
                        src="unc-logo.png"
                        style="width: 200px;height: 200px;margin-bottom: 50px;text-align: center;">
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon" style="background: var(--bs-gray-700);">
                        </span><label class="form-label">J.Hernandez Ave., Naga City&nbsp;</label><label
                            class="form-label">4400</label></div>
                    <div><i class="fa fa-phone footer-contacts-icon" style="background: var(--bs-gray-700);"></i><label
                            class="form-label">+6399561301775</label></div>
                    <div><i class="fa fa-envelope footer-contacts-icon"
                            style="background: var(--bs-gray-700);"></i><label
                            class="form-label">info@unc.edu.ph</label>
                        <p> </p>
                    </div>
                </div>
                <div class="col-md-4 footer-about">
                    <h4 style="text-align: center;margin-top: 22px;font-size: 16px;">UNC - SCHOLARSHIP AND GRANTS</h4>
                    <p style="text-align: center;color: #eef4f7;">"EVERYONE MAKES IT".<br><br>Be an instrument in
                        providing better tomorrows for the BICOLANO'S.&nbsp;Join UNC's Everybody Shares
                        Project.&nbsp;<br><br></p>
                    <div class="social-links social-icons"><a href="#" style="background: var(--bs-gray-700);"><i
                                class="fa fa-facebook"></i></a><a href="#" style="background: var(--bs-gray-700);"><i
                                class="fa fa-twitter"></i></a></div>
                </div>
            </div>
            <hr>
            <p style="text-align: center;font-size: 14px;">University of Nueva Caceres Scholarship and Grants
                Information System. Copyright&nbsp;© 2022. All Rights Reserved.&nbsp;<br><br><br><br><br></p>
        </footer><!-- End: Pretty Footer -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/BreakingNews.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
<script>
    AOS.init();
</script>

</html>
