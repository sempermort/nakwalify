@extends('layouts.user-layout')

@section('content')
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="fe fe-grid"></i> Instructor Dashboard</h2>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card_dash">
                    <div class="card_dash_left">
                        <h5>Total Sales</h5>
                        <h2>$350</h2>
                        <span class="crdbg_1">New $50</span>
                    </div>
                    <div class="card_dash_right">
                        <img src="images/dashboard/achievement.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card_dash">
                    <div class="card_dash_left">
                        <h5>Total Enroll</h5>
                        <h2>1500</h2>
                        <span class="crdbg_2">New 125</span>
                    </div>
                    <div class="card_dash_right">
                        <img src="images/dashboard/graduation-cap.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card_dash">
                    <div class="card_dash_left">
                        <h5>Total Courses</h5>
                        <h2>130</h2>
                        <span class="crdbg_3">New 5</span>
                    </div>
                    <div class="card_dash_right">
                        <img src="images/dashboard/online-course.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card_dash">
                    <div class="card_dash_left">
                        <h5>Total Students</h5>
                        <h2>2650</h2>
                        <span class="crdbg_4">New 245</span>
                    </div>
                    <div class="card_dash_right">
                        <img src="images/dashboard/knowledge.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card_dash1">
                    <div class="card_dash_left1">
                        <i class="uil uil-book-alt"></i>
                        <h1>Jump Into Course Creation</h1>
                    </div>
                    <div class="card_dash_right1">
                        <a class="btn btn-info btn-pill" href="{{route('addcourse')}}">Create Your
                            Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="mt-5">
                <div class="d-flex justify-content-between mt-5">
                    <h3>Popular Classes
                    </h3>
                    <a class="btn btn-default border border-dark ">View All</a>
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
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
                                <p class="card-text d-flex justify-content-between">
                                    <small class="card-text">John Mac-Anthony </small>
                                    <small class="card-text"><span class="material-icons-outlined">
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
                                src="{{asset('assets/images/about/company-3.jpg')}}" alt="Card image cap">
                            <div class="m-2">
                                <p class="card-text  d-flex justify-content-between">
                                    <small class="card-text">23,162 students </small>
                                    <small class="card-text">1h 50m</small>
                                </p>


                                <p class="card-text bold"><a href="http://" target="_blank"
                                        rel="noopener noreferrer">Art
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
                                <p class="card-text d-flex justify-content-between">
                                    <small class="card-text">John Mac-Anthony </small>
                                    <small class="card-text"><span class="material-icons-outlined">
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
                                src="{{asset('assets/images/about/company-2.jpg')}}" alt="Card image cap">
                            <div class="m-2">
                                <p class="card-text m-2 d-flex justify-content-between">
                                    <small class="card-text">23,162 students </small>
                                    <small class="card-text">1h 50m</small>
                                </p>


                                <p class="card-text bold"><a href="http://" target="_blank"
                                        rel="noopener noreferrer">Art
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
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
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
                                <p class="card-text d-flex justify-content-between">
                                    <small class="card-text">John Mac-Anthony </small>
                                    <small class="card-text"><span class="material-icons-outlined">
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
                                src="{{asset('assets/images/about/company-3.jpg')}}" alt="Card image cap">
                            <div class="m-2">
                                <p class="card-text  d-flex justify-content-between">
                                    <small class="card-text">23,162 students </small>
                                    <small class="card-text">1h 50m</small>
                                </p>


                                <p class="card-text bold"><a href="http://" target="_blank"
                                        rel="noopener noreferrer">Art
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
                                <p class="card-text d-flex justify-content-between">
                                    <small class="card-text">John Mac-Anthony </small>
                                    <small class="card-text"><span class="material-icons-outlined">
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
                                src="{{asset('assets/images/about/company-2.jpg')}}" alt="Card image cap">
                            <div class="m-2">
                                <p class="card-text  d-flex justify-content-between">
                                    <small class="card-text">23,162 students </small>
                                    <small class="card-text">1h 50m</small>
                                </p>


                                <p class="card-text bold"><a href="http://" target="_blank"
                                        rel="noopener noreferrer">Art
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
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
        <div>
            <div class="mt-5">
                <div class="d-flex justify-content-between mt-5">
                    <h3>Trending Classes
                    </h3>
                    <a class="btn btn-default border border-dark ">View All</a>
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
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
                                <p class="card-text d-flex justify-content-between">
                                    <small class="card-text">John Mac-Anthony </small>
                                    <small class="card-text"><span class="material-icons-outlined">
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
                                src="{{asset('assets/images/about/company-3.jpg')}}" alt="Card image cap">
                            <div class="m-2">
                                <p class="card-text  d-flex justify-content-between">
                                    <small class="card-text">23,162 students </small>
                                    <small class="card-text">1h 50m</small>
                                </p>


                                <p class="card-text bold"><a href="http://" target="_blank"
                                        rel="noopener noreferrer">Art
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
                                <p class="card-text d-flex justify-content-between">
                                    <small class="card-text">John Mac-Anthony </small>
                                    <small class="card-text"><span class="material-icons-outlined">
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
                                src="{{asset('assets/images/about/company-2.jpg')}}" alt="Card image cap">
                            <div class="m-2">
                                <p class="card-text  d-flex justify-content-between">
                                    <small class="card-text">23,162 students </small>
                                    <small class="card-text">1h 50m</small>
                                </p>


                                <p class="card-text bold"><a href="http://" target="_blank"
                                        rel="noopener noreferrer">Art
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
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
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card cardc rounded ">
                            <img class="card-img-top w-100" width="295" height="165"
                                src="{{asset('assets/images/photos/anders-jilden-307322-500.jpg')}}"
                                alt="Card image cap">
                            <div class="m-2">
                                <p class="card-text m-2 d-flex justify-content-between">
                                    <small class="card-text">23,162 students </small>
                                    <small class="card-text">1h 50m</small>
                                </p>


                                <p class="card-text bold"><a href="http://" target="_blank"
                                        rel="noopener noreferrer">Art
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
                                <p class="card-text d-flex justify-content-between">
                                    <small class="card-text">John Mac-Anthony </small>
                                    <small class="card-text"><span class="material-icons-outlined">
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
                                src="{{asset('assets/images/about/company-3.jpg')}}" alt="Card image cap">
                            <div class="m-2">
                                <p class="card-text  d-flex justify-content-between">
                                    <small class="card-text">23,162 students </small>
                                    <small class="card-text">1h 50m</small>
                                </p>


                                <p class="card-text bold"><a href="http://" target="_blank"
                                        rel="noopener noreferrer">Art
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
                                <p class="card-text d-flex justify-content-between">
                                    <small class="card-text">John Mac-Anthony </small>
                                    <small class="card-text"><span class="material-icons-outlined">
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
                                src="{{asset('assets/images/about/company-2.jpg')}}" alt="Card image cap">
                            <div class="m-2">
                                <p class="card-text  d-flex justify-content-between">
                                    <small class="card-text">23,162 students </small>
                                    <small class="card-text">1h 50m</small>
                                </p>


                                <p class="card-text bold"><a href="http://" target="_blank"
                                        rel="noopener noreferrer">Art
                                        Journaling for Self-Care: 3 Exercises for Reflection and Growth</a> </p>
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
    </div>
    @endsection