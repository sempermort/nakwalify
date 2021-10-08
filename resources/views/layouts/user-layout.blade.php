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

<div class="loading-overlay"></div>
<div class="loading-overlay-image-container">
    <img src="{{asset('assets/images/loading.svg')}}" class="loading-overlay-img"/>
<progress class="" value="0" id="progressob"></progress>
</div>
    <header class=" mb-5  ">

        <nav class="navbar navbar-expand-lg" style="background-color: #3a9982;">

            <a href="{{url('/')}}" class="navbar-brand"
                style="font-family:'Kaushan_Script'; font-weight: bolder;  font-size :35px!important; color:#fff !important;">nakwalify</a>

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
                        <a href="" class="option_links text-white " id="dropdownMenuButton" title="Notifications"><i
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
<div class="loading-overlay-image-container">
    <img src="{{asset('assets/images/loading.svg')}}" class="loading-overlay-img"/>
<progress class="" value="0" id="progressob"></progress>
</div>
    <div class="wrapper  p-0">
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

        </footer>



        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

        <script>
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


        $("#wra").on("click", ".removeq", function() {
            $(this).closest('.wraqa').remove();

        });

        $('.linka').on('click', 'a', function() {

            $(this).addClass('active')
                .siblings().removeClass('active');
            var url = location.pathname
            location.href = url + this.getAttribute('href');
            $(this.getAttribute('href')).addClass('active').addClass('show')
                .siblings().removeClass('active').removeClass('show');
        });
        </script>
        <script>
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
        <!-- Initialize the plugin
        -->
        $(".card-img-overlay").mouseover(function()
        {
        $(this).find($(".jss16")).css({
        "display":
        "flex"
        });
        });
        $(".card-img-overlay").mouseout(function()
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
        $('.nav2').on('mouseover',
        'a',
        function()
        {
        $('.nav2').addClass('border-right');
        $('.nav3').removeClass('d-nonel').addClass('d-blockl');
        $('.nav1').addClass('d-blockl');
        }
        );
        </script>
        <script>
        const actualBtn = document.getElementById('actual-btn');
        const fileChosen = document.getElementById('file-chosen');

        actualBtn.addEventListener('change', function() {
            fileChosen.textContent = this.files[0].name;

        });

        const filepdf = document.getElementById('pdf-btn');

        filepdf.addEventListener('change', function(e) {
            made2(URL.createObjectURL(this.files[0]), this.files[0].name, e);
        });

        const fileppt = document.getElementById('pptxes');

        fileppt.addEventListener('change', function(e) {

            for (let i = 0; i < this.files.length; i++) {
                let pic = this.files[i];

                made3(URL.createObjectURL(pic), pic.name, e);
            }

        });


        var i = 1;

        function made(url, name, id) {
          var  APP_URL = {!! json_encode(url('/')) !!}
            var results = APP_URL+"/get-video/" + url.split("/").pop();
            var resultId = APP_URL+"/addquestion/" + id;
            var btnhtml =
                '<div class="d-flex justify-content-between  w-100" id="' + name.slice(0, 4) + '">' +
                '<div class=" w-90 btn btn-info mb-2 vditem">Video ' + i + ' <a class=""' +
                'onclick="viditemclicked(\'' + results + '\')"><i class="pl-2 fa fa-play"></i></a>' +
                '<a class="ml-3" href="' + resultId + '">Q<i class="pl-2 fa fa-plus "></i></a>' +
                '</div>' +
                '<button type="button" id="byn' + i + '" class="btn btn-default delvid mb-2 w-10"' +
                'onclick="destvid(\'' + name + '\')" >' +
                '<i class="pl-2 fa fa-times "></i></button></div>';
            $("#vidb").append($(btnhtml));

            i++;

        };

        var i2 = 1;

        function made2(url, name, e) {
            var nam1 = name.toString().split(".pdf");
            var nam2 = nam1.toString().replace(/_/gi, ' ');
            var btnhtml2 =
                '<tr class="" id="' + name.slice(0, 4) + '">' +
                '<td>' + nam2 + '</td>' +
                '<td><button type="button" class="btn btn-success m-1"' +
                'onclick="openpdf(\'' + url + '\')">Preview</button>' +
                '<button type="button" id="byn' + i2 + '"class="btn btn-danger ml-1"' + 'onclick="destvid2(\'' + name +
                '\')" >' +
                'Delete<i class="pl-2 fa fa-times "></i></button></td>' +
                '</tr>';
            $("#pdfb").append($(btnhtml2));
            // ajaxed2();
            i2++;
        };
        var i3 = 1;

        function made3(url, name, e) {

            var nam1 = name.toString().split(".")[0];
            var nam2 = nam1.toString().replace(/_/gi, ' ');
            var btnhtml2 =
                '<tr class="" id="' + name.slice(0, 4) + '">' +
                '<td>' + nam2 + '</td>' +
                '<td><button type="button" class="btn btn-success m-1"' +
                'onclick="openpdf(\'' + url + '\')">Preview</button>' +
                '<button type="button" id="byn' + i3 + '"class="btn btn-danger ml-1"' + 'onclick="destvid2(\'' + name +
                '\')" >' +
                'Delete<i class="pl-2 fa fa-times "></i></button></td>' +
                '</tr>';
            $("#ppt").append($(btnhtml2));
            // ajaxed2();
            i2++;
        };
        var form = document.getElementById("vidform");

        function ajaxed() {
            var objprogress = document.getElementById("progressob");
            var pptxes = document.getElementById("pptxes").files;
            var ppts = document.getElementById("pptxes")
            var description = document.getElementById("description");
            var form_data = new FormData();

            form_data.append('course_id', $('input[name=course_id]').val());
            form_data.append('videos', $('#actual-btn').prop('files')[0]);
            form_data.append('description', description.value);
            form_data.append('pdfes', $('#pdf-btn').prop('files')[0]);


            for (let i = 0; i < pptxes.length; i++) {
                form_data.append("pptxes[" + i + "]", pptxes[i]);
            }

            var answer = $('input[name*=answer]');
            for (var i = 0; i < answer.length; i++) {
                form_data.append(answer[i].name, answer[i].value);
            }
console.log(form_data);
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                type: 'POST',
                url: "{{route('addcontentpost') }}",
                data: form_data,
                processData: false,
                contentType: false,
                "_token": token,
                success: function(data) {
                    if ((data.errors)) {
                        alert(data.errors);
                    } else {

                        made(data.video_path, data.video_title, data.id);
                    }
                },
                xhr: function() {
                    var xhr = new XMLHttpRequest();
                    //Upload progress

                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {

                            //Do something with upload progress
                            objprogress.max = evt.total;
                            objprogress.value = evt.loaded;
                        }
                    }, false);

                    return xhr;
                },
                beforeSend: function(xhr) {
                    $('.loading-overlay-image-container').show();
                    $('.loading-overlay').show();
                },
                complete: function(data) {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();
                },




                error: function(data) {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();

                }


            });
        };


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
                beforeSend: function() {
                    $('.loading-overlay-image-container').show();
                    $('.loading-overlay').show();
                },
                complete: function() {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();
                },
                success: (data) => {
                    console.log(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        };


        function ajaxed3() {
            var objprogress = document.getElementById("progressob");
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
                success: function(data) {
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
                xhr: function() {
                    var xhr = new XMLHttpRequest();
                    //Upload progress

                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {

                            //Do something with upload progress
                            objprogress.max = evt.total;
                            objprogress.value = evt.loaded;
                        }
                    }, false);

                    return xhr;
                },
                beforeSend: function(xhr) {
                    $('.loading-overlay-image-container').show();
                    $('.loading-overlay').show();
                },
                complete: function(data) {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();
                },




                error: function(data) {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();

                }


            });
        };

        function viditemclicked(url) {


            var video = document.getElementById('vidcanva');
            var source = document.createElement('source');

            source.setAttribute('src', url);

            while (video.firstChild) {
                video.removeChild(video.lastChild);
            }
            video.append(source);
            video.load();
            video.play();

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
                ImageDir.onload = function(e) {
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
                beforeSend: function() {
                    $('.loading-overlay-image-container').show();
                    $('.loading-overlay').show();
                },
                complete: function() {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();
                },
                success: function() {
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
                success: function() {
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
