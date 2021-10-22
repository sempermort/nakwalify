@extends('layouts.user-layout')

@section('content')
<div class="sa4d25">
    <div class="container " style="  margin-top: 3.5rem !important;">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-analysis"></i> Create New Course</h2>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif

        <form >
            @csrf
            <div class="row " style="  margin-top: 2.5rem !important;">
                <div class="card w-90">
                    <div class="card-body d-flex " style="padding: 1.5rem 3rem !important;">
                        <div class="card p-0 col-4 border-radius-0 m-2 border-0">
                            <div class="card-body p-0 pt-2 m-1 border">
                                <div class=" btn-group-vertical col-12  text-left" id="ql" role="group">
                                    @php $e=1; @endphp
                                    @foreach($qlst as $ls)
                                    <div class="d-flex justify-content-between  w-100" >
                                    <a class=" w-90 btn btn-info mb-2 p-1 text-white text-left vditem">
                                    {{$e}}. {{$ls->question}}'...'
                                    </a>
                                    <button type="button"  class="btn btn-default  mb-2 p-1 w-10"
                                            onclick="destquestion('{{$ls->id}}')">
                                            <i class="pl-2 fa fa-times "></i></button>
                                </div>
                                    @php $e++; @endphp
                                    @endforeach
                                </div>
                            </div>
                         
                        </div>
                        <div class="card col-8 border-radius-0 m-2 p-0  border-left-0 border-right-0">

                            <div class="" id="myTabContent">

                                <div class=" " id="question" role="tabpanel" aria-labelledby="question-tab">
                                    <div class="mt-4">

                                        <div class="form-group  d-flex justify-content-between ">
                                            <label for="questiontype">Question Type</label>
                                            <select class="form-rounded form-control  dropdown " id="questiontype"
                                                name="questiontype">
                                                <option value="true">True & False</option>
                                                <option value="select">Multiple choice</option>
                                            </select>
                                        </div>

                                        <div class=" wraqa" id="wraqa">
                                            <div class="form-group  wraq">
                                                <div class="d-flex justify-content-between">
                                                    <input class="form-control mr-2 form-rounded " type="text"
                                                        placeholder="Question" name="question" value="">

                                                </div>
                                            </div>
                                            <div class="form-group d-flex justify-content-between wrans">
                                                <input class="form-control mr-2 form-rounded  " type="text"
                                                    placeholder="Answer" id=" " name="answer[0] " value="">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck"
                                                        name="correct[0]">
                                                    <label class="form-check-label" for="exampleCheck1">
                                                        <i class="fas fa-check"></i></label>
                                                </div>
                                                <button type="button" class="btn btn-secondary ml-2"
                                                    onclick="addans(this)" id="addan" type="button">
                                                    <i class="fa fa-plus"></i>
                                                </button>

                                            </div>
                                            <div class="form-group" id="wrans">

                                            </div>
                                        </div>




                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class=" mrl-3">

                        <input type="text" name="video_id" value="{{$video_id}}" id="pdf-btn" hidden />
                        <div class="mt-5 mb-5">
                            <a class="btn btn-success rounded  m-1 col-2 float-right " id="addvid-btn"  onclick="ajaxeq()" >
                                save Question
                           </a>
                        </div>
                        <div class="mt-5  d-flex justify-content-between clear-both">
                            <a class="btn btn-info btn-pill  m-1 col-2 " href="{{route('addcourse')}}">
                                Previous
                            </a>
                          
                            <a class="btn btn-info btn-pill  m-1 col-2 " href="{{route('takequiz',$video_id)}}">
                                Next
                            </a>
                        </div>

                    </div>
                </div>
        </form>

        <!-- The Modal -->

        <script>
  var iq=1;
        function made4(name) {
            var btnhtml =
                '<div class="d-flex justify-content-between  w-100" id="'+name.slice(0, 4)+'">'+
                '<a class=" w-90 btn btn-info mb-2 text-white vditem"> Q# '+iq+'.  '+
                ''+name.slice(0, 20) + '...'+
                '</a></div>' ;
            $("#ql").append($(btnhtml));

            iq++;
        };
        
        function ajaxeq() {

            var objprogress = document.getElementById("progressob");
            
            var form_data = new FormData();
           
            form_data.append('questiontype', $('input[name=questiontype]').val());        
            form_data.append('question', $('input[name=question]').val());
            form_data.append('video_id', $('input[name=video_id]').val());
           


           

            var answer = $('input[name*=answer]');
            for (var i = 0; i < answer.length; i++) {
                form_data.append(answer[i].name, answer[i].value);
            }
            var correct = $('input[name*=correct]');
            for (var i = 0; i < correct.length; i++) {
                if($(correct[i]).is(':checked')){
                form_data.append(correct[i].name, correct[i].value);
                }
            }
            $.ajax({
                type: 'POST',
                url: "{{route('savquestion') }}",
                data: form_data,
                processData: false,
                contentType: false,        
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if ((data.errors)) {
                        alert(data.errors);
                    } else {

                        window.location.reload();
                    }
                },
                xhr: function() {
                    var xhr = new XMLHttpRequest();
                    //Upload progress

                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {

                            //Do something with upload progress
                            objprogress.max = evt.total;
                            objprogress.value = evt.loaded;
                        }
                    }, false);

                    return xhr;
                },
                beforeSend: function(xhr) {
                    $('.loading-overlay-image-container').show();
                    $('.loading-overlay').show();
                },
                complete: function(data) {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();
                },




                error: function(data) {
                    $('.loading-overlay-image-container').hide();
                    $('.loading-overlay').hide();

                }


            });
        };
function destquestion(id) {


var token = $("meta[name='csrf-token']").attr("content");
$.ajax({
    url: "destqstn/" + id,
    type: 'DELETE',
    data: {
        "id": id,
        "_token": token,
    },
    beforeSend: function () {
        $('.loading-overlay-image-container').show();
        $('.loading-overlay').show();
    },
    complete: function () {
        $('.loading-overlay-image-container').hide();
        $('.loading-overlay').hide();
    },
    success: function (data) {

         window.location.reload();
    }

});

};
        </script>
        @endsection
