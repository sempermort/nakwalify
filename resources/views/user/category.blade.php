@extends('layouts.stu-layout')

@section('content')


<div class="sa4d25 p-5 mt-5">
    <div class="d-flex">
        <div class=" hide-on-med-and-down d-none d-md-block d-lg-block mt-5 col-2">
            <div class=" nastay">
                <a href="#" class="waves-effect waves-light">All Courses</a>
                <p class=" border-bottom  "> CATEGORY</p>
                @foreach($cat as $category)
                <a href="#" class="waves-effect waves-light">{{$category->category_name}} </a>
                @endforeach
            </div>
        </div>
        <div class=" col-md-10">

            <div class="jss11 jss13 jss7 mt-5" role="img" aria-label="Online Animation Classes">
                <div class="jss12 jss14">
                    <div class="p-md-5 text-white text-left">
                        <h3 class="font-weight-bolder  text-left ">Online  Classes</h3>
                        <p class=" font-weight-bold text-white p-2">Find what fascinates you as you explore  these  courses.</p>
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
                    @foreach($subcat as $subcatg)
                    <button class="btn-outline-dark btntrs m-2 p-1 rounded border border-dark">
                        {{$subcatg->subcategory_name}}
                    </button>                  
                    @endforeach
                </div>
            </div>

            <div class="mt-3 border-top d-none d-lg-block d-md-block">
                <div class="d-flex justify-content-end  mt-5">


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

                <div id="carousel-example4" class="carousel slide m-4" data-interval="false"  data-ride="carousel">
                    <div class="carousel-inner" role="listbox">

                        @foreach($coz as $key=>$cozy)
                        @if($key==0)
                        <div class="carousel-item  active">
                        <div class=" d-flex ">  
                        @endif
                        @if($key%4==0&&$key!=0)
                        <div class="carousel-item ">
                        <div class=" d-flex "> 
                        @endif
                        <div class="col-md-3   mb-4 ">
                            <a href="{{route('coursedetail',$cozy->id)}}">
                                <div class="card h-350 cardc rounded ">
                                    <div class="h-220">
                                        @if(isset($cozy->mediaCover->file_path))

                                        @php $src=$cozy->mediaCover->file_path; @endphp
                                        <img class="card-img-top  object-cover h-100 w-100" src="{{route('get-copic',explode('/',$src)[1])}}" alt="Card image cap">
                                        @endif


                                        <div class="card-img-overlay">
                                            <span class=" jss16 m-25-auto ">
                                                <span class="material-icons-round ">
                                                    play_arrow
                                                </span>
                                            </span>

                                        </div>
                                    </div>

                                    <div class="m-2 p-0">
                                        <p class="card-text  d-flex justify-content-between">
                                            <small class="card-text">22 trainees </small>
                                            <small class="card-text"> 50m</small>
                                        </p>


                                        <p class="card-text bold ellipsis">{{$cozy->course_subt}}</p>

                                    </div>

                                </div>
                            </a>


                        </div>

                       @if(($key+1)%4==0)</div></div>
                       @elseif(count($coz)-1==$key)
                       </div></div>
                       @endif 
                        @endforeach
                        <a class="carousel-control-prev " style="margin-left: -24px;" href="#carousel-example4" role="button" data-slide="prev"><small class=" jss15 bg-white">
                                <span class="material-icons dark  ">
                                    chevron_left
                                </span>
                            </small>

                        </a>
                        <a class="carousel-control-next" style="margin-right: -24px;" href="#carousel-example4" role="button" data-slide="next">
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
    </div>

</div>


<br>
<br>@endsection
