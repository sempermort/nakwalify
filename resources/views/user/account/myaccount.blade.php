@extends('layouts.stu-layout')

@section('content')
<section>
<div class="bg-black p-5">
    <div class=" pb-1  mt-5 mb-2 ml-5 ">
        <h1 class="text-white font-weight-bolder">My Learning</h1>
    </div>
    <div class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_tabs ml-5">
                        <nav>
                            <div class="nav nav-tabs tab_crse" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-selected="true">All Courses</a>
                                <a class="nav-item nav-link" id="nav-purchased-tab" data-toggle="tab" href="#nav-purchased" role="tab" aria-selected="false">Purchased</a>
                                <a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="false">WishList</a>
                                <a class="nav-item nav-link" id="nav-subscriptions-tab" data-toggle="tab" href="#nav-subscriptions" role="tab" aria-selected="false">Archived</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="" style="width:70%; margin:3rem auto;">

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
            <div class="_htg451">
                <div class="_htg452">
                    <div class="  mb-5">
                        <div class="row justify-content-between  ">

                            <h3>All My Courses</h3>

                        </div>

                        <div class="row mt-3 ">
                            @foreach($wishes as $wish)
                            @if($wish->wishtype=="start")
                            <a href="{{route('coursedetail',$wish->course->id)}}">
                                <div class="col-md-4">
                                    <div class="card cardc rounded mb-3">
                                        @if(isset($wish->course->mediaCover->file_path))
                                        @php
                                        $src=$wish->course->mediaCover->file_path;
                                        $cnt=0;
                                        @endphp
                                        <img class="card-img-top" width="295" height="165" src="{{route('get-copic',explode('/',$src)[1])}}" alt="Card image cap">
                                        @endif
                                        <div class="m-2">
                                            <p class="card-text m-2 d-flex justify-content-between">
                                                <small class="card-text">
                                                    @php

                                                    $cnt=0;
                                                    @endphp
                                                    @foreach($totalall as $tall)
                                                    @if($tall->course_id==$wish->course_id)
                                                    @php
                                                    $cnt++;
                                                    @endphp
                                                    @endif
                                                    @endforeach
                                                    {{$cnt}} trainees </small>
                                                <small class="card-text">1h 50m</small>
                                            </p>


                                            <p class="card-text bold"><a href="http://" target="_blank" rel="noopener noreferrer">
                                                    {{
                                                                    $wish->course->course_title
                                                                }}</a> </p>
                                            <p class="card-text d-flex justify-content-between">

                                                <small class="card-text"><span class="material-icons-outlined">
                                                        bookmark_border
                                                    </span></small>
                                            </p>
                                       </div>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade  " id="nav-purchased" role="tabpanel">

            <div class="_htg452">
                <div class="_htg452">

                    <div class="mb-5">
                            <div class="row justify-content-between">
                                <h3>Purchased Courses</h3>

                            </div>

                            <div class="row">

                                @foreach($wishes as $wish)
                                @if($wish->wishtype=="start")
                                <div class="col-md-12 m-3 p-0">
                                    <a href="{{route('coursedetail',$wish->course->id)}}">
                                        <div class="fcrse_1 ">
                                                <div class="course-overlay rounded" style="z-index:1;">
                                                            <div class="badge_seller">Bestseller</div>
                                                            <div class="crse_reviews">
                                                                <i class="uil uil-star"></i>4.5
                                                            </div>
                                                            <span class="play_btn1">
                                                                <span class="material-icons-round ">
                                                                    play_arrow
                                                                </span></i>
                                                            </span>
                                                            <div class="crse_timer">
                                                                25 hours
                                                            </div>
                                                </div>

                                                <div  class="hf_img">
                                                    @if(isset($wish->course->mediaCover->file_path))
                                                    @php
                                                    $src=$wish->course->mediaCover->file_path;

                                                    @endphp
                                                    <img src="{{route('get-copic',explode('/',$src)[1])}}" alt="">

                                                    @endif
                                                </div>

                                                <div class="hs_content">
                                                    <div class="vdtodt">
                                                        <span class="vdt14">
                                                            @php
                                                            $cnt=0;
                                                            @endphp
                                                            @foreach($totalall as $tall)
                                                            @if($tall->course_id==$wish->course_id)
                                                            @php
                                                            $cnt++;
                                                            @endphp
                                                            @endif
                                                            @endforeach

                                                            {{$cnt}} views</span>
                                                        <span class="vdt14">15 days ago</span>
                                                    </div>
                                                    <h5 class="text-black">{{ $wish->course->course_title }}</h5>

                                                    <p class="crse-cate">{{$wish->course->category->category_name }}
                                                    </p>

                                                </div>

                                        </div>
                                    </a>
                                </div>
                                @endif
                                @endforeach
                            </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-reviews" role="tabpanel">
            <div class="_htg452">
                    <div class="_htg452">
                        <div class="row justify-content-between">
                            <h3>Wish List</h3>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row mt-3">
                                    @foreach($wishes as $wish)

                                        @if($wish->wishtype=="wish")
                                            <div class="col-md-4">
                                                <div class="card cardc rounded mb-3">

                                                    @if(isset($wish->course->mediaCover->file_path))
                                                    @php
                                                    $src=$wish->course->mediaCover->file_path;

                                                    @endphp
                                                    <img class="card-img-top" width="295" height="165" src="{{route('get-copic',explode('/',$src)[1])}}" alt="Card image cap">

                                                    @endif
                                                    <div class="card-img-overlay">
                                                        <span class=" ">
                                                            <span class="material-icons-outlined text-white float-right">
                                                                favorite
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="m-2">

                                                        <p class="m-0 bold"><a href="http://" target="_blank" rel="noopener noreferrer">Art
                                                        {{ $wish->course->course_title }}</a> </p>
                                                        <p class="card-text ">
                                                            <small>
                                                        {{ $wish->course->course_subt }}
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
                                                            <div class="_rate002">
                                                                (
                                                                    @php
                                                                $cnt=0;
                                                                @endphp
                                                                @foreach($totalall as $tall)
                                                                @if($tall->course_id==$wish->course_id)
                                                                @php
                                                                $cnt++;
                                                                @endphp
                                                                @endif
                                                                @endforeach

                                                                {{$cnt}}
                                                                    )
                                                            </div>
                                                        </div>
                                                        <div class=" d-flex justify-content-end">
                                                            <p class="card-text">
                                                            {{$wish->course->price? "Tshs $wish->course->price":"Free"
                                                            }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

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

                </div>

                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</section>
@endsection
