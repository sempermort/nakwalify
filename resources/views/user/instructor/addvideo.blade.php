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

        <form method="post" id="vidform" enctype="multipart/form-data">
            @csrf
            <div class="row " style="  margin-top: 2.5rem !important;">
                <div class="card w-90">
                    <div class="card-body d-flex " style="padding: 1.5rem 3rem !important;">
                        <div class="card p-0 col-4 border-radius-0 m-2 border-0">
                            <div class="card-body p-0 pt-2 m-1 border">
                                <div class=" btn-group-vertical col-12  text-left" id="vidb" role="group">
                                </div>
                            </div>
                            <div class="textarea_dt mt-5 ">

                                <div class="ui form swdh339">

                                    <div class="field border rounded " style="height:170px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-8 border-radius-0 m-2 p-0  border-left-0 border-right-0">
                            <div class=" d-flex justify-content-between border " role="toolbar">
                                <div class="btn-group mr-2 large linka d-none" role="tablist" aria-label="First group"
                                    id="vidtab">
                                    <a type="button" class="btn  btn-info" id="videos-tab" data-toggle="tab"
                                        href="#videos">
                                        <span class="material-icons-outlined   ">play_arrow</span>
                                    </a>
                                    <a type="button" class="btn btn-secondary" id="questions-tab" data-toggle="tab"
                                        href="#question">
                                        <span class="material-icons md-light   ">format_align_center</span>
                                    </a>


                                </div>

                                <div class=" mavideo w-auto float-right ">
                                    <!-- name of file chosen -->
                                    <span class="" id="file-chosen">No file chosen</span>
                                    <!-- actual upload which is hidden -->
                                    <input type="file" name="videos" id="actual-btn" hidden />

                                    <!-- our custom upload button -->
                                    <label class="malabel" for="actual-btn">Add Video</label>
                                </div>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="videos" role="tabpanel"
                                    aria-labelledby="videos-tab">
                                    <video width="400" height="240" poster="{{asset('assets/images/course_4.jpg')}}"
                                        class="w-100 h-100 " id="vidcanva" controls>

                                    </video>
                                </div>
                                <div class="tab-pane fade  " id="question" role="tabpanel"
                                    aria-labelledby="question-tab">
                                    <div class="mt-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="form-group  d-flex justify-content-between ">
                                                <label for="questiontype">Question Type</label>
                                                <select class="form-rounded form-control  dropdown " id="questiontype">
                                                    <option>Multiple Choice</option>
                                                    <option>True & False</option>
                                                    <option>More Than One</option>
                                                </select>
                                            </div>
                                            <div class="">
                                                <button type="button" class="btn btn-secondary ml-2" id="addq">
                                                    <i class="fa fa-plus"></i> Question
                                                </button>

                                            </div>


                                        </div>

                                        <div class="wra" id=wra>

                                        </div>


                                    </div>

                                </div>
                            </div>
                            <div class="textarea_dt mt-3  " id="descr">

                                <div class="ui form swdh339">
                                    <label class="control-label">Description</label>
                                    <div class="field border border-dark">
                                        <textarea rows="5" name="description" id="description"
                                            placeholder="Insert your course description"></textarea>
                                    </div>
                                </div>
                                <!-- <input type="file" id="actual" name="myfile" /> -->
                            </div>
                        </div>
                    </div>

                    <div class=" mrl-3">
                        <div class="d-flex justify-content-lg-between">
                            <div class="col-md-6">

                                <div class=" mafile w-auto " style="margin:auto 0;">

                                    <!-- actual upload which is hidden -->
                                    <input type="file" name="pdfes" id="pdf-btn" hidden />

                                    <!-- our custom upload button -->
                                    <label class="malabel" for="pdf-btn">Add PDF files</label>
                                </div>
                                <div class=" border rounded">
                                    <table class="  w-100 text-center" id="pdfb">
                                        <tr class=" border-bottom">
                                            <th scope="col p-1">Title</th>

                                            <th scope="col p-1">Action</th>
                                        </tr>

                                    </table>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class=" mappt w-auto " style="margin:auto 0;">

                                    <!-- actual upload which is hidden -->
                                    <input type="file" name="pptxes[]" id="pptxes" hidden multiple/>

                                    <!-- our custom upload button -->
                                    <label class="malabel" for="pptxes">Add PPT files</label>
                                </div>
                                <div class=" border rounded">
                                    <table class="  w-100 text-center" id="ppt">
                                        <tr class=" border-bottom">
                                            <th scope="col p-1">Title</th>

                                            <th scope="col p-1">Action</th>
                                        </tr>

                                    </table>
                                </div>

                            </div>
                        </div>
                        <input type="text" name="course_id" value={{$course_id}} id="pdf-btn" hidden />
                        <div class="mt-5 mb-5">
                            <button class="btn btn-success rounded  m-1 col-2 float-right " id="addvid-btn"
                                onclick="ajaxed()" type="button">
                                Add Video
                            </button>
                        </div>
                        <div class="mt-5  d-flex justify-content-between clear-both">
                            <a class="btn btn-info btn-pill  m-1 col-2 " href="{{route('addcourse')}}">
                                Previous
                            </a>
                            <a class="btn btn-info btn-pill  m-1 col-2" href="{{route('addcover',['id' => $course_id])}}"  >
                                Next
</a>
                        </div>

                    </div>
                </div>
        </form>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog" style="max-width: 80%;">
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
            <div class="modal" id="vidModal">
            <div class="modal-dialog" style="max-width: 80%;">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Lesson Preview</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div style="width: 100%; height: 83vh;">
                        <div class="sa4d25 bg-darknavy p-5">
    <div class="">
        <h2 class="text-white ctitle"></i>  </h2>
        <p class=" text-white ptitle">

        </p>
        <div class=" row  mt-2">

            <div class=" col-md-8 border-radius-0  p-0  border-left-0 border-right-0" id="mediav">

                <video width="400" id="mainvid" height="240" poster="{{asset('assets/images/course_4.jpg')}}"
                    class="w-100 h-100 " controls>

                </video>

            </div>

        </div>

    </div>
</div>
                        </div>
                    </div>

                </div>
            </div>
            <script>
   const actualBtn = document.getElementById('actual-btn');
        const fileChosen = document.getElementById('file-chosen');

        actualBtn.addEventListener('change', function() {
            fileChosen.textContent = this.files[0].name;
        });
            var i = 1;

function made(url, name, id) {
  var  APP_URL ='{!!url('/')!!}';
    var results = APP_URL+"/get-video/" + url.split("/").pop();
    var resultId = APP_URL+"/addquestion/" + id;
    var btnhtml =
        '<div class="d-flex justify-content-between  w-100" id="' + name.slice(0, 4) + '">' +
        '<div class=" w-90 btn btn-info mb-2 vditem">Video ' + i + ' <a class=""' +
        'onclick="viditemclicked(\'' + results + '\')"><i class="pl-2 fa fa-play"></i></a>' +
        '<a class="ml-3" href="' + resultId + '">Q<i class="pl-2 fa fa-plus "></i></a>' +
        '</div>' +
        '<button type="button" id="byn' + i + '" class="btn btn-default delvid mb-2 w-10"' +
        'onclick="destvid(\'' + name + '\')" >' +
        '<i class="pl-2 fa fa-times "></i></button></div>';
    $("#vidb").append($(btnhtml));

    i++;

};


        const filepdf = document.getElementById('pdf-btn');

        filepdf.addEventListener('change', function(e) {
            made2(URL.createObjectURL(this.files[0]), this.files[0].name, e);
        });

        const fileppt = document.getElementById('pptxes');

        fileppt.addEventListener('change', function(e) {

            for (let i = 0; i < this.files.length; i++) {
                let pic = this.files[i];

                made3(URL.createObjectURL(pic), pic.name, e);
            }

        });

        function ajaxed() {
            var objprogress = document.getElementById("progressob");
            var pptxes = document.getElementById("pptxes").files;
            var ppts = document.getElementById("pptxes")
            var description = document.getElementById("description");
            var form_data = new FormData();

            form_data.append('course_id', $('input[name=course_id]').val());
            form_data.append('videos', $('#actual-btn').prop('files')[0]);
            form_data.append('description', description.value);
            form_data.append('pdfes', $('#pdf-btn').prop('files')[0]);


            for (let i = 0; i < pptxes.length; i++) {
                form_data.append("pptxes[" + i + "]", pptxes[i]);
            }

            var answer = $('input[name*=answer]');
            for (var i = 0; i < answer.length; i++) {
                form_data.append(answer[i].name, answer[i].value);
            }

            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                type: 'POST',
                url: "{{route('addcontentpost') }}",
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

                        made(data.video_path, data.video_title, data.id);
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

        var i2 = 1;

        function made2(url, name, e) {
            var nam1 = name.toString().split(".pdf");
            var nam2 = nam1.toString().replace(/_/gi, ' ');
            var btnhtml2 =
                '<tr class="" id="' + name.slice(0, 4) + '">' +
                '<td>' + nam2 + '</td>' +
                '<td><button type="button" class="btn btn-success m-1"' +
                'onclick="openpdf(\'' + url + '\')">Preview</button>' +
                '<button type="button" id="byn' + i2 + '"class="btn btn-danger ml-1"' + 'onclick="destvid2(\'' + name +
                '\')" >' +
                'Delete<i class="pl-2 fa fa-times "></i></button></td>' +
                '</tr>';
            $("#pdfb").append($(btnhtml2));
            // ajaxed2();
            i2++;
        };
        var i3 = 1;

        function made3(url, name, e) {

            var nam1 = name.toString().split(".")[0];
            var nam2 = nam1.toString().replace(/_/gi, ' ');
            var btnhtml2 =
                '<tr class="" id="' + name.slice(0, 4) + '">' +
                '<td>' + nam2 + '</td>' +
                '<td><button type="button" class="btn btn-success m-1"' +
                'onclick="openpdf(\'' + url + '\')">Preview</button>' +
                '<button type="button" id="byn' + i3 + '"class="btn btn-danger ml-1"' + 'onclick="destvid2(\'' + name +
                '\')" >' +
                'Delete<i class="pl-2 fa fa-times "></i></button></td>' +
                '</tr>';
            $("#ppt").append($(btnhtml2));
            // ajaxed2();
            i2++;
        };

            </script>
            @endsection
