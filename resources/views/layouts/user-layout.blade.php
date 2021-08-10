<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nakwalify</title>
    <base href="/">

    <link rel="icon" type="image/png" href="./assets/images/fav.png">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">


    <link href="{{ asset('assets/css/vertical-responsive-menu1.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/instructor-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/semantic/semantic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>

<body>


    <header class="header clearfix justify-content-between mb-4 " style="background-color: #3a9982;">
        <button type="button" id="toggleMenu" class="toggle_menu">
            <i class="material-icons-outlined bg-transparent">menu</i>
        </button>
        <div class="main_logo col-2" id="logo">
            <a href="{{url('/')}}"><img src="./assets/images/logo.svg" alt=""></a>
            <a href="{{url('/')}}"><img class="logo-inverse" src="./assets/images/ct_logo.svg" alt=""></a>
        </div>



        <div class="col-md-5 col-sm-8">
            <div class="input-group border border-dark rounded-pill bg-light" style="margin-top: 65px;">
                <div class="input-group-prepend  col-4">

                    <div class="dropdown show ">
                        <a class="font-weight-bolder navt text-black" href="#">
                            <p class="p-0 m-0 text-nowrap">Browse <i class="fa fa-chevron-down"></i> </p>
                        </a>
                        <div class=" bg-white dropnav" style=" ">
                            <div class="">
                                <div class="d-flex justfy-content-between ">

                                    <div class="navl  w-100 ">
                                        <div class="d-flex justfy-content-between ">
                                            <div class=" m-3 nav1  ">
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#develop">Development <i
                                                        class="fas fa-chevron-right lfa"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#business">Business <i
                                                        class="fas fa-chevron-right lfa"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#finance">Finance & Accounting<i
                                                        class="fas fa-chevron-right lfa"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between" href="#it">IT &
                                                    Software <i class="fas fa-chevron-right lfa"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#office">Office Productivity <i
                                                        class="fas fa-chevron-right lfa"></i></a>

                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#design">Design <i class="fas fa-chevron-right lfa"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#market">Marketing <i
                                                        class="fas fa-chevron-right lfa"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#lifestyle">Lifestyle <i
                                                        class="fas fa-chevron-right lfa"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#photography">Photography & Video <i
                                                        class="fas fa-chevron-right lfa"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#health">Health & Fitness <i
                                                        class="fas fa-chevron-right lfa"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#music">Music <i class="fas fa-chevron-right lfa"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#teaching">Teaching & Academics<i
                                                        class="fas fa-chevron-right lfa"></i></a>
                                            </div>
                                            <div class="nav2 m-3 tab-content ">
                                                <div class="tabpane fade show active" id="develop">
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#web">Web development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#data">Data Science <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#mobile">Mobile Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#planguage">Programming Languages <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#game">Game Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#database">Database Design & Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#stesting">Software Testing <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sengr">Software Engineering <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sdt">Software Devevopment Tools <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#ncd">No-Code Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                </div>
                                                <div class="tabpane fade  " id="business">
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#entre">Entrepreneurship <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#commu">Communucation<i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#manage">Management <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sales">Sales <i class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#bustra">Business Strategy <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#oper">Operations <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#projm">Project Management <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#buslaw">Business Law<i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#bai">Business Analytics & Inteligence <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#hr">Human Resources <i
                                                            class="fas fa-chevron-right lfa"></i></a>

                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#ind">Industry <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                </div>
                                                <div class="tabpane fade show active" id="finance">
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#fweb"> Accountig and Bookeeping<i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#fdata">Compliance<i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#fmobile">Cryptocurrency & Blockchain <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#fplanguage">Finance <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#fgame">Finace Cert & Exam Prep <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#fdatabase">Finacial Modeling &Analysis <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#fstesting">Investing & Trading<i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#fsengr">Money Management Tools<i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#fsdt">Taxes <i class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#fncd">Other Finance & Accounting <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                </div>
                                                <div class="tabpane fade show active" id="it">
                                                    <a class="dropdown-item" href="{{url('addcourse')}}">Add Course</a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#web">Web development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#data">Data Science <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#mobile">Mobile Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#planguage">Programming Languages <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#game">Game Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#database">Database Design & Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#stesting">Software Testing <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sengr">Software Engineering <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sdt">Software Devevopment Tools <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#ncd">No-Code Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                </div>
                                                <div class="tabpane fade show active" id="office">
                                                    <a class="dropdown-item" href="{{url('addcourse')}}">Add Course</a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#web">Web development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#data">Data Science <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#mobile">Mobile Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#planguage">Programming Languages <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#game">Game Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#database">Database Design & Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#stesting">Software Testing <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sengr">Software Engineering <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sdt">Software Devevopment Tools <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#ncd">No-Code Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                </div>
                                                <div class="tabpane fade show active" id="personal">
                                                    <a class="dropdown-item" href="{{url('addcourse')}}">Add Course</a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#web">Web development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#data">Data Science <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#mobile">Mobile Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#planguage">Programming Languages <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#game">Game Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#database">Database Design & Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#stesting">Software Testing <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sengr">Software Engineering <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sdt">Software Devevopment Tools <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#ncd">No-Code Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                </div>
                                                <div class="tabpane fade show active" id="design">
                                                    <a class="dropdown-item" href="{{url('addcourse')}}">Add Course</a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#web">Web development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#data">Data Science <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#mobile">Mobile Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#planguage">Programming Languages <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#game">Game Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#database">Database Design & Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#stesting">Software Testing <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sengr">Software Engineering <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sdt">Software Devevopment Tools <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#ncd">No-Code Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                </div>
                                                <div class="tabpane fade show active" id="market">
                                                    <a class="dropdown-item" href="{{url('addcourse')}}">Add Course</a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#web">Web development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#data">Data Science <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#mobile">Mobile Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#planguage">Programming Languages <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#game">Game Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#database">Database Design & Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#stesting">Software Testing <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sengr">Software Engineering <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sdt">Software Devevopment Tools <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#ncd">No-Code Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                </div>
                                                <div class="tabpane fade show active" id="lifestyle">
                                                    <a class="dropdown-item" href="{{url('addcourse')}}">Add Course</a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#web">Web development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#data">Data Science <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#mobile">Mobile Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#planguage">Programming Languages <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#game">Game Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#database">Database Design & Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#stesting">Software Testing <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sengr">Software Engineering <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#sdt">Software Devevopment Tools <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                    <a class="dropdown-item d-flex justify-content-between"
                                                        href="#ncd">No-Code Development <i
                                                            class="fas fa-chevron-right lfa"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav3 m-3 d-nonel ">
                                        <div class="tab-content">
                                            <div class="tabpane fade show active" id="web">
                                                <a class="dropdown-item d-flex justify-content-between" href="">Web
                                                    development </a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#data">Data Science </a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#mobile">Mobile Development </a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#planguage">Programming Languages </a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#game">Game Development</a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#database">Database Design & Development </a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#stesting">Software Testing </a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#sengr">Software Engineering </a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#sdt">Software Devevopment Tools </a>
                                                <a class="dropdown-item d-flex justify-content-between"
                                                    href="#ncd">No-Code Development</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <input type="text" class="form-control prompt m-auto srch10 col-7"
                    aria-label="Text input with dropdown button">
                <div class="input-group-append col-2">
                    <button class='fa  fa-search bg-transparent border-0 icon icon1  m-auto'>
                    </button>
                </div>
            </div>
        </div>



        <div class="header_right m-1">
            <ul>
                <li class="dropdown">
                    <a href="create_new_course.html#" class="opts_account" title="Account">
                        Naqualify Business
                    </a>
                    <div class=" dropdown-content text-center">
                        <p class="font-weight-bold m-2">Get your team access to over 6,000 top Udemy courses, anytime,
                            anywhere.</p>
                        <div class="m-2">
                            <button class="btn btn-block bg-black text-white ">Try Naqualify Business</button>

                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="create_new_course.html#" class="opts_account" title="Account">
                        My Learning
                    </a>
                    <div class=" dropdown-content">
                        <div class="d-flex flex-nowrap m-2">
                            <div class="card-image ">
                                <img src="{{asset('assets/images/instructor_12.jpg')}}" alt="" class="">
                            </div>
                            <div class="w-100">
                                <div class=" m-1">

                                    <div class="title font-weight-bolder">Complete Python Developer in 2021:Zero to
                                        Mastery
                                    </div>
                                    <a href="http//" class="title font-weight-bolder text-blue"
                                        style="color: blue;">start Learning
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="m-2 border-top">
                            <a href="{{url('/myaccount')}}"
                                class="btn btn-block bg-black text-white font-weight-bolder ">Go to
                                Mylearning</a>

                        </div>

                    </div>
                </li>
                <li class="dropdown">
                    <a href="create_new_course.html#" class="opts_account" title="Account">
                        <span class="material-icons-outlined text-white " style="font-size:20px">
                            favorite_border
                        </span>
                    </a>
                    <div class=" dropdown-content text-center">
                        <div class="d-flex flex-nowrap m-2">
                            <div class="card-image ">
                                <img src="{{asset('assets/images/instructor_12.jpg')}}" alt="" class="">
                            </div>
                            <div class="w-100">
                                <div class=" m-1">

                                    <div class="title font-weight-bolder">Complete Python Developer in 2021:Zero to
                                        Mastery
                                    </div>
                                    <a href="#" class="title font-weight-bolder " style="color: blue;">start Learning
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="m-2 border-top">
                            <a href="{{url('/coursepurches')}}"
                                class="btn btn-outline-dark btn-block text-dark font-weight-bolder ">Add to cart</a>

                        </div>

                        <div class="m-2 border-top">
                            <a href="{{url('/myaccount')}}"
                                class="btn btn-block bg-black text-white font-weight-bolder ">Go to
                                Wishlist</a>

                        </div>
                    </div>
                </li>
                <li class="ui dropdown">
                    <a href="" class="option_links  " id="dropdownMenuButton" title="Notifications"><i
                            class='fa fa-bell'></i><span class="noti_count">3</span></a>
                    <div class="dropdown-content overflow-auto" aria-labelledby="dropdownMenuButton">
                        <a href="create_new_course.html#" class="channel_my item dropdown-item">
                            <div class="profile_link">
                                <img src="./assets/images/left-imgs/img-1.jpg" alt="">
                                <div class="pd_content p-0 m-0">
                                    <p class="p-0 m-0 font-weight-bold">Rock William</p>
                                    <p class="p-0 m-0">Like Your Comment On Video <strong>How to create sidebar
                                            menu</strong>.</p>
                                    <span class="nm_time">2 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="create_new_course.html#" class="channel_my item dropdown-item"">
                            <div class=" profile_link">
                            <img src="./assets/images/left-imgs/img-2.jpg" alt="">
                            <div class="pd_content">
                                <p class="p-0 m-0 font-weight-bold">Jassica Smith</p>
                                <p class="p-0 m-0">Added New Review In Video <strong>Full Stack PHP Developer</strong>.
                                </p>
                                <span class="nm_time">12 min ago</span>
                            </div>
                    </div>
                    </a>
                    <a href="create_new_course.html#" class="channel_my item dropdown-item">
                        <div class="profile_link">
                            <img src="./assets/images/left-imgs/img-9.jpg" alt="">
                            <div class="pd_content p-0 m-0">
                                <p> Your Membership Approved <strong>Upload Video</strong>.</p>
                                <span class="nm_time">20 min ago</span>
                            </div>
                        </div>
                    </a>
                    <a class="vbm_btn" href="instructor_notifications.html">View All <i
                            class='uil uil-arrow-right dropdown-item"'></i></a>
        </div>
        </li>
        <li class=" dropdown">
            <a href="create_new_course.html#" class="opts_account" title="Account">
                <img src="./assets/images/hd_dp.jpg" alt="">
            </a>
            <div class=" dropdown-content">
                <div class="channel_my">
                    <div class="profile_link">
                        <img src="./assets/images/hd_dp.jpg" alt="">
                        <div class="pd_content">
                            <div class="rhte85">
                                <h6>Joginder Singh</h6>
                                <div class="mef78" title="Verify">
                                    <i class='uil uil-check-circle'></i>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="night_mode_switch__btn">
                    <a href="create_new_course.html#" id="night-mode" class="btn-night-mode">
                        <i class="uil uil-moon"></i> Night mode
                        <span class="btn-night-mode-switch">
                            <span class="uk-switch-button"></span>
                        </span>
                    </a>
                </div>
                <div class="border-bottom mb-2">
                    <a href="{{url('/myaccount')}}" class="item channel_item">My Learning</a>
                    <a href="{{url('/coursepurches')}}" class="item channel_item">My cart</a>
                    <a href="{{url('/myaccount')}}" class="item channel_item">Wishlist</a>
                    <a href="membership.html" class="item channel_item"></a>
                </div>
                <div class="">
                    <a href="{{url('/accsetting')}}" class="item channel_item">Setting</a>
                    <a href="sign_in.html" class="item channel_item">Sign Out</a>
                    <a href="instructor_dashboard.html" class="item channel_item">Language English <i
                            class="fa fa-globe "></i></a>
                </div>

            </div>
        </li>
        </ul>
        </div>
    </header>

    <div>
        <nav class="vertical_nav pt-3  ">
            <div class="left_section menu_left" id="js-menu">
                <div class="left_section">
                    <ul>
                        <li class="menu--item">
                            <a href="{{url('instructordashboard')}}" class="menu--link" title="Dashboard">
                                <i class="fe fe-grid menu--icon"></i>
                                <span class="menu--label">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="{{url('instructorcourses')}}" class="menu--link" title="Courses">
                                <i class='uil uil-book-alt menu--icon'></i>
                                <span class="menu--label">Courses</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="{{url('analytics')}}" class="menu--link" title="Analyics">
                                <i class='uil uil-analysis menu--icon'></i>
                                <span class="menu--label">Analyics</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="{{url('addcourse')}}" class="menu--link " title="Create Course">
                                <i class='uil uil-plus-circle menu--icon'></i>
                                <span class="menu--label">Create Course</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="{{url('createcert')}}" class="menu--link " title="Create Course">
                                <i class='uil uil-plus-circle menu--icon'></i>
                                <span class="menu--label">Create Certficate</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="{{url('coursepurches')}}" class="menu--link " title="Create Course">
                                <i class='uil uil-plus-circle menu--icon'></i>
                                <span class="menu--label">Course purchase</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="{{url('notification')}}" class="menu--link" title="Notifications">
                                <i class='uil uil-bell menu--icon'></i>
                                <span class="menu--label">Notifications</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="{{url('certificate')}}" class="menu--link" title="My Certificates">
                                <i class='uil uil-award menu--icon'></i>
                                <span class="menu--label">My Certificates</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="{{url('skills')}}" class="menu--link" title="My Certificates">
                                <i class='uil uil-award menu--icon'></i>
                                <span class="menu--label">My Skills</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="{{url('badges')}}" class="menu--link" title="My Certificates">
                                <i class='uil uil-award menu--icon'></i>
                                <span class="menu--label">My badges</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="review" class="menu--link" title="Reviews">
                                <i class='uil uil-star menu--icon'></i>
                                <span class="menu--label">Reviews</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="earnings" class="menu--link" title="Earning">
                                <i class='uil uil-dollar-sign menu--icon'></i>
                                <span class="menu--label">Earning</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="left_section pt-2">
                    <ul>
                        <li class="menu--item">
                            <a href="myaccount" class="menu--link" title="Setting">
                                <i class='uil uil-cog menu--icon'></i>
                                <span class="menu--label">My account</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="deleteaccount" class="menu--link" title="Send Feedback">
                                <i class='uil uil-comment-alt-exclamation menu--icon'></i>
                                <span class="menu--label">delete Account</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button id="collapse_menu" class="collapse_menu">
                    <i class="collapse_menu--icon  fa fa-fw"></i>
                    <span class="collapse_menu--label">hide menu</span>
                </button>
            </div>

        </nav>

    </div>
    <br>
    <br>

    <div class="wrapper ">
        <main class="" style="">
            @yield('content')
        </main>

        <footer class="bg-greenpale  pt-5 pb-5 w-100" style="background: #3a9982;">
            <div class="d-flex kfooter">
                <div class="col-3">
                    <div class="coy pl-2">
                        <h4><a class="text-dark text-nowrap" href="#">Future Basics</a></h4>
                        <p>Copyright &copy; 2021 &middot; All Rights Reserved &middot; </p>
                    </div>
                </div>
                <div class="col-9">
                    <div class="row ">
                        <div class="col-3 p-1 ">
                            <p class="nav-link m-0"><strong>Company</p></strong>
                            <a class="nav-link" href="#">About</a>
                            <a class="nav-link" href="#">Careers</a>
                            <a class="nav-link" href="#">Partinerships</a>
                            <a class="nav-link" href="#">Social Media</a>
                        </div>
                        <div class="col-3 p-1 ">
                            <p class="nav-link m-0"><strong>Community</p></strong>
                            <a class="nav-link" href="#">Free Classes</a>
                            <a class="nav-link" href="#">Business</a>
                            <a class="nav-link" href="#">packages</a>
                            <a class="nav-link" href="#">Feature</a>
                        </div>
                        <div class="col-3 p-1 ">
                            <p class="nav-link m-0"><strong>Contact</p></strong>
                            <a class="nav-link" href="#">Resource</a>
                            <a class="nav-link" href="#">Recource</a>
                            <a class="nav-link" href="#">Resource</a>
                        </div>

                        <div class="col-3 p-1 ">
                            <p class="nav-link m-0"><strong>More</p></strong>
                            <a class="nav-link" href="#">Help</a>
                            <a class="nav-link" href="#">Privacy</a>
                            <a class="nav-link" href="#">Terms</a>
                        </div>


                    </div>
                </div>
            </div>

        </footer>



        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/OwlCarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('assets/vendor/semantic/semantic.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom1.js') }}"></script>
        <script src="{{ asset('assets/js/night-mode.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/vertical-responsive-menu.js') }}"></script>

        <script src="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
        <script src="{{ asset('assets/plugins/easing/easing.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
