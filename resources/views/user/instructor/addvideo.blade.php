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
                            <button class="btn btn-info btn-pill  m-1 col-2 " type="submit">
                                Next
                            </button>
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

            </script>
            @endsection
