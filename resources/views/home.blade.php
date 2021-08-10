<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NaKwalify</title>
    <link href="{{ asset('assets/css/vertical-responsive-menu1.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/multitemslide.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">

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
                            <button class="btn btn-block bg-black text-white font-weight-bolder ">Go to
                                Mylearning</button>

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
                            <br>
                            <button class="btn btn-outline-dark btn-block font-weight-bolder ">Add to cart</button>

                        </div>
                        <hr>
                        <div class="m-2 border-top">
                            <button class="btn btn-block bg-black text-white font-weight-bolder ">Go to
                                Withlist</button>

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
                    <a href="instructor_dashboard.html" class="item channel_item">My Learning</a>
                    <a href="membership.html" class="item channel_item">My cart</a>
                    <a href="instructor_dashboard.html" class="item channel_item">Withlist</a>
                    <a href="membership.html" class="item channel_item"></a>
                </div>
                <div class="">
                    <a href="setting.html" class="item channel_item">Setting</a>
                    <a href="sign_in.html" class="item channel_item">Sign Out</a>
                    <a href="instructor_dashboard.html" class="item channel_item">Language English <i
                            class="fa fa-globe "></i></a>
                </div>

            </div>
        </li>
        </ul>
        </div>
    </header>
    <main>


        <br />
        <div class="container " style="margin-top: 6rem !important;">
            <div class="container mt-5">
                <div class="d-flex justify-content-lg-between flex-wrap mt-5">
                    <h3 class="bolder">Welcome back <span class="bg-success">Kelvin</span>, ready for your next
                        lesson?</h3>
                    <div> <a class="btn btn-default border border-dark  hist">View Watch History</a></div>
                </div>
                <div class="card mb-3 mt-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src=" {{asset('assets/images/blog_background.jpg')}}" class="w-100" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class=" card-body flex-column justify-content-end h-100">
                                <div class="d-flex justify-content-between">
                                    <p>Lesson 11 of 18 | 19m</p>
                                    <span class="material-icons-outlined">
                                        more_horiz
                                    </span>
                                </div>
                                <div>
                                    <p class="card-text">Motion Tracking
                                    </p>
                                </div>
                                <div class="card-text d-flex justify-content-between ">
                                    <p>
                                        <small></small>
                                        <small class="text-muted">1h 18m left</small>
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="meddleslide">
            <div class="">

                <div id="carouselExampleIndicators" class="carousel  carousel-fade" data-ride="carousel" style="">
                    <ol class="carousel-indicators ">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active">
                        </li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
                    </ol>


                    <div class="carousel-inner">
                        <div class="carousel-item active h-400">
                            <img src="{{asset('assets/images/photos/artem-sapegin-229391-500.jpg')}}"
                                class="img-fluid center " alt="">
                            <div class="invisiblely">
                                <div class="carousel-caption slide-top">
                                    <div class=" itm">
                                        <div class="banner-content">

                                            <div class="banner-header"><span>Build Meaningful Self-Care Into
                                                    Every Day</span></div>
                                            <div class="banner-description">Join superstar Jonathan Van Ness and
                                                best-selling author Chidera Eggerue for this powerful new
                                                self-care workshop, kicking off July 12th.</div>
                                            <div class="banner-actions"><a href=""
                                                    class="btn btn-default bg-landing"><span>Join
                                                        Now</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item h-400">
                            <img src="{{asset('assets/images/photos/tatyana-dobreva-288463-1500.jpg')}}"
                                class="img-fluid  center" alt="">
                            <div class="invisiblely">
                                <div class="carousel-caption slide-left">
                                    <div class="itm">
                                        <div class="banner-header"><span>Create Your First TikTok</span>
                                        </div>
                                        <div class="banner-description">Script, shoot, and upload your first
                                            TikTok with Josh Otusanya.</div>
                                        <div class="banner-actions">
                                            <a href="" class="btn btn-default bg-landing"><span>Watch
                                                    Now</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item h-400">
                            <img src="{{asset('assets/images/photos/anthony-intraversato-257182-1500.jpg')}}"
                                class="img-fluid center" alt="">
                            <div class="invisiblely">
                                <div class="carousel-caption slide-left">
                                    <div class="itm">
                                        <div class="banner-content-container">
                                            <div class="banner-content">

                                                <div class="banner-header"><span>Build Meaningful Self-Care Into
                                                        Every Day</span></div>
                                                <div class="banner-description">Join superstar Jonathan Van Ness
                                                    and best-selling author Chidera Eggerue for this powerful
                                                    new self-care workshop, kicking off July 12th.</div>
                                                <div class="banner-actions"><a href=""
                                                        class="btn btn-default bg-landing"><span>Join
                                                            Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item h-400">
                            <img src="{{asset('assets/images/photos/anthony-intraversato-257182-1500.jpg')}}"
                                class="img-fluid center" alt="">
                            <div class="invisiblely">
                                <div class="carousel-caption slide-left">
                                    <div class="itm ">
                                        <div class="banner-content-container">
                                            <div class="banner-content">

                                                <div class="banner-header"><span>Build Meaningful Self-Care Into
                                                        Every Day</span></div>
                                                <div class="banner-description">Join superstar Jonathan Van Ness
                                                    and best-selling author Chidera Eggerue for this powerful
                                                    new self-care workshop, kicking off July 12th.</div>
                                                <div class="banner-actions"><a href=""
                                                        class="btn btn-default bg-landing "><span>Join
                                                            Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container-fluid mb-5">
                <div class="d-flex justify-content-between ">
                    <p class="font-weight-bold" style="font-size:26px"> Recommended For You
                    </p>

                </div>
                <div id="carousel-example" class="carousel slide" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri row  mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">

                            <div class="card cardc rounded ">
                                <img class="card-img-top  w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>

                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev " href="#carousel-example" role="button" data-slide="prev"><small
                            class=" jss15 bg-white">
                            <span class="material-icons dark  ">
                                chevron_left
                            </span>
                        </small>

                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <i class=" jss15  ">
                            <span class="material-icons dark font-weight-light">
                                chevron_right
                            </span>
                        </i>

                        </button>
                    </a>
                </div>
            </div>
            <div class="container-fluid mb-5">
                <div class="d-flex justify-content-between flex-wrap ">
                    <p class="font-weight-bold" style="font-size:26px"> For Popular Lessons
                    </p>
                    <div class=""> <a class="btn btn-default border border-dark m-2">View List</a></div>
                </div>
                <div id="carousel-example1" class="carousel slide" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri row  mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">

                            <div class="card cardc rounded ">
                                <img class="card-img-top  w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>

                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev " href="#carousel-example1" role="button" data-slide="prev"><small
                            class=" jss15 bg-white">
                            <span class="material-icons dark  ">
                                chevron_left
                            </span>
                        </small>

                    </a>
                    <a class="carousel-control-next" href="#carousel-example1" role="button" data-slide="next">
                        <i class=" jss15  ">
                            <span class="material-icons dark font-weight-light">
                                chevron_right
                            </span>
                        </i>

                        </button>
                    </a>
                </div>
            </div>
            <div class="container-fluid mb-5 mt-5">
                <div class="d-flex justify-content-between flex-wrap">
                    <p class="font-weight-bold" style="font-size:26px"> Join a WorkShop
                    </p>
                    <div><a class="btn btn-default border border-dark m-2 font-weight-bold">View All
                            WarkShops</a></div>
                </div>
                <div id="carousel-example2" class="carousel slide" data-interval="false" data-ride="carousel">
                    <div class="carousel-inner row  mx-auto" role="listbox">
                        <div class="carousel-item active ">
                            <div class="d-flex flex-wrap">
                                <div class="col-md-4 m-0">

                                    <div class="card cardc rounded m-2">
                                        <div class="card-header bg-success text-white font-weight-bold">Jul 12th
                                            - Aug 9th, 2021</div>
                                        <img class="card-img-top  w-100" width="295" height="165"
                                            src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-2">
                                            <p class="card-text  d-flex justify-content-between">
                                                <small class="card-text">23,162 students </small>
                                                <small class="card-text">1h 50m</small>
                                            </p>


                                            <p class="card-text bold"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-between">
                                                <small class="card-text">John Mac-Anthony </small>
                                                <small class="card-text"><span class="material-icons-outlined">
                                                        bookmark_border
                                                    </span></small>
                                            </p>
                                        </div>

                                    </div>

                                </div>

                                <div class=" col-md-4 m-0">
                                    <div class="card cardc rounded m-2">
                                        <div class="card-header bg-success text-white font-weight-bold">Jul 12th
                                            - Aug 9th, 2021</div>
                                        <img class="card-img-top  w-100" width="295" height="165"
                                            src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-2">
                                            <p class="card-text  d-flex justify-content-between">
                                                <small class="card-text">23,162 students </small>
                                                <small class="card-text">1h 50m</small>
                                            </p>


                                            <p class="card-text bold"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-between">
                                                <small class="card-text">John Mac-Anthony </small>
                                                <small class="card-text"><span class="material-icons-outlined">
                                                        bookmark_border
                                                    </span></small>
                                            </p>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-4 m-0">
                                    <div class="card cardc rounded m-2">
                                        <div class="card-header bg-success text-white font-weight-bold">Jul 12th
                                            - Aug 9th, 2021</div>
                                        <img class="card-img-top  w-100" width="295" height="165"
                                            src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-2">
                                            <p class="card-text  d-flex justify-content-between">
                                                <small class="card-text">23,162 students </small>
                                                <small class="card-text">1h 50m</small>
                                            </p>


                                            <p class="card-text bold"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-between">
                                                <small class="card-text">John Mac-Anthony </small>
                                                <small class="card-text"><span class="material-icons-outlined">
                                                        bookmark_border
                                                    </span></small>
                                            </p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  ">
                            <div class="d-flex flex-wrap">
                                <div class="col-md-4 m-0">

                                    <div class="card cardc rounded m-2">
                                        <div class="card-header bg-success text-white font-weight-bold">Jul 12th
                                            - Aug 9th, 2021</div>
                                        <img class="card-img-top  w-100" width="295" height="165"
                                            src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-2">
                                            <p class="card-text  d-flex justify-content-between">
                                                <small class="card-text">23,162 students </small>
                                                <small class="card-text">1h 50m</small>
                                            </p>


                                            <p class="card-text bold"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-between">
                                                <small class="card-text">John Mac-Anthony </small>
                                                <small class="card-text"><span class="material-icons-outlined">
                                                        bookmark_border
                                                    </span></small>
                                            </p>
                                        </div>

                                    </div>

                                </div>

                                <div class=" col-md-4 m-0">
                                    <div class="card cardc rounded m-2">
                                        <div class="card-header bg-success text-white font-weight-bold">Jul 12th
                                            - Aug 9th, 2021</div>
                                        <img class="card-img-top  w-100" width="295" height="165"
                                            src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-2">
                                            <p class="card-text  d-flex justify-content-between">
                                                <small class="card-text">23,162 students </small>
                                                <small class="card-text">1h 50m</small>
                                            </p>


                                            <p class="card-text bold"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-between">
                                                <small class="card-text">John Mac-Anthony </small>
                                                <small class="card-text"><span class="material-icons-outlined">
                                                        bookmark_border
                                                    </span></small>
                                            </p>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-4 m-0">
                                    <div class="card cardc rounded m-2">
                                        <div class="card-header bg-success text-white font-weight-bold">Jul 12th
                                            - Aug 9th, 2021</div>
                                        <img class="card-img-top  w-100" width="295" height="165"
                                            src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-2">
                                            <p class="card-text  d-flex justify-content-between">
                                                <small class="card-text">23,162 students </small>
                                                <small class="card-text">1h 50m</small>
                                            </p>


                                            <p class="card-text bold"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-between">
                                                <small class="card-text">John Mac-Anthony </small>
                                                <small class="card-text"><span class="material-icons-outlined">
                                                        bookmark_border
                                                    </span></small>
                                            </p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev " href="#carousel-example2" role="button" data-slide="prev"><small
                            class=" jss15 bg-white">
                            <span class="material-icons dark  ">
                                chevron_left
                            </span>
                        </small>

                    </a>
                    <a class="carousel-control-next" href="#carousel-example2" role="button" data-slide="next">
                        <i class=" jss15  ">
                            <span class="material-icons dark font-weight-light">
                                chevron_right
                            </span>
                        </i>

                        </button>
                    </a>
                </div>
            </div>
            <div class="container-fluid mb-5">
                <div class="d-flex justify-content-between flex-wrap ">
                    <p class="font-weight-bold" style="font-size:26px"> Recommended List
                    </p>
                    <div> <a class="btn btn-default border border-dark font-weight-bold m-2">View All</a></div>
                </div>
                <div id="carousel-example3" class="carousel slide" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri row  mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">

                            <div class="card cardc rounded ">
                                <div card-header>
                                    <span class="card-text font-weight-bold m-3">Nakwalify</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                </div>

                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>



                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">

                            <div class="card cardc rounded ">
                                <div card-header>
                                    <span class="card-text font-weight-bold m-3">Nakwalify</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                </div>

                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>



                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">

                            <div class="card cardc rounded ">
                                <div card-header>
                                    <span class="card-text font-weight-bold m-3">Nakwalify</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                </div>

                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>



                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">

                            <div class="card cardc rounded ">
                                <div card-header>
                                    <span class="card-text font-weight-bold m-3">Nakwalify</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                </div>

                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>



                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">

                            <div class="card cardc rounded ">
                                <div card-header>
                                    <span class="card-text font-weight-bold m-3">Nakwalify</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                </div>

                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>



                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">

                            <div class="card cardc rounded ">
                                <div card-header>
                                    <span class="card-text font-weight-bold m-3">Nakwalify</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                </div>

                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>



                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">

                            <div class="card cardc rounded ">
                                <div card-header>
                                    <span class="card-text font-weight-bold m-3">Nakwalify</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                </div>

                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>



                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 ">

                            <div class="card cardc rounded ">
                                <div card-header>
                                    <span class="card-text font-weight-bold m-3">Nakwalify</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                    <img class="card-img-top m-1 w-100" width="295" height="165"
                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                        alt="Card image cap">
                                </div>

                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>



                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev " href="#carousel-example3" role="button" data-slide="prev"><small
                            class=" jss15 bg-white">
                            <span class="material-icons dark  ">
                                chevron_left
                            </span>
                        </small>

                    </a>
                    <a class="carousel-control-next" href="#carousel-example3" role="button" data-slide="next">
                        <i class=" jss15  ">
                            <span class="material-icons dark font-weight-light">
                                chevron_right
                            </span>
                        </i>

                        </button>
                    </a>
                </div>
            </div>
            <div class="container-fluid mb-5">
                <div class="d-flex justify-content-between flex-wrap ">
                    <p class="font-weight-bold" style="font-size:26px"> Featured on Naqualify
                    </p>

                </div>
                <div id="carousel-example4" class="carousel slide" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri row  mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">

                            <div class="card cardc rounded ">
                                <img class="card-img-top  w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>

                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev " href="#carousel-example4" role="button" data-slide="prev"><small
                            class=" jss15 bg-white">
                            <span class="material-icons dark  ">
                                chevron_left
                            </span>
                        </small>

                    </a>
                    <a class="carousel-control-next" href="#carousel-example4" role="button" data-slide="next">
                        <i class=" jss15  ">
                            <span class="material-icons dark font-weight-light">
                                chevron_right
                            </span>
                        </i>

                        </button>
                    </a>
                </div>
            </div>
            <div class="container-fluid mb-5">
                <div class="d-flex justify-content-between flex-wrap">
                    <p class="font-weight-bold" style="font-size:26px"> Trending Now
                    </p>
                    <div> <a class="btn btn-default border border-dark font-weight-bold m-2">View All</a></div>
                </div>
                <div id="carousel-example5" class="carousel slide" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri row  mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">

                            <div class="card cardc rounded ">
                                <img class="card-img-top  w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>

                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev " href="#carousel-example5" role="button" data-slide="prev"><small
                            class=" jss15 bg-white">
                            <span class="material-icons dark  ">
                                chevron_left
                            </span>
                        </small>

                    </a>
                    <a class="carousel-control-next" href="#carousel-example5" role="button" data-slide="next">
                        <i class=" jss15  ">
                            <span class="material-icons dark font-weight-light">
                                chevron_right
                            </span>
                        </i>

                        </button>
                    </a>
                </div>
            </div>
            <div class="container-fluid mb-5">
                <div class="d-flex justify-content-between flex-wrap">
                    <p class="font-weight-bolder" style="font-size:26px"> Best This Month
                    </p>
                    <div><a class="btn btn-default border border-dark font-weight-bold m-2">View All</a></div>
                </div>
                <div id="carousel-example6" class="carousel slide" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri row  mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">

                            <div class="card cardc rounded ">
                                <img class="card-img-top  w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>

                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card cardc rounded ">
                                <img class="card-img-top w-100" width="295" height="165"
                                    src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                    alt="Card image cap">
                                <div class="card-img-overlay">
                                    <span class=" jss16 m-25-auto ">
                                        <span class="material-icons-round ">
                                            play_arrow
                                        </span>
                                    </span>
                                </div>
                                <div class="m-2">
                                    <p class="card-text  d-flex justify-content-between">
                                        <small class="card-text">23,162 students </small>
                                        <small class="card-text">1h 50m</small>
                                    </p>


                                    <p class="card-text bold"><a href="http://" target="_blank"
                                            rel="noopener noreferrer">Art
                                            Journaling for Self-Care: 3 Exercises for Reflection and Growth</a>
                                    </p>
                                    <p class="card-text d-flex justify-content-between">
                                        <small class="card-text">John Mac-Anthony </small>
                                        <small class="card-text"><span class="material-icons-outlined">
                                                bookmark_border
                                            </span></small>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev " href="#carousel-example6" role="button" data-slide="prev"><small
                            class=" jss15 bg-white">
                            <span class="material-icons dark  ">
                                chevron_left
                            </span>
                        </small>

                    </a>
                    <a class="carousel-control-next" href="#carousel-example6" role="button" data-slide="next">
                        <i class=" jss15  ">
                            <span class="material-icons dark font-weight-light">
                                chevron_right
                            </span>
                        </i>

                        </button>
                    </a>
                </div>
            </div>
        </div>



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

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/slide.js') }}">
    </script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
    <!-- Initialize the plugin
    -->
    $(".card-img-overlay").mouseover(function
    ()
    {
    $(this).find($(".jss16")).css({
    "display":
    "flex"
    });
    });
    $(".card-img-overlay").mouseout(function
    ()
    {
    $(this).find($(".jss16")).css({
    "display":
    "none"
    });
    });
    $(document).ready(function()
    {
    //
    SideNav
    Button
    Initialization
    //
    $(".button-collapse").sideNav2();
    //
    SideNav
    Scrollbar
    Initialization
    var
    sideNavScrollbar
    =
    document.querySelector('.custom-scrollbar');
    var
    ps
    =
    new
    PerfectScrollbar(sideNavScrollbar);
    });
    $('.navt').mouseover(function()
    {
    $(".dropnav").toggle();
    });
    $('.dropnav').mouseleave(function()
    {
    $(this).toggle();
    });
    $('.nav1').mouseover(function()
    {
    });
    $('.nav1').on('mouseover',
    'a',
    function()
    {
    $('.nav2').removeClass('d-nonel').addClass('d-blockl');
    $(".nav1").addClass('border-right');
    });
    $('.nav2').on('mouseover',
    'a',
    function()
    {
    $('.nav2').addClass('border-right');
    $('.nav3').removeClass('d-nonel').addClass('d-blockl');
    $('.nav1').addClass('d-blockl');
    });











    </script>
</body>

</html>