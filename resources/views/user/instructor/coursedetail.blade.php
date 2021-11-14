@extends('layouts.stu-layout')

@section('content')

<div class="sa4d25">


        <div class="bg-black">
            <div class="container  " style="padding-top:80px">
                <!-- <div class="nav-wrapper mb-1">
                    <div class="d-flex ">
                        <a href="#!" class="breadcrumb-item">Development</a>
                        <a href="#!" class="breadcrumb-item">Programming languages</a>
                        <a href="#!" class="breadcrumb-item active">Python</a>
                    </div>
                </div> -->
                <div class="row mt-20 ">
                    <div class="col-md-4 col-lg-3 white p-0 vid-coz " id="vid">

                      <div class="">
                                    <a class=" "   href="{{route('viewcourse',$selcoz->id)}}">

                                    <video width="400" height="220"
                                    @if(isset($selcoz->mediaCover->file_path))
                                    @php $src=$selcoz->mediaCover->file_path; @endphp
                                    <img class="card-img-top  object-cover h-100 w-100"
                                    poster="{{route('get-copic',explode('/',$src)[1])}}"
                                    @endif
                                    controls></video>
                                </a>
                    </div>


                        <div class="mt-0 ">
                            <strong class="d-flex justify-content-between text-dark
                            ">
                                <p class=" " id="demo">
                                @if($selcoz->price==0)
                                Free
                               @else
                                Tshs
                               {!!$selcoz->price !!}
                                @endif
                                </p>
                                <p class=" ">
                                @php
                                                            $sum=0;
                                                            foreach($selcoz->Videos as $corse)
                                                            {
                                                                if(preg_match('~[0-9]+~', $corse->video_type)){
                                                              $a=  explode(':',$corse->video_type)[0];
                                                              $b=  explode(':',$corse->video_type)[1];
                                                              $c=(int)$b+((int)$a*60);
                                                              $sum=$sum+$c;

                                                            }
                                                            }
                                                            @endphp
                              {{intdiv($sum,60)}}min:{{$sum%60}} sec
                                </p>
                            </strong>
                            @if($selcoz->price==0)
                            <a class="btn  btn-info text-white  p-2  col-md-12 mt-1 mb-3 "
                                    href="{{route('coursepurches',$selcoz->id)}}">Go to course</a>
                               @else
                                Tshs
                                <a class="btn  btn-info text-white  p-2  col-md-12 mt-1 mb-3 "
                                    href="{{route('coursepurches',$selcoz->id)}}">Go to Purchase</a>
                                @endif


                            <small class="m-0 d-none text-center">
                                <p class="m-0  p-0">30-Day Money-Back Guarantee </p>
                            </small>
                            <p class="m-0 d-none p-0"> <strong class="m-0">This Course includes</strong></p>
                        </div>

                        <ul class="collection ml-5	d-none  border-0">
                            <li class="collection-item border-0 d-flex justify-content-start"> <span
                                    class="material-icons-outlined">
                                    reset_tv
                                </span> <span class="m-1"> 20min  on-demand video</span>
                            </li>
                            <li class="collection-item border-0 d-flex justify-content-start"> <span
                                    class="material-icons-outlined">
                                    insert_drive_file
                                </span> 1 articles</li>
                            <li class="collection-item border-0 d-flex justify-content-start"> <i
                                    class="fa fa-download mr-2"></i> 20
                                downloadable
                                resources
                            </li>
                            <li class="collection-item border-0 d-flex justify-content-start"> <span
                                    class="font-weight-bold mr-2">{}</span>1
                                coding
                                exercise</li>
                            <li class="collection-item border-0 d-flex justify-content-start"> <span
                                    class="material-icons-outlined mr-2">
                                    all_inclusive
                                </span> Full lifetime access
                            </li>
                            <li class="collection-item border-0 d-flex justify-content-start"> <i
                                    class="fa fa-mobile mr-2"></i> Access on
                                mobile
                                and TV
                            </li>
                            <li class="collection-item border-0 d-flex justify-content-start "> <i
                                    class="fa fa-certificate mr-2"></i>
                                Certificate
                                of
                                completion
                            </li>
                        </ul>
                        <div class="border-top  p-0 d-none ">

                            <p class="m-0 p-0 font-weight-bold"> Training 5 or more people?</p>

                            <p class="ml-5 p-0">Get your team access to 6,000+ Naqualify courses anytime, anywhere</p>


                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="cont mb-4">
                            <h4 class=" "><strong>{{$selcoz->course_title}}<strong></h4>
                            <p class="font-weight-bold">{{$selcoz->course_subt}}</p>
                            <div class="  d-flex">
                                <div class="m-1 text-warning">
                                    <span class="">4.7</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <span class="m-1"> (3 ratings)

                                {{count($selcoz->wished->groupBy('user_id'))}} trainees
                                </span>
                            </div>
                            <div class="">
                                <p class="">
                                    <i class="fas fa-certificate mr-2 "></i>Last updated 7/2021
                                    <i class="fa fa-globe ml-3 mr-2"></i> English
                                    <i class="fas fa-closed-captioning ml-3 mr-2"></i> English[auto]
                                </p>
                            </div>

                            <div class="">
                                <button class="btn btn-outline-dark font-weight-bold border border-white black text-white  p-2
                                 " onclick="addwish()">Wish list <span class="material-icons-outlined " style="font-size:16px">
                                        favorite_border
                                    </span></button>
                                <button
                                    class="font-weight-bold border border-white black text-white btn btn-outline-dark p-2">Share
                                    <i class="fas fa-share"></i></button>
                                <button
                                    class="font-weight-bold border border-white black text-white btn btn-outline-dark p-2">Gift
                                    This Course</button>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
</div>
<div class="container mt-0 pl-2">
    <h6 class="font-weight-bold mt-3 mb-3">What you will learn</h6>
    <div class=" border p-0  col-md-8">
    @foreach( $selcoz->mainwlearn as  $arriy)
        @foreach( explode(',', $arriy)  as  $learn)
        <div class=" border-0 ">
            <div class="mr-2 font-weight-normal p-1" style=" background-color: rgba(255, 255, 255, 0.6);">
                <a  class=" "><i class="material-icons">done</i></a>
                {!!$learn!!} </div>
        </div>
        @endforeach
        @endforeach
    </div>
</div>

<div class="container pl-2">
    <div class=" mt-3 mb-3 col-md-8 border p-2">



    <div class="panel-body  p-0">
        <h6 class="font-weight-bolder p-0">Course Description</h4>
            <p class="p-0 ">
                {{$selcoz->course_des}}</p>

    </div>

    <h6 class="font-weight-bolder"> Requirements</h6>
    <ul class="col-md-8 " style="list-style: square">

        @foreach( $selcoz->mainrequire as  $arri)
        @foreach( explode(',', $arri)  as  $value)
        <li class="font-weight-normal p-1">
         {{$value}}</li>
        @endforeach
        @endforeach
    </ul>

</div>
    </div>


</div>



</div>

<script>
window.onscroll = scrollFunction;


function scrollFunction() {
    var element = document.getElementById("vid");

    element.style.transition = "all 4s";

    if (element.classList.contains("vid-coz")) {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            element.style.zIndex = "99999";
            element.style.position = "fixed";
            element.style.top = "0px";

        } else if (document.documentElement.scrollTop >= (document.body.scrollHeight * 0.90)) {
            element.style.zIndex = "";
            element.style.position = "absolute";
            element.style.top = "unset";


        } else {
            element.style.zIndex = "";
            element.style.position = "absolute";
            element.style.top = "unset";
        }

    }
}


function myFunction(x) {
    var element = document.getElementById("vid");
    if (x.matches) { // If media query matches
        element.classList.remove("vid-coz");
        element.style.position = "relative";
    } else {
        element.classList.add("vid-coz");
        element.style.position = "absolute";
    }
}

var x = window.matchMedia("(max-width: 769px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes


function addwish()
{
    var coz_id="{{$selcoz->id}}";
    var user_id="{{isset(auth()->user()->id)?auth()->user()->id:''}}";
    var vel="wish";
    var urlo="{{route('wishlist')}}";

    ajaxedw(coz_id,user_id,urlo,vel);
}
</script>
@endsection
