<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">


    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
</head>

<body>
    <header class="position-absolute w-100" style="z-index:9;">

        <nav class="navbar navbar-expand-lg fixed-top backg mainavba " id="mainavbar"  style="height:70px; ">

        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons-outlined text-white bg-transparent">menu</i>
            </button>
            @auth
            <a href="{{url('/category')}}" class="navbar-brand text-white"
                style="font-family:'Kaushan_Script'; font-weight: bolder;  font-size :35px!important; ">nakwalify</a>
            @else
            <a href="{{url('/')}}" class="navbar-brand text-white"
                style="font-family:'Kaushan_Script'; font-weight: bolder;  font-size :35px!important; ">nakwalify</a>
            @endauth


            <div class="collapse navbar-collapse " >

            <div class="  ml-5">
                <a class="btn bg-transparent text-white dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Browse
                </a>

                <div class="dropdown-menu  " aria-labelledby="dropdownMenuLink" style="margin-left:223px;top: unset;">
                        <div class="row">

                            <div class=" nastay col-4">
                                <div class="m-5 ">
                                    <p class="border-bottom"> CREATE</p>
                                    <a href="#" class="waves-effect waves-light">Livestock </a>
                                    <a href="#" class="waves-effect waves-light">Agriculture</a>
                                    <a href="#" class="waves-effect waves-light">Arts & Crafts</a>
                                    <a href="#" class="waves-effect waves-light">Transportation</a>
                                    <a href="#" class="waves-effect waves-light">Life Skills</a>
                                    <a href="#" class="waves-effect waves-light">Graphics</a>
                                    <a href="#" class="waves-effect waves-light">Software Development</a>
                                    <a href="#" class="waves-effect waves-light">Foresty</a>
                                </div>
                            </div>
                            <div class=" nastay col-4 border-right">
                                <div class="m-5">
                                <div class="mb-3">
                                <p class=" border-bottom  "> BUILD</p>
                                <a href="#" class="waves-effect waves-light">Business Analytics </a>
                                <a href="#" class="waves-effect waves-light">Freelance &Enterpreneurship</a>
                                <a href="#" class="waves-effect waves-light">Leadership & Management</a>
                                <a href="#" class="waves-effect waves-light">Marketing</a>
                                </div>

                                <div class="mt-2">
                                <p class=" border-bottom  "> THRIVE</p>
                                <a href="#" class="waves-effect waves-light">Lifestyle</a>
                                <a href="#" class="waves-effect waves-light">Productivity</a>
                                </div>
                            </div>
                        </div>
                        <div class=" nastay col-4 ">
                            <div class="m-5">
                                <a href="#" class="waves-effect waves-light font-bolder">All Classes </a>
                                <a href="#" class="waves-effect waves-light font-bolder">Workshops</a>
                                <a href="#" class="waves-effect waves-light font-bolder">Student Projects</a>
                                <a href="#" class="waves-effect waves-light font-bolder">Live Sessions</a>
                            </div>
                        </div>
                </div>
            </div>


            </div>
            <form action="{{ route('searchcourse') }}" class="w-53 sfw" method="POST">
            @csrf
                    <div class="d-flex custom-search-form">
                        <input type="text" name="search" autocomplete="off" id="search"class="form-control form-rounded w-100"  placeholder="Search ...." required>
                        <span class="input-group-btn">
                        <button type="submit" class="btn btn-default-sm text-white">
                            <i class="fa fa-search"></i>
                        </button>
                        </span>
                    </div>
                </form>
                <ul class="navbar-nav ml-auto mr-4 cfont">
                    @auth
                    <li class="dropdown ml-4">
                        <a href="create_new_course.html#" class="opts_account text-white" title="Account">
                            Naqualify Business
                        </a>
                        <div class=" dropdown-content text-center">
                            <h4 class="font-weight-bold m-4">Coming Soon</h4>
                            <div class="m-2">
                                <button class="btn btn-block bg-black text-white ">Try Naqualify
                                    Business</button>

                            </div>
                        </div>
                    </li>
                    <li class="dropdown ml-4">
                        <a href="{{url('/myaccount')}}" class="opts_account text-white" title="Account">
                            My Learning
                        </a>
                        <!-- <div class=" dropdown-content">
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
                                        <a href="{{url('/myaccount')}}" class="title font-weight-bolder text-blue"
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

                        </div> -->
                    </li>

                    <li class="dropdown ml-4">
                        <a href="" class="option_links  " id="dropdownMenuButton" title="Notifications"><i
                                class='fa fa-bell' style="margin-top: 22px; color:#fff;"></i><span
                                class="noti_count"></span></a>
                        <div class="dropdown-content overflow-auto" aria-labelledby="dropdownMenuButton">
                            <a href="create_new_course.html#" class="channel_my item dropdown-item">
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
                            <a href="create_new_course.html#" class="channel_my item dropdown-item">
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
                        <a  class="opts_account" title="Account">
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
                                                    height="25">24</div>
                                            <div class="hacker-medal"><img
                                                    src="https://hrcdn.net/community-frontend/assets/badges/silver_small-642ca0f0a7.svg"
                                                    height="25">0</div>
                                            <div class="hacker-medal"><img
                                                    src="https://hrcdn.net/community-frontend/assets/badges/bronze_small-4e1f12bf64.svg"
                                                    height="25">2</div>
                                        </div>
                                        @endif
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
                            @if(Auth::user()->role_id=='1')

                            <div class="border-bottom mb-2">
                                <a href="{{url('/instructordashboard')}}" class="item btn btn-info channel_item">Admin</a>

                            </div>
                            @endif
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
                                <a href="instructor_dashboard.html" class="item channel_item">Language English
                                    <i class="fa fa-globe "></i></a>
                            </div>

                        </div>
                    </li>
                    @endauth

                </ul>
            </div>
            <ul class="navbar-nav ml-auto  mr-4 cfont">
            @guest
                    <li class="ml-3 d-block   d-md-none ">
                        <a  href="{{route('login')}}" class="btn border t-white"
                            title="Account">
                            Login
</a>

                    </li>
                    <li class="ml-3 d-none d-md-block d-lg-block">
                        <button data-toggle="modal" data-target="#signin" class="btn border t-white"
                            title="Account">
                            Login
                        </button>

                    </li>
                    <li class="ml-3 collapse navbar-collapse">
                        <button data-toggle="modal" data-target="#register" class="btn border t-white"
                            title="Account">
                            Register
                        </button>

                    </li>
                    @endguest
</ul>
        </nav>
    <div class="collapse fixed-top w-100" id="navbarSupportedContent" style="top:70px; ">
    <nav class="navbar navbar-expand-sm bg-light justify-content-center">

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link pri" href="{{url('/')}}">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pri" href="{{route('category')}}">BROWSE</a>
    </li>
    @auth
    <li class="nav-item">
      <a href="{{url('/myaccount')}}" class="nav-link pri" >My Learning</a>
    </li>
    <li class="nav-item">
      <a  href="{{url('/accsetting')}}" class="nav-link pri" >Profile</a>
    </li>
    @endauth
    <li class="nav-item">
      <a class="nav-link pri" >Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link pri" >About Us</a>
    </li>
  </ul>

</nav>
 </div>
    </header>



    <div class="">
        <main >
            @yield('content')
        </main>
        <div class="modal fade  " id="register" tabindex="-1" role="dialog">
            <div class="modal-dialog custome-dialog" role="document" style="
	max-width: 81%!important;">
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
                                                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                                            <form method="POST" action="{{ route('register') }}">
                                                                @csrf

                                                                <div class=" form-group mb-1">
                                                                    <div class="d-flex  justify-content-between">
                                                                        <div style="width: 48%;"> <input type="text"
                                                                                name="fname" value="{{ old('fname') }}"
                                                                                required autocomplete="name" autofocus
                                                                                id="FirstName" class="form-control"
                                                                                placeholder="First Name">
                                                                            @error('fname')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                        </div>
                                                                        <div style="width: 48%;"> <input type="text"
                                                                                name="lname" value="{{ old('lname') }}"
                                                                                required autocomplete="name" autofocus
                                                                                id="lastName" class="form-control"
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
                                                                    <input type="email" name="email"
                                                                        value="{{ old('email') }}" required
                                                                        autocomplete="email" class=" form-control"
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
                                                                                value="{{ old('phonenumber') }}"
                                                                                required autocomplete="phonenumber"
                                                                                style="width: 68%;">
                                                                            @error('phonenumber') <span
                                                                                class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <div class=" form-group">
                                                                    <input type="password" name="password"
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
                                                                        <button
                                                                            class="form-control m-auto w-80 btn-primary">
                                                                            {{ __('Register') }}</button>

                                                                        <p>Already a Member
                                                                            <button data-toggle="modal"
                                                                                data-target="#signin"
                                                                                class=" btn btn-default "
                                                                                style="margin-top: -4px;">Sign
                                                                                In</button>
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

                                                            <GuardianCreate />

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

                                                            <a href="{{ url('/redirectfacebook') }}"class="col-12 btn btn-outline-dark">
                                                                <i class="fab fa-facebook float-left"></i>
                                                                <span class="text-left">Continue With
                                                                    Facebook</span> </a>

                                                            <div class="d-flex custome-hrc   text-center w-90">
                                                                <hr class=" w-40">
                                                                <p class="w-20">or</p>
                                                                <hr class=" w-40">
                                                            </div>
                                                            <!-- Validation Errors -->
                                                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                                            <form method="POST" action="{{ route('login') }}">
                                                                @csrf

                                                                <!-- Email Address -->
                                                                <div>
                                                                    <x-label for="email" :value="__('Email')" />

                                                                    <x-input  class="block mt-1 w-full"
                                                                        type="email" name="email" :value="old('email')"
                                                                        required autofocus />
                                                                </div>

                                                                <!-- Password -->
                                                                <div class="mt-4">
                                                                    <x-label for="password" :value="__('Password')" />

                                                                    <x-input id="password" class="block mt-1 w-full"
                                                                        type="password" name="password" required
                                                                        autocomplete="current-password" />
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

                                                                    <x-button class="ml-3" >
                                                                        {{ __('Log in') }}
                                                                    </x-button>
                                                                    <p>Dont have Account
                                                                            <button data-toggle="modal"
                                                                                data-target="#register"
                                                                                class=" btn btn-default "
                                                                                style="margin-top: -4px;">Register
                                                                                </button>
                                                                        </p>
                                                                </div>
                                                            </form>
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
        <footer class=" bg-darknavy " style="bottom:0;">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center text-white">
                            <p class=" text-white" style="font-weight: 400;font-size: 14px;color:#dfdfdf; letter-spacing: 3px;">Copyright © <a href="http://www.futurebasics.co.tz">Future Basics</a>| All right
                                reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- <footer class="bg-greenpale  pt-5 pb-5  w-100" style="background: #3a9982;">
            <div class=" d-flex flex-row-reverse text-center kfooter">

                <div class="col-md-9">
                    <div class="row ">
                        <div class="col-md-3 p-1 ">
                            <p class="nav-link m-0"><strong>Company</p></strong>
                            <a class="nav-link" href="#">About</a>
                            <a class="nav-link" href="#">Careers</a>
                            <a class="nav-link" href="#">Partinerships</a>
                            <a class="nav-link" href="#">Social Media</a>
                        </div>
                        <div class="col-md-3 p-1 ">
                            <p class="nav-link m-0"><strong>Community</p></strong>
                            <a class="nav-link" href="#">Free Classes</a>
                            <a class="nav-link" href="#">Business</a>
                            <a class="nav-link" href="#">packages</a>
                            <a class="nav-link" href="#">Feature</a>
                        </div>
                        <div class="col-md-3 p-1 ">
                            <p class="nav-link m-0"><strong>Contact</p></strong>
                            <a class="nav-link" href="#">Resource</a>
                            <a class="nav-link" href="#">Recource</a>
                            <a class="nav-link" href="#">Resource</a>
                        </div>

                        <div class="col-md-3 p-1 ">
                            <p class="nav-link m-0"><strong>More</p></strong>
                            <a class="nav-link" href="#">Help</a>
                            <a class="nav-link" href="#">Privacy</a>
                            <a class="nav-link" href="#">Terms</a>
                        </div>


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="coy pl-2 ml-3">
                        <h4><a class="text-dark text-nowrap" href="#">Future Basics</a></h4>
                        <p>Copyright &copy; 2021 &middot; All Rights Reserved &middot; </p>
                    </div>
                </div>
            </div>

        </footer> -->




        <script>
        //   window.onscroll = scrollFunction;

function scrollFunction() {

var elementnav = document.getElementById("mainavbar");
   elementnav.style.transition = "all 2s";
   if (body.scrollTop < 50 ) {

      elementnav.classList.add("bg-dark");
      elementnav.classList.add("navbar-light");
   } else {
      elementnav.classList.remove("bg-dark");
      elementnav.classList.remove("navbar-light");

   }

}
</script>



        <script src="{{ asset('assets/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/night-mode.js') }}"></script>

        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
        <script src="{{ asset('js/multislider.js') }}">
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<script>

        $(".filt").click(function() {
            $("#chkfilter").toggle();
        });

        //vitm
        $('.v-itm').on('click', 'li', function() {
            $(this).addClass('active').siblings().removeClass('active');
        });
        //browse

        $('.navt').mouseover(function() {
            $(".dropnav").toggle();
        });
        $('.dropnav').mouseleave(function() {
            $(this).toggle();
        });
        $('.nav1').mouseover(function() {});
        $('.nav1').on('mouseover',
            'a',
            function() {
                $('.nav2').removeClass('d-nonel').addClass('d-blockl');
                $(".nav1").addClass('border-right');
            });
        $('.nav2').on('mouseover',
            'a',
            function() {
                $('.nav2').addClass('border-right');
                $('.nav3').removeClass('d-nonel').addClass('d-blockl');
                $('.nav1').addClass('d-blockl');
            });
        </script>
        <script>
        $('.nastay').on('click', 'a', function() {

            $(this).addClass('active').addClass('noHover')
                .siblings().removeClass('active').removeClass('noHover');
            var r = $(this).attr("href");
            $(r).addClass('show').addClass('active').siblings().removeClass('show').removeClass('active');
        });

        function opent(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


        $(".filt").click(function() {
            $("#chkfilter").toggle();
        });
        </script>

        <script>

        $(".card-img-overlay").mouseover(function()       {
        $(this).find($(".jss16")).css({"display":"flex"});
        });
        $(".card-img-overlay").mouseout(function ()
        {
        $(this).find($(".jss16")).css({"display":"none"
        });
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
        $('.nav2').on('mouseover','a',  function()
        {
        $('.nav2').addClass('border-right');
        $('.nav3').removeClass('d-nonel').addClass('d-blockl');
        $('.nav1').addClass('d-blockl');
        });



        var route = "{{ url('autocomplete-search') }}";

        $('#search').typeahead({
            source: function (query, process) {

                return $.get(route, { term: query }, function (data) {

                    return process(data);
                });
            }
        });


        $('#exampleSlider').multislider({
    interval:0,

});
function ajaxedw(coz_id,user_id,urlo,vel,vid_id)
 {
    var form_data = new FormData();
    form_data.append('user_id',user_id );
    form_data.append('course_id',coz_id);
    if(vid_id>0){form_data.append('video_id',vid_id);}
    form_data.append('vel',vel);
    $.ajax({
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: urlo,
        data: form_data,
        processData: false,
        contentType: false,
        success: function (data) {
            if ((data.errors)) {
                alert(data.errors);
            } else {
            alert("wished");

            }
        },
        error: function (data) {
            $('.loading-overlay-image-container').hide();
            $('.loading-overlay').hide();

        },
    });
};
    </script>
</body>



</html>
