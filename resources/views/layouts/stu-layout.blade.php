<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Poutry Learning</title>
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

    <link href="{{ asset('css/multitemslide.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        </script>
</head>

<body>
    <header class=" ">
        <nav class="navbar navbar-expand-lg" style="background-color: #3a9982;">

            <a href="{{url('/')}}" class="navbar-brand"
                style="font-family:'Kaushan_Script'; font-weight: bolder;  font-size :35px!important; color:#fff !important;">Poutry Learning</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons-outlined bg-transparent">menu</i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                  
                    @auth
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
                                    Business</button>

                            </div>
                        </div>
                    </li>
                    <li class="dropdown ml-4">
                        <a href="create_new_course.html#" class="opts_account text-white" title="Account">
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
                        <a href="" class="option_links  " id="dropdownMenuButton" title="Notifications"><i
                                class='fa fa-bell'></i><span class="noti_count"></span></a>
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
                        <a href="create_new_course.html#" class="opts_account" title="Account">
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
        <main style="margin-top: -60px; ">
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




   

        <script src="{{ asset('assets/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/night-mode.js') }}"></script>

        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
        <script src="{{ asset('js/slides.js') }}">
        </script>


        <script>
        // $(document).ready(function() {
        //     $('.collapsible').collapsible();

        // });

        $('.nastay').on('click', 'a', function() {

            $(this).addClass('active').addClass('noHover')
                .siblings().removeClass('active').removeClass('noHover');
            var url = location.pathname
            location.href = url + this.getAttribute('href');
            $(this.getAttribute('href')).addClass('active').addClass('show')
                .siblings().removeClass('active').removeClass('show');
        });
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
            location.href = $(this).getAttribute("href");
        });
        $(".filt").click(function() {
            $("#chkfilter").toggle();
        });
        </script>

        <script>
        <!-- Initialize the plugin-->
        $(".card-img-overlay").mouseover(function()       {
        $(this).find($(".jss16")).css({"display":"flex"});
        });
        $(".card-img-overlay").mouseout(function ()
        {
        $(this).find($(".jss16")).css({
        "display":
        "none"
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
      
    </script>
</body>



</html>