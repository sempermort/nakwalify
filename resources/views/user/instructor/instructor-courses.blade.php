@extends('layouts.user-layout')

@section('content')
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-book-alt"></i>Courses</h2>
            </div>
            <div class="col-md-12">
                <div class="card_dash1">
                    <div class="card_dash_left1">
                        <i class="uil uil-book-alt"></i>
                        <h1>Jump Into Course Creation</h1>
                    </div>
                    <div class="card_dash_right1">
                        <button class="create_btn_dash"
                            onclick="window.location.href = 'create_new_course.html';">Create Your
                            Course</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="my_courses_tabs">
                    <ul class="nav nav-pills my_crse_nav" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-my-courses-tab" data-toggle="pill"
                                href="instructor_courses.html#pills-my-courses" role="tab"
                                aria-controls="pills-my-courses" aria-selected="true"><i class="uil uil-book-alt"></i>My
                                Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-my-purchases-tab" data-toggle="pill"
                                href="instructor_courses.html#pills-my-purchases" role="tab"
                                aria-controls="pills-my-purchases" aria-selected="false"><i
                                    class="uil uil-download-alt"></i>My Purchases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-upcoming-courses-tab" data-toggle="pill"
                                href="instructor_courses.html#pills-upcoming-courses" role="tab"
                                aria-controls="pills-upcoming-courses" aria-selected="false"><i
                                    class="uil uil-upload-alt"></i>Upcoming Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-discount-tab" data-toggle="pill"
                                href="instructor_courses.html#pills-discount" role="tab" aria-controls="pills-discount"
                                aria-selected="false"><i class="uil uil-tag-alt"></i>Discounts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-promotions-tab" data-toggle="pill"
                                href="instructor_courses.html#pills-promotions" role="tab"
                                aria-controls="pills-promotions" aria-selected="false"><i
                                    class="uil uil-megaphone"></i>Promotions</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">
                            <div class="table-responsive mt-30">
                                <table class="table ucp-table">
                                    <thead class="thead-s">
                                        <tr>


                                            <th scope="col"><input type="text" value="Courses 73" class="form-control">
                                            </th>


                                            <th scope="col"><input type="text" value="Courses 73" class="form-control">
                                            </th>


                                            <th scope="col"><input type="text" value="Categories 10"
                                                    class="form-control"></th>


                                            <th scope="col"><input type="text" value="Inactive 12" class="form-control">
                                            </th>


                                            <th scope="col"><input type="text" value="Active 66" class="form-control">
                                            </th>
                                            <th></th>
                                            <th scope="col"> <span>Filter </span><input type="text" value=""
                                                    class="form-control"></th>
                                        </tr>
                                        <tr>

                                            <th>Title</th>
                                            <th class="text-center" scope="col">Publish Date</th>
                                            <th class="text-center" scope="col">Sales</th>
                                            <th class="text-center" scope="col">Parts</th>
                                            <th class="text-center" scope="col">Category</th>
                                            <th class="text-center" scope="col">Status</th>
                                            <th class="text-center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cozes as $coz)
                                        <tr>

                                            <td>{{$coz->course_title}}</td>
                                            <td class="text-center">{{$coz->created_at}}</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center"><a href="instructor_courses.html#">
                                                    @if(isset($coz->category->category_name))
                                                    {{$coz->category->category_name}}
                                                    @endif
                                                </a></td>
                                            <td class="text-center"><b class="course_active">Active</b></td>
                                            <td class="text-center">
                                                <small class="d-flex">
                                                    <a href="{{route('editcourse',$coz->id)}}" title="Edit"
                                                        class=" btn btn-success p-1">Edit <i class="fa fa-edit"></i></a>
                                                    <a href="" title="Delete" class=" btn btn-danger p-1"
                                                        data-toggle="modal" data-target="#delcmodal">Delete <i
                                                            class="fa fa-trash"></i></a>

                                                </small>
                                            </td>
                                            <div id="delcmodal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-body p-0">
                <div class="card border-0 p-sm-3 p-2 justify-content-center">
                    <div class="card-header pb-0 bg-white border-0 ">
                        <div class="row">
                            <div class="col ml-auto"><button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>
                        </div>
                        <p class="font-weight-bold mb-2"> Are you sure you wanna delete this ?</p>

                    </div>
                    <div class="card-body px-sm-4 mb-2 pt-1 pb-0">
                        <div class="row justify-content-end no-gutters">
                            <div class="col-auto"><button type="button" class="btn btn-light text-muted"
                                    data-dismiss="modal">Cancel</button></div>
                                    <form action="" method="post"></form>
                            <div class="col-auto">
                                <a href="{{ route('deletecourse',$coz->id) }}" class="btn btn-danger px-4"
                                    data-dismiss="modal">Delete</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-my-purchases" role="tabpanel">
                            <div class="table-responsive mt-30">
                                <table class="table ucp-table">
                                    <thead class="thead-s">
                                        <tr>
                                            <th class="text-center" scope="col">Item No.</th>
                                            <th class="cell-ta" scope="col">Title</th>
                                            <th class="cell-ta" scope="col">Vendor</th>
                                            <th class="cell-ta" scope="col">Category</th>
                                            <th class="text-center" scope="col">Delivery Type</th>
                                            <th class="text-center" scope="col">Price</th>
                                            <th class="text-center" scope="col">Purchase Date</th>
                                            <th class="text-center" scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">001</td>
                                            <td class="cell-ta">Course Title Here</td>
                                            <td class="cell-ta"><a href="instructor_courses.html#">Zoena
                                                    Singh</a></td>
                                            <td class="cell-ta"><a href="instructor_courses.html#">Web
                                                    Development</a></td>
                                            <td class="text-center"><b class="course_active">Download</b></td>
                                            <td class="text-center">$15</td>
                                            <td class="text-center">25 March 2020</td>
                                            <td class="text-center">
                                                <a href="instructor_courses.html#" title="Download" class="gray-s"><i
                                                        class="uil uil-download-alt"></i></a>
                                                <a href="instructor_courses.html#" title="Delete" class="gray-s"><i
                                                        class="uil uil-trash-alt"></i></a>
                                                <a href="instructor_courses.html#" title="Print" class="gray-s"><i
                                                        class="uil uil-print"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">002</td>
                                            <td class="cell-ta">Course Title Here</td>
                                            <td class="cell-ta"><a href="instructor_courses.html#">Rock
                                                    William</a></td>
                                            <td class="cell-ta"><a href="instructor_courses.html#">C++</a></td>
                                            <td class="text-center"><b class="course_active">Download</b></td>
                                            <td class="text-center">$20</td>
                                            <td class="text-center">20 March 2020</td>
                                            <td class="text-center">
                                                <a href="instructor_courses.html#" title="Download" class="gray-s"><i
                                                        class="uil uil-download-alt"></i></a>
                                                <a href="instructor_courses.html#" title="Delete" class="gray-s"><i
                                                        class="uil uil-trash-alt"></i></a>
                                                <a href="instructor_courses.html#" title="Print" class="gray-s"><i
                                                        class="uil uil-print"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-upcoming-courses" role="tabpanel">
                            <div class="table-responsive mt-30">
                                <table class="table ucp-table">
                                    <thead class="thead-s">
                                        <tr>
                                            <th class="text-center" scope="col">Item No.</th>
                                            <th class="cell-ta">Title</th>
                                            <th class="text-center" scope="col">Thumbnail</th>
                                            <th class="text-center">Category</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center" scope="col">Status</th>
                                            <th class="text-center" scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">01</td>
                                            <td class="cell-ta">Course Title Here</td>
                                            <td class="text-center"><a href="instructor_courses.html#">View</a>
                                            </td>
                                            <td class="text-center"><a href="instructor_courses.html#">Web
                                                    Development</a></td>
                                            <td class="text-center">$15</td>
                                            <td class="text-center">9 April 2020</td>
                                            <td class="text-center"><b class="course_active">Pending</b></td>
                                            <td class="text-center">
                                                <a href="instructor_courses.html#" title="Edit" class="gray-s"><i
                                                        class="uil uil-edit-alt"></i></a>
                                                <a href="instructor_courses.html#" title="Delete" class="gray-s"><i
                                                        class="uil uil-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">02</td>
                                            <td class="cell-ta">Course Title Here</td>
                                            <td class="text-center"><a href="instructor_courses.html#">View</a>
                                            </td>
                                            <td class="text-center"><a href="instructor_courses.html#">Graphic
                                                    Design</a></td>
                                            <td class="text-center">$12</td>
                                            <td class="text-center">8 April 2020</td>
                                            <td class="text-center"><b class="course_active">Pending</b></td>
                                            <td class="text-center">
                                                <a href="instructor_courses.html#" title="Edit" class="gray-s"><i
                                                        class="uil uil-edit-alt"></i></a>
                                                <a href="instructor_courses.html#" title="Delete" class="gray-s"><i
                                                        class="uil uil-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">03</td>
                                            <td class="cell-ta">Course Title Here</td>
                                            <td class="text-center"><a href="instructor_courses.html#">View</a>
                                            </td>
                                            <td class="text-center"><a href="instructor_courses.html#">Photography</a>
                                            </td>
                                            <td class="text-center">$6</td>
                                            <td class="text-center">7 April 2020</td>
                                            <td class="text-center"><b class="course_active">Pending</b></td>
                                            <td class="text-center">
                                                <a href="instructor_courses.html#" title="Edit" class="gray-s"><i
                                                        class="uil uil-edit-alt"></i></a>
                                                <a href="instructor_courses.html#" title="Delete" class="gray-s"><i
                                                        class="uil uil-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-discount" role="tabpanel">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <div class="panel-title adcrse1250">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="instructor_courses.html#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                New Discount
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="panel-body adcrse_body">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="discount_form">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="mt-20 lbel25">
                                                                    <label>Course*</label>
                                                                </div>
                                                                <select
                                                                    class="ui hj145 dropdown cntry152 prompt srch_explore">
                                                                    <option value="">Select Course</option>
                                                                    <option value="1">Course Title Here</option>
                                                                    <option value="2">Course Title Here</option>
                                                                    <option value="3">Course Title Here</option>
                                                                    <option value="4">Course Title Here</option>
                                                                    <option value="5">Course Title Here</option>
                                                                    <option value="6">Course Title Here</option>
                                                                    <option value="7">Course Title Here</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="ui search focus mt-20 lbel25">
                                                                    <label>Discount Amount</label>
                                                                    <div class="ui left icon input swdh19">
                                                                        <input class="prompt srch_explore" type="number"
                                                                            name="off" value="" required="" min="1"
                                                                            max="99"
                                                                            placeholder="Percent (eg. 20 for 20%)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="ui search focus mt-20 lbel25">
                                                                    <label>Start Date</label>
                                                                    <div class="ui left icon input swdh19">
                                                                        <input
                                                                            class="prompt srch_explore datepicker-here"
                                                                            type="text" data-language="en"
                                                                            placeholder="dd/mm/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="ui search focus mt-20 lbel25">
                                                                    <label>End Date</label>
                                                                    <div class="ui left icon input swdh19">
                                                                        <input
                                                                            class="prompt srch_explore datepicker-here"
                                                                            type="text" data-language="en"
                                                                            placeholder="dd/mm/yyyy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <button class="discount_btn" type="submit">Save
                                                                    Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive mt-30">
                                <table class="table ucp-table">
                                    <thead class="thead-s">
                                        <tr>
                                            <th class="text-center" scope="col">Item No.</th>
                                            <th class="cell-ta">Course</th>
                                            <th class="text-center" scope="col">Start Date</th>
                                            <th class="text-center" scope="col">End Date</th>
                                            <th class="text-center" scope="col">Discount</th>
                                            <th class="text-center" scope="col">Status</th>
                                            <th class="text-center" scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">01</td>
                                            <td class="cell-ta">Course Title Here</td>
                                            <td class="text-center">02 November 2019</td>
                                            <td class="text-center">19 November 2019</td>
                                            <td class="text-center">20%</td>
                                            <td class="text-center"><b class="course_active">Active</b></td>
                                            <td class="text-center">
                                                <a href="instructor_courses.html#" title="Edit" class="gray-s"><i
                                                        class="uil uil-edit-alt"></i></a>
                                                <a href="instructor_courses.html#" title="Delete" class="gray-s"><i
                                                        class="uil uil-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-promotions" role="tabpanel"
                            aria-labelledby="pills-promotions-tab">
                            <div class="promotion_tab mb-10">
                                <img src="images/dashboard/promotion.svg" alt="">
                                <h4>Baby promotion plan is activated!</h4>
                                <p>By activating promotion plans you can improve course views and sales.</p>
                                <button class="plan_link_btn" onclick="window.location.href = '#';">Change New
                                    Plan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
