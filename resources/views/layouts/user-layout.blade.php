<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>nakwalify</title>
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

<div class="loading-overlay"></div>
<div class="loading-overlay-image-container">
    <img src="{{asset('assets/images/loading.svg')}}" class="loading-overlay-img"/>
    <progress class="" value="0" id="progressob"></progress>
</div>
<header class=" mb-5  ">

    <nav class="navbar navbar-expand-lg" style="background-color: #3a9982;">


        @auth
            <a href="{{url('/category')}}" class="navbar-brand"
               style="font-family:'Kaushan_Script'; font-weight: bolder;  font-size :35px!important; color:#fff !important;">nakwalify</a>
        @else
            <a href="{{url('/')}}" class="navbar-brand"
               style="font-family:'Kaushan_Script'; font-weight: bolder;  font-size :35px!important; color:#fff !important;">nakwalify</a>
        @endauth

        <button class="navbar-toggler toggle_menu" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="material-icons-outlined bg-transparent">menu</i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">

                @auth
                <li class="dropdown ml-4">
                <select class="selectpicker" data-live-search="true">
  <option data-tokens="ketchup mustard">Development</option>
  <option data-tokens="mustard">Education</option>
  <option data-tokens="frosting">Agriculture</option>
</select>
</li>
                    <li class="dropdown ml-4">
                        <a href="create_new_course.html#" class="opts_account text-white" title="Account">
                            Naqualify Business
                        </a>
                        <div class=" dropdown-content text-center">
                            <p class="font-weight-bold m-2">Get your team access to over 6,000 top Udemy
                                courses,
                                anytime,
                                anywhere.</p>
                            <div class="m-2">
                                <button class="btn btn-block bg-black text-white ">Try Naqualify
                                    Business
                                </button>

                            </div>
                        </div>
                    </li>
                    <li class="dropdown ml-4">
                        <a href="" class="opts_account text-white" title="Account">
                            My Learning
                        </a>
                        <div class=" dropdown-content">
                            <div class="d-flex flex-nowrap m-2">
                                <div class="card-image ">
                                    <img src="{{asset('assets/images/instructor_12.jpg')}}" alt="" class="">
                                </div>
                                <div class="w-100">
                                    <div class=" m-1">

                                        <div class="title font-weight-bolder">Complete Python Developer in
                                            2021:Zero
                                            to
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
                    <li class="dropdown ml-4">
                        <a href="" class="opts_account" title="Account">
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

                                        <div class="title font-weight-bolder">Complete Python Developer in
                                            2021:Zero
                                            to
                                            Mastery
                                        </div>
                                        <a href="#" class="title font-weight-bolder " style="color: blue;">start
                                            Learning
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="m-2 border-top">
                                <a href="{{url('/coursepurches')}}"
                                   class="btn btn-outline-dark btn-block text-dark font-weight-bolder ">Add to
                                    cart</a>

                            </div>

                            <div class="m-2 border-top">
                                <a href="{{url('/myaccount')}}"
                                   class="btn btn-block bg-black text-white font-weight-bolder ">Go to
                                    Wishlist</a>

                            </div>
                        </div>
                    </li>
                    <li class="dropdown ml-4">
                        <a href="" class=" text-white " id="dropdownMenuButton" title="Notifications"><i
                                class='fa fa-bell text-white' style="margin-top: 22px; color:#fff;"></i><span
                                class="noti_count"></span></a>
                        <div class="dropdown-content overflow-auto" aria-labelledby="dropdownMenuButton">
                            <a href="" class="channel_my item dropdown-item">
                                <div class="profile_link">
                                    <img src="./assets/images/left-imgs/img-1.jpg" alt="">
                                    <div class="pd_content p-0 m-0">
                                        <p class="p-0 m-0 font-weight-bold">Rock William</p>
                                        <p class="p-0 m-0">Like Your Comment On Video <strong>How to create
                                                sidebar
                                                menu</strong>.</p>
                                        <span class="nm_time">2 min ago</span>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="channel_my item dropdown-item">
                                <div class=" profile_link">
                                    <img src="./assets/images/left-imgs/img-2.jpg" alt="">
                                    <div class="pd_content">
                                        <p class="p-0 m-0 font-weight-bold">Jassica Smith</p>
                                        <p class="p-0 m-0">Added New Review In Video <strong>Full Stack PHP
                                                Developer</strong>.
                                        </p>
                                        <span class="nm_time">12 min ago</span>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="channel_my item dropdown-item">
                                <div class="profile_link">
                                    <img src="./assets/images/left-imgs/img-9.jpg" alt="">
                                    <div class="pd_content p-0 m-0">
                                        <p> Your Membership Approved <strong>Upload Video</strong>.</p>
                                        <span class="nm_time">20 min ago</span>
                                    </div>
                                </div>
                            </a>
                            <a class="vbm_btn" href="">View All <i
                                    class='uil uil-arrow-right dropdown-item"'></i></a>
                        </div>
                    </li>
                    <li class=" dropdown">
                        <a href="" class="opts_account" title="Account">
                            <img src="./assets/images/hd_dp.jpg" alt="">
                        </a>
                        <div class=" dropdown-content">
                            <div class="channel_my">
                                <div class="profile_link">
                                    <img src="./assets/images/hd_dp.jpg" alt="">
                                    <div class="pd_content">
                                        <div class="rhte85">
                                            <h6>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</h6>
                                            <div class="mef78" title="Verify">
                                                <i class='uil uil-check-circle'></i>
                                            </div>
                                        </div>
                                        @if(Auth::user()->role_id=='2')
                                            <div class="hacker-medals m-3 d-flex">
                                                <div class="hacker-medal "><img
                                                        src="https://hrcdn.net/community-frontend/assets/badges/gold_small-39fafc44b8.svg"
                                                        height="25">24
                                                </div>
                                                <div class="hacker-medal"><img
                                                        src="https://hrcdn.net/community-frontend/assets/badges/silver_small-642ca0f0a7.svg"
                                                        height="25">0
                                                </div>
                                                <div class="hacker-medal"><img
                                                        src="https://hrcdn.net/community-frontend/assets/badges/bronze_small-4e1f12bf64.svg"
                                                        height="25">2
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>

                            </div>
                            <div class="night_mode_switch__btn">
                                <a href="" id="night-mode" class="btn-night-mode">
                                    <i class="uil uil-moon"></i> Night mode
                                    <span class="btn-night-mode-switch">
                                        <span class="uk-switch-button"></span>
                                    </span>
                                </a>
                            </div>
                            @if(Auth::user()->role_id=='2')

                                <div class="border-bottom mb-2">
                                    <a href="{{url('/myaccount')}}" class="item channel_item">My Learning</a>
                                    <a href="{{url('/coursepurches')}}" class="item channel_item">My cart</a>
                                    <a href="{{url('/myaccount')}}" class="item channel_item">Wishlist</a>
                                    <a href="membership.html" class="item channel_item"></a>
                                </div>
                            @endif
                            <div class="">
                                <a href="{{url('/accsetting')}}" class="item channel_item">Setting</a>
                                <a href="{{route('logout')}}" class="item channel_item">Sign Out</a>
                                <a href="" class="item channel_item">Language English
                                    <i class="fa fa-globe "></i></a>
                            </div>

                        </div>
                    </li>
                @endauth
                @guest
                    <li class="ml-3">
                        <button data-toggle="modal" data-target="#signin" class="opts_account text-white"
                                title="Account">
                            Login
                        </button>

                    </li>
                    <li class="ml-3">
                        <button data-toggle="modal" data-target="#register" class="opts_account text-white"
                                title="Account">
                            Register
                        </button>

                    </li>
                @endguest
            </ul>
        </div>


    </nav>
</header>

<div class="">
    <nav class="vertical_nav mt-5   ">
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
                            <span class="menu--label">Analytics</span>
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
<div class="loading-overlay"></div>

<div class="wrapper  p-0">
    <main class="" style="">
        @yield('content')
    </main>
    <div class="modal fade  " id="register" tabindex="-1" role="dialog">
        <div class="modal-dialog custome-dialog" role="document" style="
	max-width: 81%!mportant;">
            <div class="modal-content bg-transparent border-none">

                <div class="row">
                    <div class="col-6">
                        <div class="h-580 bg-darkpale "></div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <div class=" bg-light ">
                                <div class="modal-header border-bottom-0 p-1">
                                    <P>Select the type of account</P>
                                    <a href="//" class="float- btn-outline-dark p-2 " data-dismiss="modal"
                                       aria-label="Close">
                                        <span class="align-self-center" aria-hidden="true">&times;</span>
                                    </a>
                                </div>
                                <div class="form-horizontal">

                                    <div class="w-100">
                                        <!-- <div class="col-10  m-auto tabs-container">
                                            <div class=" d-flex mb-3">

                                                <button class="col-6 btn btn-primary active" id="tab1" data-toggle="tab"
                                                    href="#tab-1"> Trainee Account</button>
                                                <button class="col-6 btn btn-default" id="tab2" data-toggle="tab"
                                                    href="#tab-2"> Business Account</button>

                                            </div>

                                        </div> -->

                                        <div class="tab-content">
                                            <div id="tab-1" class="@tabpane2">
                                                <div class="panel-body">
                                                    <div class="form-horizontal col-10  m-auto">
                                                        <a href="{{ url('/redirectgoogle') }}"
                                                           class="col-12 btn btn-outline-dark">
                                                            <i class="fab fa-google float-left"></i> <span
                                                                class="text-left">
                                                            Continue With
                                                            Google</a>

                                                        <a class="col-12 btn btn-outline-dark">
                                                            <i class="fab fa-facebook float-left"></i>
                                                            <span class="text-left">Continue With
                                                            Facebook</span> </a>
                                                        <a class="col-12 btn btn-outline-dark">
                                                            <i class="fab fa-twitter float-left"></i> <span
                                                                class="text-left">Continue With
                                                            Twitter </span></a>
                                                        <div class="d-flex custome-hrc   text-center w-90">
                                                            <hr class="w-auto">
                                                            <p class="w-auto text-nowrap">or</p>
                                                            <hr class=" w-auto">
                                                        </div>
                                                        <!-- Validation Errors -->
                                                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                                                        <form method="POST" action="{{ route('register') }}">
                                                            @csrf

                                                            <div class=" form-group mb-1">
                                                                <div class="d-flex  justify-content-between">
                                                                    <div style="width: 48%;"><input type="text"
                                                                                                    name="fname"
                                                                                                    value="{{ old('fname') }}"
                                                                                                    required
                                                                                                    autocomplete="name"
                                                                                                    autofocus
                                                                                                    id="FirstName"
                                                                                                    class="form-control"
                                                                                                    placeholder="First Name">
                                                                        @error('fname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                        @enderror
                                                                    </div>
                                                                    <div style="width: 48%;"><input type="text"
                                                                                                    name="lname"
                                                                                                    value="{{ old('lname') }}"
                                                                                                    required
                                                                                                    autocomplete="name"
                                                                                                    autofocus
                                                                                                    id="lastName"
                                                                                                    class="form-control"
                                                                                                    placeholder="Last Name">
                                                                        @error('lname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=" mb-1 form-group">
                                                                <input type="email" name="email" id="email"
                                                                       value="{{ old('email') }}" required
                                                                       autocomplete="email"
                                                                       class=" form-control"
                                                                       placeholder="Email Address">
                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                                @enderror
                                                            </div>


                                                            <div class=" form-group mb-1">
                                                                <div class="d-flex justify-content-between">
                                                                    <input type="text" name="Ccode" id="Ccode"
                                                                           class="form-control" style="width: 28%;"
                                                                           value="+255">
                                                                    <div>
                                                                        <input type="text" name="phonenumber"
                                                                               id="phonenumber" class="form-control"
                                                                               value="{{ old('phonenumber') }}" required
                                                                               autocomplete="phonenumber"
                                                                               style="width: 68%;">
                                                                        @error('phonenumber') <span
                                                                            class="invalid-feedback"
                                                                            role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                        @enderror
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class=" form-group">
                                                                <input type="password" name="password" id="password"
                                                                       required autocomplete="new-password"
                                                                       class=" form-control" placeholder="Password">
                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                                @enderror
                                                            </div>
                                                            <div class=" mb-1">
                                                                <input type="password" id="cpassword"
                                                                       class=" form-control"
                                                                       name="password_confirmation" required
                                                                       autocomplete="new-password"
                                                                       placeholder="Confirm Password">
                                                            </div>
                                                            <div class=" form-group m-2">
                                                                <div class="text-center m-auto ">
                                                                    <button data-dismiss="modal"
                                                                            class="form-control m-auto w-80 btn-primary">
                                                                        {{ __('Register') }}</button>

                                                                    <p>Already a Member
                                                                        <button data-toggle="modal"
                                                                                data-target="#signin"
                                                                                class=" btn btn-default "
                                                                                style="margin-top: -4px;">Sign
                                                                            In
                                                                        </button>
                                                                    </p>


                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                            <div id="tab-2" class="@tabpane">
                                                <div class="panel-body">

                                                    <div class="form-horizontal">

                                                        <GuardianCreate/>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade  " id="signin" tabindex="-1" role="dialog">
        <div class="modal-dialog custome-dialog" role="document">
            <div class="modal-content bg-transparent border-none">


                <div class="row">
                    <div class="col-6">
                        <div class="h-580 bg-darkpale "></div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <div class=" bg-light ">
                                <div class="modal-header d-flex justify-content-end border-bottom-0 p-1">

                                    <a href="//" class="float-right btn-outline-dark p-2 " data-dismiss="modal"
                                       aria-label="Close">
                                        <span class="align-self-center" aria-hidden="true">&times;</span>
                                    </a>
                                </div>
                                <div class="form-horizontal">

                                    <div class="w-100">

                                        <div class="tab-content">
                                            <div id="tab-1" class="@tabpane2">
                                                <div class="panel-body">
                                                    <div class="form-horizontal col-10  m-auto">
                                                        <a href="{{ url('/redirectgoogle') }}"
                                                           class="col-12 btn btn-outline-dark">
                                                            <i class="fab fa-google float-left"></i> <span
                                                                class="text-left">
                                                            Continue With
                                                            Google</a>

                                                        <a class="col-12 btn btn-outline-dark">
                                                            <i class="fab fa-facebook float-left"></i>
                                                            <span class="text-left">Continue With
                                                            Facebook</span> </a>
                                                        <a class="col-12 btn btn-outline-dark">
                                                            <i class="fab fa-twitter float-left"></i> <span
                                                                class="text-left">Continue With
                                                            Twitter </span></a>
                                                        <div class="d-flex custome-hrc   text-center w-90">
                                                            <hr class=" w-40">
                                                            <p class="w-20">or</p>
                                                            <hr class=" w-40">
                                                        </div>
                                                        <!-- Validation Errors -->
                                                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                                                        <form method="POST" action="{{ route('login') }}">
                                                        @csrf

                                                        <!-- Email Address -->
                                                            <div>
                                                                <x-label for="email" :value="__('Email')"/>

                                                                <x-input id="email" class="block mt-1 w-full"
                                                                         type="email"
                                                                         name="email" :value="old('email')" required
                                                                         autofocus/>
                                                            </div>

                                                            <!-- Password -->
                                                            <div class="mt-4">
                                                                <x-label for="password" :value="__('Password')"/>

                                                                <x-input id="password" class="block mt-1 w-full"
                                                                         type="password" name="password" required
                                                                         autocomplete="current-password"/>
                                                            </div>

                                                            <!-- Remember Me -->
                                                            <div class="block mt-4">
                                                                <label for="remember_me"
                                                                       class="inline-flex items-center">
                                                                    <input id="remember_me" type="checkbox"
                                                                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                                           name="remember">
                                                                    <span
                                                                        class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                                </label>
                                                            </div>

                                                            <div class="flex items-center justify-end mt-4">
                                                                @if (Route::has('password.request'))
                                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                                       href="{{ route('password.request') }}">
                                                                        {{ __('Forgot your password?') }}
                                                                    </a>
                                                                @endif

                                                                <x-button class="ml-3" data-dismiss="modal">
                                                                    {{ __('Log in') }}
                                                                </x-button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="tab-2" class="@tabpane">
                                                <div class="panel-body">

                                                    <div class="form-horizontal">

                                                        <GuardianCreate/>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <p class="nav-link m-0"><strong>Company</strong></p>
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="#">Careers</a>
                        <a class="nav-link" href="#">Partinerships</a>
                        <a class="nav-link" href="#">Social Media</a>
                    </div>
                    <div class="col-3 p-1 ">
                        <p class="nav-link m-0"><strong>Community</strong></p>
                        <a class="nav-link" href="#">Free Classes</a>
                        <a class="nav-link" href="#">Business</a>
                        <a class="nav-link" href="#">packages</a>
                        <a class="nav-link" href="#">Feature</a>
                    </div>
                    <div class="col-3 p-1 ">
                        <p class="nav-link m-0"><strong>Contact</strong></p>
                        <a class="nav-link" href="#">Resource</a>
                        <a class="nav-link" href="#">Recource</a>
                        <a class="nav-link" href="#">Resource</a>
                    </div>

                    <div class="col-3 p-1 ">
                        <p class="nav-link m-0"><strong>More</strong></p>
                        <a class="nav-link" href="#">Help</a>
                        <a class="nav-link" href="#">Privacy</a>
                        <a class="nav-link" href="#">Terms</a>
                    </div>


                </div>
            </div>
        </div>
        <br>
        <br>
    </footer>


    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

    <script>
        var objprogress = document.getElementById("progressob");
        var ia = 1;

        function addans(e) {
            var html =
                '<div class="form-group d-flex justify-content-between wrans">' +
                '<input class="form-control mr-2 form-rounded  " type="text"' +
                'placeholder="Answer" id="  + id +  " name="answer[' + ia + ']"' +
                'value="">' +
                '<div class="form-check">' +
                '<input type="checkbox" name="correct[' + ia + ']"  class="form-check-input"' +
                'id="exampleCheck' + ia + '">' +
                '<label class="form-check-label" for="exampleCheck' + ia + '">' +
                '<i class="fas fa-check"></i></label>' +
                '</div></div>';

            $(html).appendTo("#wrans");
            ia++;
        };


        $("#wra").on("click", ".removeq", function () {
            $(this).closest('.wraqa').remove();

        });

        $('.linka').on('click', 'a', function () {

            $(this).addClass('active')
                .siblings().removeClass('active');
            var url = location.pathname
            location.href = url + this.getAttribute('href');
            $(this.getAttribute('href')).addClass('active').addClass('show')
                .siblings().removeClass('active').removeClass('show');
        });
    </script>
    <script>
        $('.nastay').on('click', 'a', function () {

            $(this).addClass('active').addClass('noHover')
                .siblings().removeClass('active').removeClass('noHover');
            var url = location.pathname
            location.href = url + this.getAttribute('href');
            $(this.getAttribute('href')).addClass('active').addClass('show')
                .siblings().removeClass('active').removeClass('show');
        });
        $(".filt").click(function () {
            $("#chkfilter").toggle();
        });

        //vitm
        $('.v-itm').on('click', 'li', function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
        //browse

        $('.navt').mouseover(function () {
            $(".dropnav").toggle();
        });
        $('.dropnav').mouseleave(function () {
            $(this).toggle();
        });
        $('.nav1').mouseover(function () {
        });
        $('.nav1').on('mouseover',
            'a',
            function () {
                $('.nav2').removeClass('d-nonel').addClass('d-blockl');
                $(".nav1").addClass('border-right');
            });
        $('.nav2').on('mouseover',
            'a',
            function () {
                $('.nav2').addClass('border-right');
                $('.nav3').removeClass('d-nonel').addClass('d-blockl');
                $('.nav1').addClass('d-blockl');
            });
    </script>
    <script>
        $('.nastay').on('click', 'a', function () {
            $(this).addClass('active').addClass('noHover')
                .siblings().removeClass('active').removeClass('noHover');
            location.href = $(this).getAttribute("href");
        });
        $(".filt").click(function () {
            $("#chkfilter").toggle();
        });
    </script>

    <script>
        <!--Initialize the plugin-->
        $(".card-img-overlay").mouseover(function () {
            $(this).find($(".jss16")).css({
                "display":
                    "flex"
            });
        });
        $(".card-img-overlay").mouseout(function () {
            $(this).find($(".jss16")).css({
                "display":
                    "none"
            });
        });
        $('.navt').mouseover(function () {
            $(".dropnav").toggle();
        });
        $('.dropnav').mouseleave(function () {
            $(this).toggle();
        });
        $('.nav1').mouseover(function () {
        });
        $('.nav1').on('mouseover',
            'a',
            function () {
                $('.nav2').removeClass('d-nonel').addClass('d-blockl');
                $(".nav1").addClass('border-right');
            });
        $('.nav2').on('mouseover',
            'a',
            function () {
                $('.nav2').addClass('border-right');
                $('.nav3').removeClass('d-nonel').addClass('d-blockl');
                $('.nav1').addClass('d-blockl');
            }
        );
    </script>
    <script>

        var form = document.getElementById("vidform");


        function ajaxed2() {

            var file_data = $('#pdf-btn').prop('files')[0];
            var form_data = new FormData();
            form_data.append('pdfs', file_data);
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                type: 'POST',
                url: "{{ route('addpdfsajax') }}",
                data: form_data,
                cache: false,
                "_token": token,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $('.loading-overlay-image-container').show();
                    $('.loading-overlay').show();
                },
                complete: function () {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();
                },
                success: (data) => {
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        };


        function ajaxed3() {

            var questiontype = document.getElementById("questiontype");
            var answer = document.getElementsByName('answer[]');

            var form_data = new FormData();

            form_data.append('question', $('input[name=question]').val());
            form_data.append('questiontype', questiontype.value);

            var answer = $('input[name*=answer]');
            for (var i = 0; i < answer.length; i++) {
                form_data.append(answer[i].name, answer[i].value);
            }

            var answertype = $('input:checkbox[name*=correct]');

            for (var i = 0; i < answertype.length; i++) {
                if (answertype[i].checked) {

                    form_data.append(answertype[i].name, answertype[i].value);
                }
            }


            form_data.append('video_id', $('input[name=video_id]').val());

            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('savquestion') }}",
                data: form_data,
                processData: false,
                contentType: false,
                success: function (data) {
                    if ((data.errors)) {
                        alert(data.errors);
                    } else {
                        var wraqass = document.getElementById("wrans");
                        var ans1 = document.getElementsByName('answer[0]');
                        var qstn = document.getElementsByName('question');
                        made4(data.question);
                        while (wraqass.firstChild) {
                            wraqass.removeChild(wraqass.lastChild);
                        }
                        qstn.value = "";
                        ans1.value = "";

                    }
                },
                xhr: function () {
                    var xhr = new XMLHttpRequest();
                    //Upload progress

                    xhr.upload.addEventListener("progress", function (evt) {
                        if (evt.lengthComputable) {

                            //Do something with upload progress
                            objprogress.max = evt.total;
                            objprogress.value = evt.loaded;
                        }
                    }, false);

                    return xhr;
                },
                beforeSend: function (xhr) {
                    $('.loading-overlay-image-container').show();
                    $('.loading-overlay').show();
                },
                complete: function (data) {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();
                },


                error: function (data) {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();

                }


            });
        };

        function viditemclicked(url) {


            var video = document.getElementById('vidcanva');
            video.setAttribute('src', url);

            var vidtab = document.getElementById("vidtab");
            vidtab.classList.remove("dnot");
            var descr = document.getElementById("descr");
            descr.classList.remove("dnot");
        };


        function coverimagepreview(url) {

            var pic = document.getElementById('view__imgi');
            var label = document.getElementById('labelpic');

            label.textContent = url.value;
            if (url.files && url.files[0]) {
                var ImageDir = new FileReader();
                ImageDir.onload = function (e) {
                    $('#viewimgi').attr('src', e.target.result);
                    $('#viewimgi').css('height', 'auto');
                    label.textContent = url.value;
                }
                ImageDir.readAsDataURL(url.files[0]);
            }
        };

        function covervidpreview(url) {

            var video = document.getElementById('covercanva');
            var source = document.createElement('source');
            var label = document.getElementById('labelvid');
            source.setAttribute('src', URL.createObjectURL(url.files[0], url.files[0].name));
            label.textContent = url.value;
            while (video.firstChild) {
                video.removeChild(video.lastChild);
            }
            video.append(source);
            video.load();
            video.play();


        };


        function openpdf(url) {
            const pdfviewer = document.getElementById('pspdfkit');
            pdfviewer.data = url;
            $('#myModal').modal('show');
        };

        function destvid(name) {
            fileChosen.textContent = "";
            $("#" + name.slice(0, 4) + "").remove();
            var id = name;
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                url: "destroyvid/" + id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                beforeSend: function () {
                    $('.loading-overlay-image-container').show();
                    $('.loading-overlay').show();
                },
                complete: function () {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();
                },
                success: function () {
                    console.log("it Works");
                }

            });

        };

        function destvid2(name) {
            fileChosen.textContent = "";
            $("#" + name.slice(0, 4) + "").remove();
            var id = name;
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                url: "destroyvid/" + id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function () {
                    console.log("it Works");
                }

            });

        };
    </script>

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
