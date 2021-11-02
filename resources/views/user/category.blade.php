@extends('layouts.stu-layout')

@section('content')


<div class="sa4d25  mt-20">
    <div class="d-flex">
        <div class=" hide-on-med-and-down d-none d-md-block d-lg-block mt-5 col-2">
            <div class="ml-2">
            <div class=" nastay position-relative">
                <a href="#all" data-toggle="tab" class="waves-effect waves-light active">
                    All Courses
                </a>
                <p class=" border-bottom  "> CATEGORY</p>
                @foreach($cat as $category)
                <a href="#{{$category->category_name}}"  data-toggle="tab" class="waves-effect waves-light">{{$category->category_name}} </a>
                @endforeach
            </div>
            <div class="position-relative border-top  mt-4">
                <div class="d-flex flex-column ">
                    <p class=""><strong class=" ">SORT BY</strong></p>
                    <select class="browser-default    form-control">
                        <option value="" selected>Popular</option>
                        <option value="1">Trending</option>
                    </select>
                    <select class="browser-default   form-control">
                        <option value="" selected>Last 6 Monthes</option>
                        <option value="1">All Time</option>
                        <option value="1">Last Month</option>
                        <option value="1">Last Week</option>
                    </select>
                 

                </div>
            </div> 
            <div class="position-relative mt-4" id="chkfilter" >
                   
                        <div class="form-group ">
                            <label for="Classtype" class="font-weight-bold">
                                <strong>Class Type</strong></label>
                            <div class="">

                                <p class="form-check-inline m-2">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Premium</span>
                                    </label>
                                </p>
                                <p class="form-check-inline m-2">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Free</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="Classtype" class="font-weight-bold">
                                <strong>Class Length</strong></label>
                            <div class="">

                                <p class="form-check-inline m-2">
                                    <label>
                                        <input type="checkbox" />
                                        <span>
                                            < 15 min</span>
                                    </label>
                                </p>
                                <p class="form-check-inline m-2">
                                    <label>
                                        <input type="checkbox" />
                                        <span>15 - 30 min</span>
                                    </label>
                                </p>
                                <p class="form-check-inline m-2">
                                    <label>
                                        <input type="checkbox" />
                                        <span> 30 - 60 min</span>
                                    </label>
                                </p>
                                <p class="form-check-inline m-2">
                                    <label>
                                        <input type="checkbox" />
                                        <span>> 60 min</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                  
                </div>
 
        
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

         

           

            <div class="m-5">
       <div class="headline__main-text">
           <h2>Learn what You care about</h2>
       </div>
                <div class="tab-content">
                        <div id="all" class="tab-pane fade show  active">

                            <div id="exampleSlider" class=" " >
                                <div class="MS-content" >

                                    @foreach($coz as $key=>$cozy)
                                    
                                    <div class=" item  ">
                                        <div class="m-2"> 
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
                                    </div>

                                
                                    @endforeach
                                    
                                    
                                </div>
                                <div class="MS-controls">
                        <button class="MS-left">    
                             <small class=" jss15 bg-white ">
                                    <span class="material-icons dark  ">
                                        chevron_left
                                    </span>
                                </small> </button>
                            <button class="MS-right">
                            <small class=" jss15 bg-white ">
                                    <span class="material-icons dark  ">
                                        chevron_right
                                    </span>
                                </small> </button>
                    </div>

                            </div>
                        </div>
                    @foreach($cat as $cate)
                        <div id="{{$cate->category_name}}" class="tab-pane fade ">
                            <div id="exampleSlider" class="" >
                                        <div class="MS-content" >
                                        
                                            @foreach($cate->courses as $key=>$cozy)
                                    
                                            <div class=" item  ">
                                                <div class="m-2"> 
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
                                            </div>
                                                            
                                            @endforeach
                                            
                                            
                                        </div>
                                        <div class="MS-controls">
                                <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                    <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                            </div>

                            </div>
                        </div>
                            
                    @endforeach

                </div>             
            </div>
        </div>
    </div>

</div>


<br>
<br>@endsection
