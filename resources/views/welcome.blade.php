@extends('layouts.stu-layout')

@section('content')

<section>
    <div class="h-vid" style="margin-top: -25px; ">
        <video autoplay muted loop class="w-100 h-100 object-cover " id="myVideo">
            <source src="{{asset('assets/vids/cover vid.mp4')}}"  type="video/mp4">
        </video>
        <div class=" regform card col-md-4  col-lg-3 col-sm-6 ">

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
                                            Continue With Google
                                    </a>

                                    <a href="{{ url('/redirectfb') }}" class="col-12 btn btn-outline-dark">
                                        <i class="fab fa-facebook float-left"></i>
                                        <span class="text-left">Continue With
                                            Facebook</span> </a>

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
                                                        placeholder="last Name">
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
                                                <input type="text" name="Ccode" id="Ccode" class="form-control mr-2"
                                                    style="width: 28%;" readonly value="+255">
                                                <input type="text" name="phonenumber" id="phonenumber"
                                                    class="form-control" value="{{ old('phonenumber') }}" required
                                                    autocomplete="phonenumber" style="width: 72%;">
                                                <div>

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
<br>
<section style="position:relative;">
    <div class="">
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

                        <div class="col-md-3 mb-3  mb-4  active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card h-400 cardc rounded ">
                                    <div class="h-250">
                                        @if(isset($cozy->mediaCover->file_path))

                                        @php $src=$cozy->mediaCover->file_path; @endphp
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$src)[1])}}" alt="Card image cap">
                                        @endif


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

                        <div class="col-md-3    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">

                                        @if(isset($cozy->mediaCover->file_path))
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        @endif

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
                        <div class="col-md-3    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">

                                        @if(isset($cozy->mediaCover->file_path))
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        @endif

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
                        <div class="col-md-3    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        @if(isset($cozy->mediaCover->file_path))
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        @endif
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
                        <div class="col-md-3    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        @if(isset($cozy->mediaCover->file_path))
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        @endif
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
                        <div class="col-md-3    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        @if(isset($cozy->mediaCover->file_path))
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        @endif
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
                        <div class="col-md-3    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        @if(isset($cozy->mediaCover->file_path))
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        @endif
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
                        <div class="col-md-3    active">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card cardc rounded ">
                                    <div class="h-250">
                                        @if(isset($cozy->mediaCover->file_path))
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$cozy->mediaCover->file_path)[1])}}"
                                            alt="Card image cap">
                                        @endif
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
        </div>

        <div class="mt-5 ">

            <div id="carouselExampleIndicators" class="carousel h-400 carousel-fade" data-ride="carousel" style="">

                <div class="carousel-inner">
                    <div class="carousel-item active h-400 ">
                        <img src="{{asset('assets/images/2.png')}}" class="img-fluid center " style="" alt="">
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
                        <img src="{{asset('assets/images/2.png')}}" class="img-fluid center " style="" alt="">
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
