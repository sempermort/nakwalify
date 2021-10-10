@extends('layouts.user-layout')

@section('content')


<div class="sa4d25">
    <div class="container " style="  margin-top: 3.5rem !important;">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-analysis"></i> Create New Course</h2>
            </div>
        </div>
        <div class="row " style="  margin-top: 2.5rem !important;">
            <div class="col-12">
                <div class="course_tabs_1">
                    <div id="add-course-tab" class="step-app">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif

                        <form method="post" action="{{ route('addcoverpost') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="courseid" value="{{$courseid}}">
                            <div class="step-content">
                                <div class="step-tab-panel step-tab-gallery" id="tab_step2">
                                    <div class="tab-from-content">
                                        <div class="title-icon">
                                            <h3 class="title"><i class="fa fa-upload"></i>Media</h3>
                                        </div>
                                        <div class="course__form">
                                            <div class="view_info10">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="view_all_dt">
                                                            <div class="view_img_left">
                                                                <div class="view__img" id="view__im">
                                                                    <img src="https://gambolthemes.net/html-items/cursus_demo_f12/images/courses/add_img.jpg"
                                                                        id="viewimgi" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="view_img_right">
                                                                <h4>Cover Image</h4>
                                                                <p>Upload your course image here. It must meet our
                                                                    course image quality standards to be accepted.
                                                                    Important guidelines: 750x422 pixels; .jpg,
                                                                    .jpeg,. gif, or .png. no text on the image.</p>
                                                                <div class="upload__input">
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="coverpic"
                                                                    class="custom-file-input"
                                                                onchange="coverimagepreview(this)"
                                                                                id="coverpic">
                                                                            <label class="custom-file-label"
                                                                            id="labelpic"
                                                                                for="coverpic">No Choose
                                                                                file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="view_all_dt">
                                                            <div class="view_img_left">
                                                                <div class="view__img" id="view__vid">

                                                                    <video width="400" height="240"
                                                                        poster="https://gambolthemes.net/html-items/cursus_demo_f12/images/courses/add_video.jpg"
                                                                        class="w-100 h-100 " id="covercanva" controls>

                                                                    </video>
                                                                </div>
                                                            </div>
                                                            <div class="view_img_right">
                                                                <h4>Promotional Video</h4>
                                                                <p>Students who watch a well-made promo video are 5X
                                                                    more likely to enroll in your course. We've seen
                                                                    that statistic go up to 10X for exceptionally
                                                                    awesome videos. Learn how to make yours awesome!
                                                                </p>
                                                                <div class="upload__input">
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="covervid"
                                                                                class="custom-file-input"
                                                                                onchange="covervidpreview(this)"
                                                                                id="covervid">
                                                                            <label class="custom-file-label"
                                                                            id="labelvid"
                                                                                for="covervid">No Choose
                                                                                file</label>
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
                            <div class="step-footer step-tab-pager justify-content-between mb-4">


                                   <<button type="button" class="btn btn-info col-2">Previous</a>
                                <button data-direction="next" type="submit"
                                    class="btn btn-info col-2 btn-pill">Save</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
