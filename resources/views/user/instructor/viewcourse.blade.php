@extends('layouts.stu-layout')



@section('content')


{{$id=1}}
<div class="sa4d25 bg-darknavy p-5">
    <div class="pt-3">
        <h2 class="text-white"></i> {{$course->course_title}} </h2>
        <p class=" text-white">
            {{substr($course->course_des, 0, 130)}}...
        </p>
        <div class=" row  mt-2">

            <div class=" col-md-9 border-radius-0  p-0  border-left-0 border-right-0" id="mediav">
                <div class="sa">
                    <div class="btn-group mr-2 large linka " role="tablist" aria-label="First group" id="viewtab">
                       <a type="button" class=" tablinks" id="defaultOpen"
                            onclick="openCity(event, 'videotab')">

                        </a>
                          <!-- <span class="material-icons-outlined   ">play_arrow</span> -->
                         <!--
                        <a type="button" class="btn btn-secondary tablinks" onclick="openCity(event, 'pptab')"
                            id="ppt-tab">
                            <span class="material-icons md-light   ">format_align_center</span>
                        </a> -->


                    </div>
                    <div class="tab-content">

                        <div id="videotab" class="tab-pane   tabcontent h-500" >
                            <video width="400" id="mainvid" height="240"
                                poster="{{route('get-copic',explode('/',$copic->file_path)[1])}}" class="w-100 h-100 object-cover " controls>
                                @if(isset($covid->id))
                                <source src="{{route('get-covid',explode('/',$covid->file_path)[1])}}">@endif
                            </video>

                        </div>

                        <div id="pptab" class="tab-pane tabcontent">

                            <div id="carouselExampleFade"  class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner " id="carol">
                                <div class="carousel-item h-350 pl-4 pr-4 active">
                                        <img src="{{route('get-copic',explode('/',$copic->file_path)[1])}}" width="400"
                                            id="mainpic" height="240" class=" object-cover h-100 w-100"
                                            alt="">
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next"  href="#carouselExampleFade" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" style="margin-left:-95px;"aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </div>


                </div>


            </div>
@php $sum=15;@endphp
            <div class=" p-0 col-md-3  ">
                <div class=" p-0 pt-2 m-3 " style="height: 440px;
                  overflow: auto;">
                    <ul class=" list-group border-0  v-itm  table-hover " role="group">
                        <p class="d-flex justify-content-between text-white ">
                            {{$id}} Lessons ({{$sum}} min) <a href="http://"><small class=" d-none underline secondary-content">View
                                    My Notes</small></a></p>



                                    @php $id=1; $suml=0;@endphp
                                    @foreach ($videos as $vids)
                        <li class="list-group-item btn transparent mb-3 list-group-item-action    bg-darknavy active" style=""
                            onclick="vidliclicked('{{$vids->video_path}}',{{count($videos)}},{{$id}},{{$vids->id}})"
                            id="{{'vids'.$id}}">
                            <a class="text-white font-weight-bold   d-flex justify-content-between ">
                                video {{$id}} <span class="secondary-content vdurant"></span></a>
                        </li>
                        @php $id++; @endphp

                        @endforeach
                    </ul>

                </div>

            </div>
        </div>

    </div>
</div>
</section>
<section>
    <div class=" container p-4">
        <ul class="nav nav-tabs mt-5">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab-1">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Course Material</a>
            </li>

        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">
                <div class="panel-body m-5">
                    <h4>Project Description</h4>
                    <p>
                        {{$course->course_des}}
                    </p>

                </div>
            </div>
              <div id="tab-2" class="tab-pane">
                <div class="panel-body m-5">
                    <h4> First up, review the Teacher Handbook,</h4>
                    <div class=" border rounded">
                        <table class="table  w-100 text-center" id="pdfb">
                            <tr class=" border-bottom">
                                <th scope="col p-1">Title</th>

                                <th scope="col p-1">Action</th>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal" id="myModal">
    <div class="modal-dialog" style="max-width: 85%;">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Preview PDF</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div style="width: 100%; height: 83vh;">
                    <object data="" style="width: 100%; height: inherit;" id="pspdfkit"></object>
                </div>
            </div>

        </div>
    </div>

    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    };

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();






        var totalv = 0;
        var currentv = 0;
        var currenturl = 0;
        var modal =  0;

        function vidliclicked(urlu,counv,currev,id)
        {

        ajaxed4(id);
        totalv=counv;
        currentv=currev;
        currenturl=urlu;

        madeu(urlu);

        };
        var tv = document.querySelector('vidcanva');
        var contain =  document.getElementById('mediav');
        tv.addEventListener('ended', onplayerchange);
        function onplayerchange(evnt)
        {

        if(totalv -currentv> 1) {
        contain.insertAdjacentHTML('beforeend',
            '<div id="modal" class="video-js w-100 h-100 card-img-overlay">' +
            '<div class="text-center" id="message">Welcome To nakwalify</div>' +
            '<div class="d-flex justify-content-center">'+
            '<button class="btn btn-info mr-5" onclick="prevbtn()" type="button" id="button1">Previous Video'+
            '</button>' +
            '<button type="button" class="btn btn-success ml-5" onclick="nextbtn()" id="button2">Next Video'+
            '</button></div>' +
            '<div class="text-center m-3">'+
            '<button type="button" id="replayvideo" onclick="replayvid()" class="btn btn-default text-white">'+
            '<i class="fas fa-redo text-white"></i></button>' +
            '</div> </div>'
        );


        }

        else if(totalv==1 )
        {
            contain.insertAdjacentHTML('beforeend',
            '<div id="modal" class="video-js w-100 h-100 card-img-overlay">' +
            '<div class="text-center" id="message">Welcome To nakwalify</div>' +
            '<div class="text-center"><button id="replayvideo" onclick="replayvid()" class="btn btn-default">'+
            '<i class="fas fa-redo text-white"></i></button>' +
                '</div> </div>'
        );
        }
        else{contain.insertAdjacentHTML('beforeend',
            '<div id="modal" class="video-js w-100 h-100 card-img-overlay">' +
            '<div class="text-center" id="message">Welcome To nakwalify</div>' +
            '<div class="d-flex justify-content-start">'+
            '<button class="btn btn-info mr-5" onclick="prevbtn()" type="button" id="button1">Previous Video'+
            '</button></div>' +
            '<div class="text-center"><button id="replayvideo" onclick="replayvid()" class="btn btn-default">'+
            '<i class="fas fa-redo text-white"></i></button>' +
                '</div> </div>'
        );
        }};



        function replayvid() {
    $('#vids'+currentv).click();
      };

        function nextbtn() {

        if(totalv-currentv>0){
            var temp=currentv+1;
            $('#vids'+temp).css('pointer-events','auto');
            $('#vids'+temp).click();
            }
            else{
            $('#vids'+currentvp).css('pointer-events','auto');
            $('#vids'+currentv).click();
            }
        };

            function prevbtn() {
            if(totalv-currentv>=0&&currentv!=1){
            var temp=currentv-1;
                $('#vids'+temp).click();
                }
                else {

                $('#vids'+currentv).click();
            }
        };


        function viewpdf(url) {
        const pdfviewer = document.getElementById('pspdfkit');
        pdfviewer.data=url;
        $('#myModal').modal('show');
        };




        function ajaxed4(id) {


        var form_data = new FormData();
        form_data.append('id', id);
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax({
        type: 'POST',
        url: "{{ route('pptpics') }}",
        data: form_data,
        cache: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        contentType: false,
        processData: false,
        beforeSend: function(){
        $('.loading-overlay-image-container').show();
        $('.loading-overlay').show();
        },
        complete: function(){
        $('.loading-overlay-image-container').hide();
        $('.loading-overlay').hide();
        },
        success: (data) => {
        made5(data);

        },
        error: function(data) {
        console.log(data);
        }
        });
        };


        function made5(data) {

            var APP_URL = {!! json_encode(url('/')) !!}
        var carol = document.getElementById('carol');
        document.querySelectorAll('.carol-it').forEach(e => e.remove());
        for(let i=0; i<data.length;i++){
            var lin=APP_URL+"/get-ppt/" +data[i].file_path.split("/").pop();
        var imgcaro='<div class="carousel-item h-350 m-4 carol-it">' +
        '<img src="' +lin+'" width="400"'+
        ' id="mainvid" height="240" class="object-cover h-100 w-100"'+
        ' alt="" +data.course_file_title+"">'+
        ' </div>';


    $('#carol').append($(imgcaro ));
    }
    };

    var i = 1;

function madeu(lim) {

    var videotab= document.getElementById('videotab');
    videotab.innerHTML="";
    var btnhtml =
    '<iframe  width="560" height="315" class="object-cover h-100 w-100"'+
     'id="vidcanva" allow="autoplay;"  src="' + lim + '" frameborder="0"'+
      'allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"allowfullscreen></iframe>';

    $("#videotab").append($(btnhtml));

    i++;

};

    </script>
    @endsection
