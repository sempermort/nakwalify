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
                        <h2>{{count($toll->groupby('user_id'))}}</h2>
                        <span class="crdbg_2">New {{count($toll->groupby('user_id'))}}</span>
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
                        <h2>{{count($cozes)}}</h2>

                    </div>
                    <div class="card_dash_right">
                        <img src="images/dashboard/online-course.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card_dash">
                    <div class="card_dash_left">


                        <h5>Total trainees</h5>
                        <h2>{{count($users)}}</h2>

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
                    @foreach($cozes as $cos)
                    <a href="{{route('coursedetail',$cos->id)}}">
                    <div class="col-md-4 mb-5">
                        <div class="card cardc rounded ">
                            @if(isset($cos->mediaCover->file_path))
                            @php
                            $src=$cos->mediaCover->file_path;

                            @endphp
                            <img class="card-img-top" width="295" height="165" src="{{route('get-copic',explode('/',$src)[1])}}" alt="Card image cap">

                            @endif
                            <div class="m-2">
                                <p class="card-text  d-flex justify-content-between">
                                    <small class="card-text">
                                    @php

                                    $cint=0;
                                    @endphp
                                    @foreach($toll as $tall)
                                    @if($tall->course_id==$cos->course_id)
                                    @php
                                    $cint++;
                                    @endphp
                                    @endif
                                    @endforeach
                                    {{$cint}} trainees
                                    </small>
                                    <small class="card-text">50m</small>
                                </p>


                                <p class="card-text bold"><a href="http://" target="_blank"
                                        rel="noopener noreferrer">{{$cos->course_title}}</a> </p>
                                <p class="card-text d-flex justify-content-between">
                                    <small class="card-text">John Mac-Anthony </small>
                                    <small class="card-text"><span class="material-icons-outlined">
                                            bookmark_border
                                        </span></small>
                                </p>
                            </div>

                        </div>
                    </div>
                    </a>
                    <br>

                    @endforeach

                </div>

            </div>

        </div>
        <div>


        </div>
    </div>
    @endsection
