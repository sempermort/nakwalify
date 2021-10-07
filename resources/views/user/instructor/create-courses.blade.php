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
                        <ul class="step-steps">
                            <li class="active">
                                <a href="create_new_course.html#tab_step1">
                                    <span class="number"></span>
                                    <span class="step-name">General Information</span>
                                </a>
                            </li>

                        </ul>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif

                        <form method="post" action="{{ route('addcoursepost') }}">
                            @csrf
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
                                                                    placeholder="Insert your course title."
                                                                    name="course_title" data-purpose="edit-course-title"
                                                                    maxlength="60" id="main[title]" value="">


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="ui search focus mt-30 lbel25">
                                                            <label>Course Subtitle*</label>
                                                            <div class="ui left icon input swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    placeholder="Insert your course Subtitle."
                                                                    name="course_subt" data-purpose="edit-course-title"
                                                                    maxlength="60" id="sub[title]" value="">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="mt-30 lbel25">
                                                            <label>Language*</label>
                                                        </div>
                                                        <select class="form-rounded form-control" name="language">
                                                            <option value="">Select Language</option>
                                                            <option value="1">English</option>
                                                            <option value="2">Kiswahili</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="mt-30 lbel25">
                                                            <label>Course Category*</label>
                                                        </div>
                                                        <select class="form-rounded form-control" name="category_Id">
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
                                                        <select class="form-rounded form-control   "
                                                            name="subcategory_Id">
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
                                                <div class="d-flex  justify-content-between mt-30">
                                                    <div class="col-11 p-0">
                                                        <label>What you will learn*</label>
                                                        <div class="grid-container border gridwlearn">
                                                        </div>
                                                        <div class="">
                                                            <input class="w-100" type="text"
                                                                id="wywlearn" value="">
                                                            <input type="hidden" name="mainwlearn[]" id="mainwlearn"
                                                                value="">
                                                        </div>
                                                    </div>
                                                    <div class="addlearn ml-3" style="padding-top: 2.4rem;">
                                                        <button type="button" class="btn btn-info rounded "
                                                            onclick="addwlearnin()"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between  mt-30">
                                                    <div class="col-11 p-0">
                                                        <label>Requirements*</label>
                                                        <div class="grid-container border gridrequire">
                                                        </div>
                                                        <div class="">
                                                            <input class="w-100" type="text"  id="requirement"
                                                                value="">
                                                            <input type="hidden" name="mainrequire[]" id="mainrequire"
                                                                value="">
                                                        </div>
                                                    </div>
                                                    <div class="addrequire ml-3" style="padding-top: 2.4rem;">
                                                        <button type="button" class="btn btn-info rounded "
                                                            onclick="addrequirement()"><i
                                                                class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="textarea_dt mt-3 ">

                                                    <div class="ui form swdh339">
                                                        <label class="control-label">Course Description</label>
                                                        <div class="field border border-dark">
                                                            <textarea rows="5" name="course_des"
                                                                id="course_des"
                                                                placeholder="Insert your course description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="price_course">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="price_title">
                                                                <h4><i class="uil uil-dollar-sign-alt"></i>Pricing</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                                            <div class="mt-30 lbel25">
                                                                <label>Currency*</label>
                                                            </div>
                                                            <select class="form-rounded form-control  dropdown ">
                                                                <option value="">TSH</option>
                                                                <option value="1">USD</option>
                                                                <option value="2">TSH</option>
                                                                <option value="4">EUR</option>
                                                                <option value="5">GBP</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                                            <div class="mt-30 lbel25">
                                                                <label>Select*</label>
                                                            </div>
                                                            <select class="form-rounded form-control  dropdown " name="price">

                                                                <option value="Free">Free</option>
                                                                <option value="10000">10,000 </option>
                                                                <option value="15000">15,000</option>
                                                                <option value="25000">25,000 </option>
                                                                <option value="30000">30,000 </option>
                                                                <option value="40000">40,000 </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>



                                </div>
                                <div class="step-footer step-tab-pager justify-content-end mb-3">
                                    <button type="submit" class="btn btn-outline-info btn-lg">Next </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
      const learnarry=[];
        function addwlearnin(){
            const wywlearn = document.getElementById('wywlearn');
            const mainwlearn = document.getElementById('mainwlearn');
            if(wywlearn.value!=null){
            var htmlearn =
            '<div class="collection-item border-0">'+
            '<div  class="m-2 primary-content"><i class="material-icons">done  </i>'+
            wywlearn.value+'</div>'+
            '</div>';
                    $(".gridwlearn").append($(htmlearn));

                   learnarry.push(wywlearn.value);

                   mainwlearn.value=learnarry.slice();
                   wywlearn.value='';
            }
        };

        const main  =[];
        function addrequirement(){
            if(mainrequire.value!=null){
           const requires = document.getElementById('requirement');
           const mainrequire = document.getElementById('mainrequire');
           var html =
           '<div class="collection-item border-0">'+
           '<div  class="m-2 primary-content">'+
           requires.value+'</div>'+
           '</div>';
                   $(".gridrequire").append($(html));

                  main.push(requires.value);

              
                  mainrequire.value=main.slice();
                  requires.value='';
            }
       };
</script>
@endsection
