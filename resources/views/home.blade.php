@extends('layouts.stu-layout')

@section('content')
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
    @endsection

