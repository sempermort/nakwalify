@extends('layouts.user-layout')

@section('content')
<div class="bg-black">


    <div class=" pb-1 pt-5 pl-5 ">
        <h1 class="text-white font-weight-bolder">My Learning</h1>
    </div>


    <div class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_tabs">
                        <nav>
                            <div class="nav nav-tabs tab_crse" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab"
                                    href="#nav-about" role="tab" aria-selected="true">All Courses</a>
                                <a class="nav-item nav-link" id="nav-purchased-tab" data-toggle="tab"
                                    href="#nav-purchased" role="tab" aria-selected="false">Purchased</a>
                                <a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews"
                                    role="tab" aria-selected="false">WishList</a>
                                <a class="nav-item nav-link" id="nav-subscriptions-tab" data-toggle="tab"
                                    href="#nav-subscriptions" role="tab" aria-selected="false">Archived</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="course_tab_content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                            <div class="_htg451">
                                <div class="_htg452">

                                    <div class="mt-5">
                                        <div class="row justify-content-between  mt-5">

                                            <h3>All My Courses</h3>
                                            <div class="input-group col-md-3 ">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Search Course"
                                                        aria-label="Search My Courses" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button"><i
                                                                class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-4">
                                                <div class="card cardc rounded ">
                                                    <img class="card-img-top w-100" width="295" height="165"
                                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                                        alt="Card image cap">
                                                    <div class="m-2">
                                                        <p class="card-text  d-flex justify-content-between">
                                                            <small class="card-text">23,162 students </small>
                                                            <small class="card-text">1h 50m</small>
                                                        </p>


                                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                                rel="noopener noreferrer">Art
                                                                Journaling for Self-Care: 3 Exercises for Reflection and
                                                                Growth</a> </p>
                                                        <p class="card-text d-flex justify-content-between">
                                                            <small class="card-text">John Mac-Anthony </small>
                                                            <small class="card-text"><span
                                                                    class="material-icons-outlined">
                                                                    bookmark_border
                                                                </span></small>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-4">
                                                <div class="card cardc rounded mb-3">
                                                    <img class="card-img-top" width="295" height="165"
                                                        src="{{asset('assets/images/about/company-3.jpg')}}"
                                                        alt="Card image cap">
                                                    <div class="m-2">
                                                        <p class="card-text  d-flex justify-content-between">
                                                            <small class="card-text">23,162 students </small>
                                                            <small class="card-text">1h 50m</small>
                                                        </p>


                                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                                rel="noopener noreferrer">Art
                                                                Journaling for Self-Care: 3 Exercises for Reflection and
                                                                Growth</a> </p>
                                                        <p class="card-text d-flex justify-content-between">
                                                            <small class="card-text">John Mac-Anthony </small>
                                                            <small class="card-text"><span
                                                                    class="material-icons-outlined">
                                                                    bookmark_border
                                                                </span></small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-4">
                                                <div class="card cardc rounded mb-3">
                                                    <img class="card-img-top" width="295" height="165"
                                                        src="{{asset('assets/images/about/company-2.jpg')}}"
                                                        alt="Card image cap">
                                                    <div class="m-2">
                                                        <p class="card-text m-2 d-flex justify-content-between">
                                                            <small class="card-text">23,162 students </small>
                                                            <small class="card-text">1h 50m</small>
                                                        </p>


                                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                                rel="noopener noreferrer">Art
                                                                Journaling for Self-Care: 3 Exercises for Reflection and
                                                                Growth</a> </p>
                                                        <p class="card-text d-flex justify-content-between">
                                                            <small class="card-text">John Mac-Anthony </small>
                                                            <small class="card-text"><span
                                                                    class="material-icons-outlined">
                                                                    bookmark_border
                                                                </span></small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-4">
                                                <div class="card cardc rounded ">
                                                    <img class="card-img-top w-100" width="295" height="165"
                                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                                        alt="Card image cap">
                                                    <div class="m-2">
                                                        <p class="card-text  d-flex justify-content-between">
                                                            <small class="card-text">23,162 students </small>
                                                            <small class="card-text">1h 50m</small>
                                                        </p>


                                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                                rel="noopener noreferrer">Art
                                                                Journaling for Self-Care: 3 Exercises for Reflection and
                                                                Growth</a> </p>
                                                        <p class="card-text d-flex justify-content-between">
                                                            <small class="card-text">John Mac-Anthony </small>
                                                            <small class="card-text"><span
                                                                    class="material-icons-outlined">
                                                                    bookmark_border
                                                                </span></small>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-4">
                                                <div class="card cardc rounded mb-3">
                                                    <img class="card-img-top" width="295" height="165"
                                                        src="{{asset('assets/images/about/company-3.jpg')}}"
                                                        alt="Card image cap">
                                                    <div class="m-2">
                                                        <p class="card-text  d-flex justify-content-between">
                                                            <small class="card-text">23,162 students </small>
                                                            <small class="card-text">1h 50m</small>
                                                        </p>


                                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                                rel="noopener noreferrer">Art
                                                                Journaling for Self-Care: 3 Exercises for Reflection and
                                                                Growth</a> </p>
                                                        <p class="card-text d-flex justify-content-between">
                                                            <small class="card-text">John Mac-Anthony </small>
                                                            <small class="card-text"><span
                                                                    class="material-icons-outlined">
                                                                    bookmark_border
                                                                </span></small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-4">
                                                <div class="card cardc rounded mb-3">
                                                    <img class="card-img-top" width="295" height="165"
                                                        src="{{asset('assets/images/about/company-2.jpg')}}"
                                                        alt="Card image cap">
                                                    <div class="m-2">
                                                        <p class="card-text  d-flex justify-content-between">
                                                            <small class="card-text">23,162 students </small>
                                                            <small class="card-text">1h 50m</small>
                                                        </p>


                                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                                rel="noopener noreferrer">Art
                                                                Journaling for Self-Care: 3 Exercises for Reflection and
                                                                Growth</a> </p>
                                                        <p class="card-text d-flex justify-content-between">
                                                            <small class="card-text">John Mac-Anthony </small>
                                                            <small class="card-text"><span
                                                                    class="material-icons-outlined">
                                                                    bookmark_border
                                                                </span></small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="nav-purchased" role="tabpanel">
                            <div class="_htg451">
                                <div class="_htg452">
                                    <div class="row justify-content-between">
                                        <h3>Purchased Courses</h3>
                                        <div class="input-group col-md-3 float-right ">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Search My Courses"
                                                    aria-label="Search Course" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button"><i
                                                            class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="fcrse_1 mt-20">
                                                <a href="course_detail_view.html" class="hf_img">
                                                    <img src="{{asset('assets/images/course_5.jpg')}}" alt="">
                                                    <div class="course-overlay">
                                                        <div class="badge_seller">Bestseller</div>
                                                        <div class="crse_reviews">
                                                            <i class="uil uil-star"></i>4.5
                                                        </div>
                                                        <span class="play_btn1"><span class="material-icons-round ">
                                                                play_arrow
                                                            </span></i></span>
                                                        <div class="crse_timer">
                                                            25 hours
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="hs_content">
                                                    <div class="eps_dots eps_dots10 more_dropdown">
                                                        <a href="my_student_profile_view.html#"><i
                                                                class="uil uil-ellipsis-v"></i></a>
                                                        <div class="dropdown-content">
                                                            <span><i class="uil uil-download-alt"></i>Download</span>
                                                            <span><i class="uil uil-trash-alt"></i>Delete</span>
                                                        </div>
                                                    </div>
                                                    <div class="vdtodt">
                                                        <span class="vdt14">109k views</span>
                                                        <span class="vdt14">15 days ago</span>
                                                    </div>
                                                    <a href="course_detail_view.html" class="crse14s title900">Complete
                                                        Python Bootcamp: Go from zero to hero in Python 3</a>
                                                    <a href="my_student_profile_view.html#" class="crse-cate">Web
                                                        Development | Python</a>

                                                </div>
                                            </div>
                                            <div class="fcrse_1 mt-30">
                                                <a href="course_detail_view.html" class="hf_img">
                                                    <img src="{{asset('assets/images/course_7.jpg')}}" alt="">
                                                    <div class="course-overlay">
                                                        <div class="badge_seller">Bestseller</div>
                                                        <div class="crse_reviews">
                                                            <i class="uil uil-star"></i>4.5
                                                        </div>
                                                        <span class="play_btn1"><span class="material-icons-round ">
                                                                play_arrow
                                                            </span></span>
                                                        <div class="crse_timer">
                                                            28 hours
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="hs_content">
                                                    <div class="eps_dots eps_dots10 more_dropdown">
                                                        <a href="my_student_profile_view.html#"><i
                                                                class="uil uil-ellipsis-v"></i></a>
                                                        <div class="dropdown-content">
                                                            <span><i class="uil uil-download-alt"></i>Download</span>
                                                            <span><i class="uil uil-trash-alt"></i>Delete</span>
                                                        </div>
                                                    </div>
                                                    <div class="vdtodt">
                                                        <span class="vdt14">5M views</span>
                                                        <span class="vdt14">15 days ago</span>
                                                    </div>
                                                    <a href="course_detail_view.html" class="crse14s title900">The
                                                        Complete JavaScript Course 2020: Build Real Projects!</a>
                                                    <a href="my_student_profile_view.html#"
                                                        class="crse-cate">Development | JavaScript</a>

                                                </div>
                                            </div>
                                            <div class="fcrse_1 mt-30">
                                                <a href="course_detail_view.html" class="hf_img">
                                                    <img src="{{asset('assets/images/course_9.jpg')}}" alt="">
                                                    <div class="course-overlay">
                                                        <div class="badge_seller">Bestseller</div>
                                                        <div class="crse_reviews">
                                                            <i class="uil uil-star"></i>4.5
                                                        </div>
                                                        <span class="play_btn1"><span class="material-icons-round ">
                                                                play_arrow
                                                            </span></span>
                                                        <div class="crse_timer">
                                                            12 hours
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="hs_content">
                                                    <div class="eps_dots eps_dots10 more_dropdown">
                                                        <a href="my_student_profile_view.html#"><i
                                                                class="uil uil-ellipsis-v"></i></a>
                                                        <div class="dropdown-content">
                                                            <span><i class="uil uil-download-alt"></i>Download</span>
                                                            <span><i class="uil uil-trash-alt"></i>Delete</span>
                                                        </div>
                                                    </div>
                                                    <div class="vdtodt">
                                                        <span class="vdt14">1M views</span>
                                                        <span class="vdt14">18 days ago</span>
                                                    </div>
                                                    <a href="course_detail_view.html" class="crse14s title900">Beginning
                                                        C++ Programming - From Beginner to Beyond</a>
                                                    <a href="my_student_profile_view.html#"
                                                        class="crse-cate">Development | C++</a>

                                                </div>
                                            </div>
                                            <div class="fcrse_1 mt-30">
                                                <a href="course_detail_view.html" class="hf_img">
                                                    <img src="{{asset('assets/images/course_10.jpg')}}" alt="">
                                                    <div class="course-overlay">
                                                        <div class="badge_seller">Bestseller</div>
                                                        <div class="crse_reviews">
                                                            <i class="uil uil-star"></i>5.0
                                                        </div>
                                                        <span class="play_btn1"><span class="material-icons-round ">
                                                                play_arrow
                                                            </span></span>
                                                        <div class="crse_timer">
                                                            1 hours
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="hs_content">
                                                    <div class="eps_dots eps_dots10 more_dropdown">
                                                        <a href="my_student_profile_view.html#"><i
                                                                class="uil uil-ellipsis-v"></i></a>
                                                        <div class="dropdown-content">
                                                            <span><i class="uil uil-download-alt"></i>Download</span>
                                                            <span><i class="uil uil-trash-alt"></i>Delete</span>
                                                        </div>
                                                    </div>
                                                    <div class="vdtodt">
                                                        <span class="vdt14">153k views</span>
                                                        <span class="vdt14">3 months ago</span>
                                                    </div>
                                                    <a href="course_detail_view.html" class="crse14s title900">The
                                                        Complete Digital Marketing Course - 12 Courses in 1</a>
                                                    <a href="my_student_profile_view.html#" class="crse-cate">Digital
                                                        Marketing | Marketing</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-reviews" role="tabpanel">
                            <div class="student_reviews">
                                <div class="row justify-content-between">
                                    <h3></h3>
                                    <div class="input-group col-md-3  ">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search  Course"
                                                aria-label="Search  Course" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"><i
                                                        class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row mt-5">
                                            <div class="col-md-4">
                                                <div class="card cardc rounded mb-3">
                                                    <img class="card-img-top" width="295" height="165"
                                                        src="{{asset('assets/images/about/company-2.jpg')}}"
                                                        alt="Card image cap">
                                                    <div class="card-img-overlay">
                                                        <span class=" ">
                                                            <span
                                                                class="material-icons-outlined text-white float-right">
                                                                favorite
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="m-2">

                                                        <p class="m-0 bold"><a href="http://" target="_blank"
                                                                rel="noopener noreferrer">Art
                                                                Journaling for Self-Care: 3 Exercises for Reflection and
                                                                Growth</a> </p>
                                                                <p class="card-text ">
                                                              <small>
                                                              Art
                                                                Journaling for Self-Care: 3 Exercises for Reflection and
                                                                Growth
                                                              </small>
                                                        </p>
                                                        <div class="d-flex  pl-3 pr-3">

                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star half-star"></span>
                                                                <div class="_rate001">4.6</div>
                                                            </div>
                                                            <div class="_rate002">(2,586)</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-end">
                                                            <small class="faint"> <strike>Tshs 45000</strike></small>
                                                            <p class="card-text">
                                                                Tshs 35000</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="nav-subscriptions" role="tabpanel">
                            <div class="student_reviews">
                                <div class="row justify-content-between">
                                    <h3></h3>
                                    <div class="input-group col-md-3  ">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search  Course"
                                                aria-label="Search  Course" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"><i
                                                        class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row mt-5">
                                            <div class="col-md-4">
                                                <div class="card cardc rounded ">
                                                    <img class="card-img-top w-100" width="295" height="165"
                                                        src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                                        alt="Card image cap">
                                                    <div class="m-2">
                                                        <p class="card-text  d-flex justify-content-between">
                                                            <small class="card-text">23,162 students </small>
                                                            <small class="card-text">1h 50m</small>
                                                        </p>


                                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                                rel="noopener noreferrer">Art
                                                                Journaling for Self-Care: 3 Exercises for Reflection and
                                                                Growth</a> </p>
                                                        <p class="card-text d-flex justify-content-between">
                                                            <small class="card-text">John Mac-Anthony </small>
                                                            <small class="card-text"><span
                                                                    class="material-icons-outlined">
                                                                    bookmark_border
                                                                </span></small>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-md-4">
                                                <div class="card cardc rounded mb-3">
                                                    <img class="card-img-top" width="295" height="165"
                                                        src="{{asset('assets/images/about/company-2.jpg')}}"
                                                        alt="Card image cap">
                                                    <div class="m-2">
                                                        <p class="card-text m-2 d-flex justify-content-between">
                                                            <small class="card-text">23,162 students </small>
                                                            <small class="card-text">1h 50m</small>
                                                        </p>


                                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                                rel="noopener noreferrer">Art
                                                                Journaling for Self-Care: 3 Exercises for Reflection and
                                                                Growth</a> </p>
                                                        <p class="card-text d-flex justify-content-between">
                                                            <small class="card-text">John Mac-Anthony </small>
                                                            <small class="card-text"><span
                                                                    class="material-icons-outlined">
                                                                    bookmark_border
                                                                </span></small>
                                                        </p>
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
</div>

@endsection
