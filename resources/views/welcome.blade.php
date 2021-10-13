@extends('layouts.stu-layout')

@section('content')

<section>
    <div class="" style="margin-top: -25px; height: 690px;">
        <video autoplay muted loop id="myVideo">
            <source src="{{asset('assets/vids/Nakwalify videos.mp4')}}" type="video/mp4">
        </video>
        <div class=" regform card col-md-4   ">

            <div class="m-2">
                <div class=" text-center">
                    <P class="font-weight-bolder pvw105">Sign up to continue</P>

                </div>
                <div class="w-100">


                    <div class="tab-content">
                        <div id="tab-1" class="@tabpane2">
                            <div class="panel-body">
                                <div class="form-horizontal col-md-12  m-auto">
                                    <a href="{{ url('/redirectgoogle') }}" class="col-12 btn btn-outline-dark">
                                        <i class="fab fa-google float-left"></i> <span class="text-left">
                                            Continue With
                                            Google</a>

                                    <a class="col-12 btn btn-outline-dark">
                                        <i class="fab fa-facebook float-left"></i>
                                        <span class="text-left">Continue With
                                            Facebook</span> </a>
                                    <a class="col-12 btn btn-outline-dark">
                                        <i class="fab fa-twitter float-left"></i> <span class="text-left">Continue
                                            With
                                            Twitter </span></a>
                                    <div class="d-flex    text-center w-90">
                                        <hr class=" col-md-5">
                                        <p class="col-md-2">or</p>
                                        <hr class=" col-md-5">
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class=" form-group mb-1">
                                            <div class="d-flex  justify-content-between">
                                                <div style="width: 48%;"> <input type="text" name="fname"
                                                        value="{{ old('fname') }}" required autocomplete="name"
                                                        autofocus id="FirstName" class="form-control"
                                                        placeholder="First Name">
                                                    @error('fname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div style="width: 48%;"> <input type="text" name="lname"
                                                        value="{{ old('lname') }}" required autocomplete="name"
                                                        autofocus id="lastName" class="form-control"
                                                        placeholder="larst Name">
                                                    @error('lname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mb-1 form-group">
                                            <input type="email" name="email" id="email" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                class=" form-control" placeholder="Email Address">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div class=" form-group mb-1">
                                            <div class="d-flex justify-content-between">
                                                <input type="text" name="Ccode" id="Ccode" class="form-control"
                                                    style="width: 28%;" value="+255">
                                                <div>
                                                    <input type="text" name="phonenumber" id="phonenumber"
                                                        class="form-control" value="{{ old('phonenumber') }}" required
                                                        autocomplete="phonenumber" style="width: 68%;">
                                                    @error('phonenumber') <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                            </div>

                                        </div>

                                        <div class=" form-group">
                                            <input type="password" name="password" id="password" required
                                                autocomplete="new-password" class=" form-control"
                                                placeholder="Password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class=" mb-1">
                                            <input type="password" id="cpassword" class=" form-control"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="Confirm Password">
                                        </div>
                                        <div class=" form-group m-2">
                                            <div class="text-center m-auto ">
                                                <button class="form-control m-auto w-80 btn-primary">
                                                    {{ __('Register') }}</button>

                                                <p>Already a Member <button class=" btn btn-default "
                                                        style="margin-top: -4px;">Sign
                                                        In</button></p>


                                            </div>
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

</section>

<section style="position:relative;">
    <div class="mt-5">
        <h2 class="font-weight-bolder text-center">Discover LifeLong Learning</h2>

        <ul class="nav nav-tabs justify-content-center text-black  font-weight-bold">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#all">All Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#Livestock">Livestock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#Agriculture">Agriculture </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-toggle="tab" href="#Forestry">Forestry</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-toggle="tab" href="#Arts">Arts & Crafts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-toggle="tab" href="#Transportation">Transportation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-toggle="tab" href="#Skills">Life Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-toggle="tab" href="#Business">Business</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="all" class="tab-pane fade show  active">

                <div id="carousel-example4" class="carousel slide m-4" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri  row  mx-auto" role="listbox">

                        @foreach($coz as $key=>$cozy)
                        <div class="col-md-4 mb-3   active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="m-2">
                                        <p class="card-text  d-flex justify-content-between">
                                            <small class="card-text">22 trainees </small>
                                            <small class="card-text"> 50m</small>
                                        </p>


                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                rel="noopener noreferrer">{{$cozy->course_subt}}</a> </p>
                                        <p class="card-text d-flex justify-content-between">

                                            <small class="card-text"><span class="material-icons-outlined">
                                                    bookmark_border
                                                </span></small>
                                        </p>
                                    </div>

                                </div>
                            </a>

                        </div>

                        @endforeach
                        <a class="carousel-control-prev " style="margin-left: -24px;" href="#carousel-example4"
                            role="button" data-slide="prev"><small class=" jss15 bg-white">
                                <span class="material-icons dark  ">
                                    chevron_left
                                </span>
                            </small>

                        </a>
                        <a class="carousel-control-next" style="margin-right: -24px;" href="#carousel-example4"
                            role="button" data-slide="next">
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

            <div id="Livestock" class="tab-pane fade h-350">
                <div id="carousel-example4" class="carousel slide m-4" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri  row  mx-auto" role="listbox">

                        @foreach($coz as $key=>$cozy)

                        <div class="col-md-4    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="m-2">
                                        <p class="card-text  d-flex justify-content-between">
                                            <small class="card-text">23,162 trainees </small>
                                            <small class="card-text">1h 50m</small>
                                        </p>


                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                rel="noopener noreferrer">{{$cozy->course_subt}}</a> </p>
                                        <p class="card-text d-flex justify-content-between">

                                            <small class="card-text"><span class="material-icons-outlined">
                                                    bookmark_border
                                                </span></small>
                                        </p>
                                    </div>

                                </div>
                            </a>

                        </div>

                        @endforeach
                        <a class="carousel-control-prev " style="margin-left: -24px;" href="#carousel-example4"
                            role="button" data-slide="prev"><small class=" jss15 bg-white">
                                <span class="material-icons dark  ">
                                    chevron_left
                                </span>
                            </small>

                        </a>
                        <a class="carousel-control-next" style="margin-right: -24px;" href="#carousel-example4"
                            role="button" data-slide="next">
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
            <div id="Agriculture" class="tab-pane fade h-350">
                <div id="carousel-example4" class="carousel slide m-4" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri  row  mx-auto" role="listbox">

                        @foreach($coz as $key=>$cozy)
                        <div class="col-md-4    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="m-2">
                                        <p class="card-text  d-flex justify-content-between">
                                            <small class="card-text">23,162 trainees </small>
                                            <small class="card-text">1h 50m</small>
                                        </p>


                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                rel="noopener noreferrer">{{$cozy->course_subt}}</a> </p>
                                        <p class="card-text d-flex justify-content-between">

                                            <small class="card-text"><span class="material-icons-outlined">
                                                    bookmark_border
                                                </span></small>
                                        </p>
                                    </div>

                                </div>
                            </a>

                        </div>

                        @endforeach
                        <a class="carousel-control-prev " style="margin-left: -24px;" href="#carousel-example4"
                            role="button" data-slide="prev"><small class=" jss15 bg-white">
                                <span class="material-icons dark  ">
                                    chevron_left
                                </span>
                            </small>

                        </a>
                        <a class="carousel-control-next" style="margin-right: -24px;" href="#carousel-example4"
                            role="button" data-slide="next">
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
            <div id="Forestry" class="tab-pane  fade h-350">
                <div id="carousel-example4" class="carousel slide m-4" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri  row  mx-auto" role="listbox">

                        @foreach($coz as $key=>$cozy)
                        <div class="col-md-4    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="m-2">
                                        <p class="card-text  d-flex justify-content-between">
                                            <small class="card-text">23,162 trainees </small>
                                            <small class="card-text">1h 50m</small>
                                        </p>


                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                rel="noopener noreferrer">{{$cozy->course_subt}}</a> </p>
                                        <p class="card-text d-flex justify-content-between">

                                            <small class="card-text"><span class="material-icons-outlined">
                                                    bookmark_border
                                                </span></small>
                                        </p>
                                    </div>

                                </div>
                            </a>

                        </div>

                        @endforeach
                        <a class="carousel-control-prev " style="margin-left: -24px;" href="#carousel-example4"
                            role="button" data-slide="prev"><small class=" jss15 bg-white">
                                <span class="material-icons dark  ">
                                    chevron_left
                                </span>
                            </small>

                        </a>
                        <a class="carousel-control-next" style="margin-right: -24px;" href="#carousel-example4"
                            role="button" data-slide="next">
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
            <div id="Arts" class="tab-pane fade h-350">
                <div id="carousel-example4" class="carousel slide m-4" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri  row  mx-auto" role="listbox">

                        @foreach($coz as $key=>$cozy)
                        <div class="col-md-4    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="m-2">
                                        <p class="card-text  d-flex justify-content-between">
                                            <small class="card-text">23,162 trainees </small>
                                            <small class="card-text">1h 50m</small>
                                        </p>


                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                rel="noopener noreferrer">{{$cozy->course_subt}}</a> </p>
                                        <p class="card-text d-flex justify-content-between">

                                            <small class="card-text"><span class="material-icons-outlined">
                                                    bookmark_border
                                                </span></small>
                                        </p>
                                    </div>

                                </div>
                            </a>

                        </div>

                        @endforeach
                        <a class="carousel-control-prev " style="margin-left: -24px;" href="#carousel-example4"
                            role="button" data-slide="prev"><small class=" jss15 bg-white">
                                <span class="material-icons dark  ">
                                    chevron_left
                                </span>
                            </small>

                        </a>
                        <a class="carousel-control-next" style="margin-right: -24px;" href="#carousel-example4"
                            role="button" data-slide="next">
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
            <div id="Transportation" class="tab-pane fade h-350">
                <div id="carousel-example4" class="carousel slide m-4" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri  row  mx-auto" role="listbox">

                        @foreach($coz as $key=>$cozy)
                        <div class="col-md-4    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="m-2">
                                        <p class="card-text  d-flex justify-content-between">
                                            <small class="card-text">23,162 trainees </small>
                                            <small class="card-text">1h 50m</small>
                                        </p>


                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                rel="noopener noreferrer">{{$cozy->course_subt}}</a> </p>
                                        <p class="card-text d-flex justify-content-between">

                                            <small class="card-text"><span class="material-icons-outlined">
                                                    bookmark_border
                                                </span></small>
                                        </p>
                                    </div>

                                </div>
                            </a>

                        </div>

                        @endforeach
                        <a class="carousel-control-prev " style="margin-left: -24px;" href="#carousel-example4"
                            role="button" data-slide="prev"><small class=" jss15 bg-white">
                                <span class="material-icons dark  ">
                                    chevron_left
                                </span>
                            </small>

                        </a>
                        <a class="carousel-control-next" style="margin-right: -24px;" href="#carousel-example4"
                            role="button" data-slide="next">
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
            <div id="Skills" class="tab-pane  fade h-350">
                <div id="carousel-example4" class="carousel slide m-4" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri  row  mx-auto" role="listbox">

                        @foreach($coz as $key=>$cozy)
                        <div class="col-md-4    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="m-2">
                                        <p class="card-text  d-flex justify-content-between">
                                            <small class="card-text">23,162 trainees </small>
                                            <small class="card-text">1h 50m</small>
                                        </p>


                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                rel="noopener noreferrer">{{$cozy->course_subt}}</a> </p>
                                        <p class="card-text d-flex justify-content-between">

                                            <small class="card-text"><span class="material-icons-outlined">
                                                    bookmark_border
                                                </span></small>
                                        </p>
                                    </div>

                                </div>
                            </a>

                        </div>

                        @endforeach
                        <a class="carousel-control-prev " style="margin-left: -24px;" href="#carousel-example4"
                            role="button" data-slide="prev"><small class=" jss15 bg-white">
                                <span class="material-icons dark  ">
                                    chevron_left
                                </span>
                            </small>

                        </a>
                        <a class="carousel-control-next" style="margin-right: -24px;" href="#carousel-example4"
                            role="button" data-slide="next">
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
            <div id="Business" class="tab-pane  fade h-350">
                <div id="carousel-example4" class="carousel slide m-4" data-interval="false" ride="false"
                    data-ride="carousel">
                    <div class="carousel-inneri  row  mx-auto" role="listbox">

                        @foreach($coz as $key=>$cozy)
                        <div class="col-md-4    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="m-2">
                                        <p class="card-text  d-flex justify-content-between">
                                            <small class="card-text">23,162 trainees </small>
                                            <small class="card-text">1h 50m</small>
                                        </p>


                                        <p class="card-text bold"><a href="http://" target="_blank"
                                                rel="noopener noreferrer">{{$cozy->course_subt}}</a> </p>
                                        <p class="card-text d-flex justify-content-between">

                                            <small class="card-text"><span class="material-icons-outlined">
                                                    bookmark_border
                                                </span></small>
                                        </p>
                                    </div>

                                </div>
                            </a>

                        </div>

                        @endforeach
                        <a class="carousel-control-prev " style="margin-left: -24px;" href="#carousel-example4"
                            role="button" data-slide="prev"><small class=" jss15 bg-white">
                                <span class="material-icons dark  ">
                                    chevron_left
                                </span>
                            </small>

                        </a>
                        <a class="carousel-control-next" style="margin-right: -24px;" href="#carousel-example4"
                            role="button" data-slide="next">
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


            <div class="mt-5 mb-5">

                <div id="carouselExampleIndicators" class="carousel h-400 carousel-fade" data-ride="carousel" style="">

                    <div class="carousel-inner">
                        <div class="carousel-item active h-400 ">
                            <img src="{{asset('assets/images/2.png')}}"
                                class="img-fluid center " style="" alt="">
                            <div class="invisiblely">
                                <div class="carousel-caption slide-top">
                                    <div class=" itm">
                                        <div class="banner-content">

                                            <div class=""><span>Build Meaningful Self-Care Into
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
                        <div class="carousel-item  h-400 ">
                            <img src="{{asset('assets/images/2.png')}}"
                                class="img-fluid center " style="" alt="">
                            <div class="invisiblely">
                                <div class="carousel-caption slide-top">
                                    <div class=" itm">
                                        <div class="banner-content">

                                            <div class=""><span>Build Meaningful Self-Care Into
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
</section>

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
                                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                                    <form method="POST" action="{{ route('register') }}">
                                                        @csrf

                                                        <div class=" form-group mb-1">
                                                            <div class="d-flex  justify-content-between">
                                                                <div style="width: 48%;"> <input type="text"
                                                                        name="fname" value="{{ old('fname') }}" required
                                                                        autocomplete="name" autofocus id="FirstName"
                                                                        class="form-control" placeholder="First Name">
                                                                    @error('fname')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div style="width: 48%;"> <input type="text"
                                                                        name="lname" value="{{ old('lname') }}" required
                                                                        autocomplete="name" autofocus id="lastName"
                                                                        class="form-control" placeholder="larst Name">
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
                                                                value="{{ old('email') }}" required autocomplete="email"
                                                                class=" form-control" placeholder="Email Address">
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
                                                                        autocomplete="phonenumber" style="width: 68%;">
                                                                    @error('phonenumber') <span class="invalid-feedback"
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
                                                            <input type="password" id="cpassword" class=" form-control"
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
                                                                    <button data-toggle="modal" data-target="#signin"
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
                                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf

                                                        <!-- Email Address -->
                                                        <div>
                                                            <x-label for="email" :value="__('Email')" />

                                                            <x-input id="email" class="block mt-1 w-full" type="email"
                                                                name="email" :value="old('email')" required autofocus />
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
                                                            <label for="remember_me" class="inline-flex items-center">
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
<script>
<!-- Initialize the plugin
-->
$(".card-img-overlay").mouseover(function
()
{
$(this).find($(".jss16")).css({
"display":
"flex"
});
});
$(".card-img-overlay").mouseout(function
()
{
$(this).find($(".jss16")).css({
"display":
"none"
});
});
</script>
@endsection
