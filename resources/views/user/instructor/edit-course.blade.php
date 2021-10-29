@extends('layouts.user-layout')

@section('content')
<div class="sa4d25">
    <div class="container " style="  margin-top: 3.5rem !important;">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-analysis"></i>Edit Course</h2>
            </div>
        </div>
        <div class="row " style="  margin-top: 2.5rem !important;">
            <div class="col-11">
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

                        <form method="post" action="{{route('editcoursepost') }}">
                            @csrf
                            <div class="step-content">
                            <input type="text" name="cid" value="{{$mcourse->id}}" hidden  />
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
                                                                    maxlength="60" id="main[title]" value="{{$mcourse->course_title}}">


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
                                                                    maxlength="60" id="sub[title]" value="{{$mcourse->course_subt}}">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="mt-30 lbel25">
                                                            <label>Language*</label>
                                                        </div>
                                                        
                                                        <select class="form-rounded form-control" name="language" value="{{$mcourse->language}}">
                                                            <option value="">Select Language</option>
                                                            <option value="1"selected ="@if($mcourse->language=='1'){'selected'}@else{''}@endif">English</option>
                                                            <option value="2" selected ="@if($mcourse->language=='2'){'selected'}@else{''}@endif">Kiswahili</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="mt-30 d-flex justify-content-between lbel25">
                                                            <label>Course Category*</label>
                                                            <button type="button"
                                                            data-toggle="modal" data-target="#categorymodal"
                                                            href="" class="btn btnprimary"><i class="fa fa-plus"></i></button>
                                                        </div>
                                                        <select class="form-rounded form-control" name="category_Id" id="category_id" value="{{$mcourse->category_Id}}" >
                                                        <option value="">Select Category</option>
                                                            @foreach($corses as $coz)
                                                            <option value="{{$coz->id}}"
                                                            @if($mcourse->category_Id==$coz->id)
                                                            selected="{'selected'}"
                                                            @endif    
                                                            >{{$coz->category_name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                    <div class="mt-30 d-flex justify-content-between lbel25">
                                                            <label>Course SubCategory*</label>
                                                            <button type="button"
                                                            data-toggle="modal" data-target="#subcategorymodal"
                                                            href="" class="btn btnprimary"><i class="fa fa-plus"></i></button>
                                                        </div>
                                                        <select class="form-rounded form-control"
                                                            name="subcategory_Id"  id="subcatig"
                                                            value="{{$mcourse->category_Id}}" >
                                                            <option value="">Select SubCategory</option>
                                                            @foreach($subcorses as $cozi)
                                                            <option value="{{$cozi->id}}"
                                                            @if($mcourse->category_Id==$cozi->id)
                                                            selected="{'selected'}"
                                                            @endif    
                                                            >
                                                                {{$cozi->subcategory_name}}</option>
                                                            @endforeach


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-flex   mt-30">
                                                    <div class="col-6  p-0">
                                                        <label>What you will learn*</label>
                                                        <div class="grid-container border " id="gridwlearn">
                                                        @foreach( $mcourse->mainwlearn as  $arriy)
                                                        @foreach( explode(',', $arriy)  as  $learn)
                                                        <div class=" border-0 mr-2">
                                                            <div><i class="material-icons">done</i>
                                                                {{$learn}} </div>
                                                                <input type="hidden" name="mainwlearn[{{$learn}}]" 
                                                                value="{{$learn}}">
                                                        </div>
                                                        @endforeach
                                                        @endforeach
                                                        </div>
                                                        <div class="">
                                                            <input class="w-100 form-control form-rounded" type="text"
                                                                id="wywlearn" value="">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="addlearn ml-3" style="padding-top: 2.4rem;">
                                                        <button type="button" class="btn btn-info rounded "
                                                            onclick="addwlearnin()"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="d-flex   mt-30">
                                                    <div class="col-6 p-0">
                                                        <label>Requirements*</label>
                                                        <div class="grid-container border gridrequire">
                                                        @foreach( $mcourse->mainrequire as  $arriy)
                                                        @foreach( explode(',', $arriy)  as  $learn)
                                                        <div class=" border-0 mr-2">
                                                            <div>
                                                                <i class="material-icons">done</i>
                                                                {{$learn}} </div>
                                                                <input type="hidden" name="mainrequire[{{$learn}}]" 
                                                                value="{{$learn}}">
                                                        </div>
                                                        @endforeach
                                                        @endforeach
                                                        </div>
                                                        <div class="">
                                                            <input class="w-100 form-rounded form-control" type="text"  id="requirement"
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
                                                        <div class="field ">
                                                            <textarea rows="5" name="course_des"
                                                                id="course_des" 
                                                                >{{$mcourse->course_des}}</textarea>
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
                                                            <select class="form-rounded form-control  dropdown " name="price" value="{{$mcourse->price}}">

                                                                <option value="0">Free</option>
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
<!-- Modal -->
<div class="modal fade" id="categorymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                <label for="categoryname" class="control-label">Category name</label>
                <input type="text" name="categoryname" id="categoryname" class="form-control" />
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="ajaxed5()" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="subcategorymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Subcategory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                <label for="subcatgname" class="control-label">Subcategory name</label>
                <input type="text" name="subcatgname" class="form-control" />
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="ajaxed6()" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>
      const learnarry=[];
      var it=1;
        function addwlearnin(){
            const wywlearn = document.getElementById('wywlearn');
            const mainwlearn = document.getElementById('mainwlearn');
            if(wywlearn.value!=null){
            var htmlearn =
            '<div class="collection-item border-0">'+
            '<div  class="m-2 primary-content"><i class="material-icons">done</i>'+
            wywlearn.value+'</div></div>'+
            '<input type="hidden" name="mainwlearn['+it+']" value="'+wywlearn.value+'">';
            $("#gridwlearn").append(htmlearn);
                   wywlearn.value='';
            it++;
            }
        };

        var main  =[];
        function addrequirement(){
         
           const requires = document.getElementById('requirement');
           if(requires.value!=null){
           var req =
           '<div class="collection-item border-0">'+
           '<div  class="m-2 primary-content">'+
           requires.value+'</div>'+
           '</div>  <input type="hidden" name="mainrequire['+requires.value+']"  value="'+requires.value+'">';
           $(".gridrequire").append(req);
                  requires.value='';
           }
            
       };
       function ajaxed5() {
            var objprogress = document.getElementById("progressob");
            var form_data = new FormData();
            form_data.append('category_name', $('input[name=categoryname]').val());

            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('catg') }}",
                data: form_data,
                processData: false,
                contentType: false,
                success: function(data) {
                    if ((data.errors)) {
                        alert(data.errors);
                    } else {
                        var tgb='<option value="'+data.category_id+'">'+data.category_name+'</option>';
                        $("#category_id").append($(tgb));
                        $('#categorymodal').modal('hide')

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

        function ajaxed6() {
            var objprogress = document.getElementById("progressob");
            var cti = document.getElementById("category_id");
            var form_dat = new FormData();
            form_dat.append('category_Id', $('#category_id option:selected').val());
            form_dat.append('subcategory_name', $('input[name=subcatgname]').val());

            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('subcatg') }}",
                data: form_dat,
                processData: false,
                contentType: false,
                success: function(data) {
                    if ((data.errors)) {
                        alert(data.errors);
                    } else {

                        var tgb='<option value="'+data.subcategory_id+'">'+data.subcategory_name+'</option>';
                        $("#subcatig").append($(tgb));
                        $('#subcategorymodal').modal('hide')
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

        const chosencat = document.getElementById('file-chosen');


// actualBtn.addEventListener('change', function() {
//     fileChosen.textContent = this.files[0].name;

// });

</script>
@endsection
