@extends('layouts.stu-layout')

@section('content')


<div class="sa4d25 p-5">
    <div class="d-flex">
        <div class=" hide-on-med-and-down  col-3">
            <div class=" nastay">
                <a href="#" class="waves-effect waves-light">All Classes</a>
                <p class=" border-bottom  "> CREATE</p>
                <a href="#" class="waves-effect waves-light">Animation </a>
                <a href="#" class="waves-effect waves-light">Creative Writing</a>
                <a href="#" class="waves-effect waves-light">Video & Film</a>
                <a href="#" class="waves-effect waves-light">Fine Art</a>
                <a href="#" class="waves-effect waves-light">Graphic Design</a>
                <a href="#" class="waves-effect waves-light">Illustration</a>
                <a href="#" class="waves-effect waves-light">Music</a>
                <a href="#" class="waves-effect waves-light">Photography</a>
            </div>
        </div>
        <div class=" col-md-9">

            <div class="jss11 jss13 jss7 mt-5" role="img" aria-label="Online Animation Classes">
                <div class="jss12 jss14">
                    <div class="p-5 text-white text-left">
                        <h1 class="font-weight-bolder  text-left ">Online Animation Classes</h1>
                        <p class=" font-weight-bold text-white p-2">Find what fascinates you as you explore
                            these animation classes.</p>
                        <div>
                            <div class="p-2">
                                <button type="button"
                                    class="waves-effect waves-light btn-small font-weight-bolder light-teal"
                                    role="button">
                                    Get Started for Free</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hide-on-med-and-down ">
                <div class="d-flex flex-wrap p-5 font-weight-bold ">

                    <span class="m-3 p-1">RELATED SKILLs</span>
                    <button class="btn-outline-dark btntrs m-2 p-1 rounded border border-dark">2d Animation
                    </button>
                    <button class="btn-outline-dark btntrs m-2 p-1  rounded border border-dark">Adobe Illustrator
                    </button>
                    <button class="btn-outline-dark btntrs m-2 p-1  rounded border border-dark">After Effects
                    </button>
                    <button class="btn-outline-dark btntrs m-2 p-1  rounded border border-dark">Animation </button>
                    <button class="btn-outline-dark btntrs m-2 p-1  rounded border border-dark">Character Animation
                    </button>
                    <button class="btn-outline-dark btntrs m-2 p-1  rounded border border-dark">Creative </button>
                    <button class="btn-outline-dark btntrs m-2 p-1  rounded border border-dark">Video&Film </button>
                    <button class="btn-outline-dark btntrs m-2 p-1  rounded border border-dark">Motion Graphics
                    </button>
                    <button class="btn-outline-dark btntrs m-2 p-1  rounded border border-dark">Video Editing
                    </button>
                    <button class="btn-outline-dark btntrs m-2 p-1  rounded border border-dark">Visual Effects
                    </button>
                </div>
            </div>

            <div class="mt-3 border-top">
                <div class="d-flex justify-content-end mt-5">


                    <p class=""><strong class="col-lg-1 col-md-2 col-sm-1 mr-2 ">SORT BY</strong></p>
                    <select class="browser-default  col-lg-2 col-md-2 col-sm-2 mr-2  p-0 form-control">
                        <option value="" selected>Popular</option>
                        <option value="1">Trending</option>
                    </select>
                    <select class="browser-default col-lg-2 col-md-3 col-sm-2 mr-2 p-0 form-control">
                        <option value="" selected>Last 6 Monthes</option>
                        <option value="1">All Time</option>
                        <option value="1">Last Month</option>
                        <option value="1">Last Week</option>
                    </select>
                    <select class="browser-default col-lg-1 col-md-2 col-sm-2 mr-2 p-0 form-control filt"
                        aria-expanded="false" aria-controls="collapseExample">
                        <option value="" selected>Filters</option>

                    </select>

                </div>
            </div>

            <div class="">
                <div class="" id="chkfilter" style="display:none;">
                    <div class="d-flex justify-content-start mt-5">
                        <div class="form-group">
                            <label for="Classtype" class="font-weight-bold"><strong>Class Type</strong></label>
                            <div class="">

                                <p class="form-check-inline">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Premium</span>
                                    </label>
                                </p>
                                <p class="form-check-inline">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Free</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="form-group ml-5">
                            <label for="Classtype" class="font-weight-bold"><strong>Class Length</strong></label>
                            <div class="">

                                <p class="form-check-inline">
                                    <label>
                                        <input type="checkbox" />
                                        <span>
                                            < 15 min</span>
                                    </label>
                                </p>
                                <p class="form-check-inline">
                                    <label>
                                        <input type="checkbox" />
                                        <span>15 - 30 min</span>
                                    </label>
                                </p>
                                <p class="form-check-inline">
                                    <label>
                                        <input type="checkbox" />
                                        <span> 30 - 60 min</span>
                                    </label>
                                </p>
                                <p class="form-check-inline">
                                    <label>
                                        <input type="checkbox" />
                                        <span>> 60 min</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row mt-5">
                    @foreach($coz as $key=>$cozy)
                
                    <div class="col-md-4">
                        <a href="{{route('coursedetail',$cozy->id)}}">
                        <div class="card cardc rounded ">
                        <div class="h-250">
                                        <img class="card-img-top  object-cover h-100 w-100"
                                            src="{{route('get-copic',explode('/',$copic[$key]->file_path)[1])}}"
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

                </div>

            </div>
        </div>
    </div>

</div>


<br>
<br>@endsection
