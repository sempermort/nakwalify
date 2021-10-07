@extends('layouts.stu-layout')

@section('content')

<Main>
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
                                        <div class="col-10  m-auto tabs-container">
                                            <div class=" d-flex mb-3">

                                                <button class="col-6 btn btn-primary active" id="tab1" data-toggle="tab"
                                                    href="#tab-1"> Trainee Account</button>
                                                <button class="col-6 btn btn-default" id="tab2" data-toggle="tab"
                                                    href="#tab-2"> Business Account</button>

                                            </div>

                                        </div>

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
                                                        <form method="POST" action="{{ route('register') }}">
                                                            @csrf

                                                            <div class=" form-group mb-1">
                                                                <div class="d-flex  justify-content-between">
                                                                    <div style="width: 48%;"> <input type="text"
                                                                            name="fname" value="{{ old('fname') }}"
                                                                            required autocomplete="name" autofocus
                                                                            id="FirstName" class="form-control"
                                                                            placeholder="First Name">
                                                                        @error('fname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                    <div style="width: 48%;"> <input type="text"
                                                                            name="lname" value="{{ old('lname') }}"
                                                                            required autocomplete="name" autofocus
                                                                            id="lastName" class="form-control"
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
                                                                    value="{{ old('email') }}" required
                                                                    autocomplete="email" class=" form-control"
                                                                    placeholder="Email Address">
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
                                                                            autocomplete="phonenumber"
                                                                            style="width: 68%;">
                                                                        @error('phonenumber') <span
                                                                            class="invalid-feedback" role="alert">
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
                                                                <input type="password" id="cpassword"
                                                                    class=" form-control" name="password_confirmation"
                                                                    required autocomplete="new-password"
                                                                    placeholder="Confirm Password">
                                                            </div>
                                                            <div class=" form-group m-2">
                                                                <div class="text-center m-auto ">
                                                                    <button data-dismiss="modal"
                                                                        class="form-control m-auto w-80 btn-primary">
                                                                        {{ __('Register') }}</button>

                                                                    <p>Already a Member
                                                                        <button data-toggle="modal"
                                                                            data-target="#signin"
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

                                                                <x-input id="email" class="block mt-1 w-full"
                                                                    type="email" name="email" :value="old('email')"
                                                                    required autofocus />
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
                                                                <label for="remember_me"
                                                                    class="inline-flex items-center">
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
    <section>
        <div class="contan" style="margin-top: -25px;">
            <div class=" regform card m-5 ">
                <div class="p-3 ">
                    <div class="">
                        <div class=" text-center">
                            <P class="font-weight-bolder pvw105">Sign up to continue</P>

                        </div>
                        <div class="w-100">
                            <div class="col-10  m-auto tabs-container">
                                <div class=" d-flex mb-3">

                                    <button class="col-6 btn btn-primary active" id="tab1" data-toggle="tab"
                                        href="#tab-1"> Trainee Account</button>
                                    <button class="col-6 btn-outline-dark " id="tab2" data-toggle="tab" href="#tab-2">
                                        Business Account</button>

                                </div>

                            </div>

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
                                                <i class="fab fa-twitter float-left"></i> <span
                                                    class="text-left">Continue With
                                                    Twitter </span></a>
                                            <div class="d-flex custome-hrc   text-center w-90">
                                                <hr class=" w-40">
                                                <p class="w-20">or</p>
                                                <hr class=" w-40">
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
                                                                class="form-control" value="{{ old('phonenumber') }}"
                                                                required autocomplete="phonenumber" style="width: 68%;">
                                                            @error('phonenumber') <span class="invalid-feedback"
                                                                role="alert">
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
                                                        name="password_confirmation" required
                                                        autocomplete="new-password" placeholder="Confirm Password">
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

    </section>

    <section>
        <div class="mt-5">
            <h1 class="font-weight-bolder text-center">Discover LifeLong Learning</h1>

            <ul class="nav nav-tabs justify-content-center text-black  font-weight-bold">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab-1">All Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-2">Animation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-3">Design </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#tab-4">Illustration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#tab-5">Lifestyle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#tab-6">Photo&Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#tab-7">Agriculture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#tab-8">Business</a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="m-5">
                        <div id="carousel-example4" class="carousel slide m-5" data-interval="false" ride="false"
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

                                            <p class="card-text bold text-center"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-center">
                                                <small class="card-text">John Mac-Anthony </small>

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

                                            <p class="card-text bold text-center"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-center">
                                                <small class="card-text">John Mac-Anthony </small>

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

                                            <p class="card-text bold text-center"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-center">
                                                <small class="card-text">John Mac-Anthony </small>

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

                                            <p class="card-text bold text-center"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-center">
                                                <small class="card-text">John Mac-Anthony </small>

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

                                            <p class="card-text bold text-center"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-center">
                                                <small class="card-text">John Mac-Anthony </small>

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

                                            <p class="card-text bold text-center"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-center">
                                                <small class="card-text">John Mac-Anthony </small>

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

                                            <p class="card-text bold text-center"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-center">
                                                <small class="card-text">John Mac-Anthony </small>

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



                                            <p class="card-text bold text-center"><a href="http://" target="_blank"
                                                    rel="noopener noreferrer">Art
                                                    Journaling for Self-Care: 3 Exercises for Reflection and
                                                    Growth</a>
                                            </p>
                                            <p class="card-text d-flex justify-content-center">
                                                <small class="card-text">John Mac-Anthony </small>

                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev " href="#carousel-example4" role="button"
                                data-slide="prev"><small class=" jss15 bg-white">
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
                </div>
            </div>
            <div class="mt-5 mb-5">

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
            <div class="m-150-20">
                <div class="row mt-5">
                    <div class="col-md-4">
                        <h1 class="font-weight-bolder">What Will You Discover?
                            <hr>
                        </h1>
                        <p class="font-weight-bolder">
                            Explore new skills, deepen existing passions, and get lost in creativity. What you find
                            just might surprise and inspire you.
                        </p>
                        <button class="btn-outline-dark p-2">Browse Classes</button>
                    </div>
                    <div class="col-md-8">
                        <img src="{{asset('assets/images/ezgif.com-gif-maker.jpg')}}" class="rounded  img-fluid"
                            width="1048" height="576" alt="">
                    </div>
                </div>
            </div>
            <div class="m-150-20">
                <div class="row ">
                    <div class="col-md-8">
                        <img src="{{asset('assets/images/ezgif.com-gif-maker2.jpg')}}" class="rounded img-fluid"
                            width="1048" height="576" alt="">
                    </div>
                    <div class="col-md-4">
                        <h1 class="font-weight-bolder">Membership With Meaning
                            <hr>
                        </h1>
                        <p class="font-weight-bolder">
                            With so much to explore, real projects to create, and the support of fellow-creatives,
                            Skillshare’s online learning platform empowers you to learn new skills and accomplish
                            real growth.
                        </p>
                        <button class="btn-outline-dark p-2">Browse Projects</button>
                    </div>
                </div>
            </div>
            <div class="m-150-20">
                <div class="row mt-5">
                    <div class="col-md-4">
                        <h1 class="font-weight-bolder">Online Learning Designed For Real Life
                            <hr>
                        </h1>
                        <p class="font-weight-bolder">
                            Move your creative journey forward without putting life on hold. Skillshare’s short
                            online classes help you find inspiration that fits your routine.
                        </p>
                        <button class="btn-outline-dark p-2">Try Premimum</button>
                    </div>
                    <div class="col-md-8">
                        <img src="{{asset('assets/images/ezgif.com-gif-maker3.jpg')}}" class="rounded img-fluid"
                            width="1048" height="576" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>


</main>
@endsection

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
