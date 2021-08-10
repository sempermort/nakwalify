@extends('layouts.user-layout')

@section('content')
<div class="sa4d25">
    <div class="container " style="  margin-top: 3.5rem !important;">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-analysis"></i> Create Course Certificate</h2>
            </div>
        </div>
        <div class="row " style="  margin-top: 2.5rem !important;">
            <div class="col-12">
                <div class="step-content">
                    <div class="step-tab-panel step-tab-info active" id="tab_step1">
                        <div class="tab-from-content">

                            <div class="course__form">
                                <div class="general_info10">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Course Title*</label>
                                                <div class="ui left icon input swdh19">
                                                    <input class="prompt srch_explore" type="text"
                                                        placeholder="Insert your course title." name="title"
                                                        data-purpose="edit-course-title" maxlength="60" id="main[title]"
                                                        value="">


                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Course Subtitle*</label>
                                                <div class="ui left icon input swdh19">
                                                    <input class="prompt srch_explore" type="text"
                                                        placeholder="Insert your course Subtitle." name="subtitle"
                                                        data-purpose="edit-course-title" maxlength="60" id="sub[title]"
                                                        value="">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="course_des_textarea mt-30 lbel25">
                                                <label>Course Description*</label>
                                                <div class="course_des_bg">
                                                    <ul class="course_des_ttle">
                                                        <li><a href="create_new_course.html#"><i
                                                                    class="uil uil-bold"></i></a></li>
                                                        <li><a href="create_new_course.html#"><i
                                                                    class="uil uil-italic"></i></a></li>
                                                        <li><a href="create_new_course.html#"><i
                                                                    class="uil uil-list-ul"></i></a>
                                                        </li>
                                                        <li><a href="create_new_course.html#"><i
                                                                    class="uil uil-left-to-right-text-direction"></i></a>
                                                        </li>
                                                        <li><a href="create_new_course.html#"><i
                                                                    class="uil uil-right-to-left-text-direction"></i></a>
                                                        </li>
                                                        <li><a href="create_new_course.html#"><i
                                                                    class="uil uil-list-ui-alt"></i></a>
                                                        </li>
                                                        <li><a href="create_new_course.html#"><i
                                                                    class="uil uil-link"></i></a></li>
                                                        <li><a href="create_new_course.html#"><i
                                                                    class="uil uil-text-size"></i></a>
                                                        </li>
                                                        <li><a href="create_new_course.html#"><i
                                                                    class="uil uil-text"></i></a></li>
                                                    </ul>
                                                    <div class="textarea_dt">
                                                        <div class="ui form swdh339">
                                                            <div class="field">
                                                                <textarea rows="5" name="description"
                                                                    id="id_course_description"
                                                                    placeholder="Insert your course description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="mt-30 lbel25">
                                                <label>Language*</label>
                                            </div>
                                            <select class="ui hj145 dropdown cntry152 prompt srch_explore">
                                                <option value="">Select Language</option>
                                                <option value="1">English</option>
                                                <option value="2">Español</option>
                                                <option value="3">Português</option>
                                                <option value="4">日本語</option>
                                                <option value="5">Deutsch</option>
                                                <option value="6">Français</option>
                                                <option value="7">Türkçe</option>
                                                <option value="8">हिन्दी</option>
                                                <option value="9">Italiano</option>
                                                <option value="10">Polski</option>
                                                <option value="11">ภาษาไทย</option>
                                                <option value="12">Română</option>
                                                <option value="13">Telugu</option>
                                                <option value="14">मराठी</option>
                                                <option value="15">ਪੰਜਾਬੀ</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mt-30 lbel25">
                                                <label>Course Category*</label>
                                            </div>
                                            <select class="ui hj145 dropdown cntry152 prompt srch_explore">
                                                <option value="">Select Category</option>
                                                <option value="1">Development</option>
                                                <option value="2">Business</option>
                                                <option value="3">Finance & Accounting</option>
                                                <option value="4">IT & Software</option>
                                                <option value="5">Office Productivity</option>
                                                <option value="6">Personal Development</option>
                                                <option value="7">Design</option>
                                                <option value="8">Marketing</option>
                                                <option value="9">Lifestyle</option>
                                                <option value="10">Photography</option>
                                                <option value="11">Health & Fitness</option>
                                                <option value="12">Music</option>
                                                <option value="13">Teaching & Academics</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mt-30 lbel25">
                                                <label>Course Subcategory*</label>
                                            </div>
                                            <select class="ui hj145 dropdown cntry152 prompt srch_explore">
                                                <option value="">Select Subcategory</option>
                                                <option value="1">Javascript</option>
                                                <option value="2">Angular</option>
                                                <option value="3">React</option>
                                                <option value="4">CSS</option>
                                                <option value="5">PHP</option>
                                                <option value="6">Node.Js</option>
                                                <option value="7">WordPress</option>
                                                <option value="8">Vue JS</option>
                                                <option value="9">Shopify</option>
                                                <option value="10">Magento</option>
                                                <option value="11">Open Cart </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="step-footer step-tab-pager justify-content-end mb-3">

                    <a data-direction="next" href="{{route('addvideos')}}"
                        class="col-md-2 btn btn-info btn-pill float-right m-4">create</a>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
