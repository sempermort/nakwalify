@extends('layouts.stu-layout')

@section('content')


<div class="sa4d25 mt-30 ">
    <div class="container  mb-5">
        <div class=" mb-4 mt-4">
            <h3 class="udlite-heading">{{count($cozes)}} results for “{{$searched}}”</h2>
            <div class="d-flex justify-content-between mb-4 mt-4  ">
                <div class="d-flex">
                    <button type="button" id="hui" class="btn btn-outline-dark  mr-3"><i class="fa fa-filter"></i>
                        Filter</button>
                    <div class=" rounded border border-dark d-flex flex-column p-0">

                            <small class="text-left pl-3" id="">Sort by</small>

                        <select class=" border-0 pt-0 pb-0 bg-transparent" style="
   outline:0px;">
                            <option value="1">
                                Most Reviewed
                            </option>
                            <option value="2">
                                New

                            </option>
                            <option value="3">
                                Trending

                            </option>

                        </select>
                    </div>

                </div>
                <span class="font-bold">{{count($cozes)}}  results</span>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <div class=" border-top">
                    <strong>
                        <p>
                            <a class="text-dark d-flex justify-content-between" data-toggle="collapse" href="#topic"
                                role="button" aria-expanded="false" aria-controls="topic">
                                Topic <i class="fa fa-caret-down"></i>
                            </a>
                        </p>
                    </strong>
                    <div class="collapse" id="topic">
                        <div class="input-group mb-3 tablinks" onclick="opentabs(event)">
                            All Categories
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @foreach($cozes as $course)
                <div class="fcrse_1 " >
                    <a href="course_detail_view.html" class="hf_img">


                    @if(isset($course->mediaCover->file_path))

                    @php $src=$course->mediaCover->file_path; @endphp
                    <img class="card-img-top  object-cover h-100 w-100"
                        src="{{route('get-copic',explode('/',$src)[1])}}" alt="Card image cap">
                    @endif
                   
                        <div class="course-overlay">
                            <div class="badge_seller">Bestseller</div>
                            <div class="crse_reviews">
                                <i class="uil uil-star"></i>4.5
                            </div>
                            <span class="play_btn1"><span class="material-icons-round ">
                                    play_arrow
                                </span></i></span>
                            <div class="crse_timer">
                                20min
                            </div>
                        </div>
                    </a>
                    <div class="hs_content">
                      
                        <div class="vdtodt">
                            <span class="vdt14">10 views</span>
                            <span class="vdt14">15 days ago</span>
                        </div>
                        <a href="course_detail_view.html" class="crse14s title900">{{$course->course_title}}</a>
                        <a href="my_trainee_profile_view.html#" class="crse-cate">
                        {{$course->category->category_name}} </a>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
<script>
function opentabs(evt) {  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" selectactive", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab

  evt.currentTarget.className += " selectactive";
}
</script>
@endsection
