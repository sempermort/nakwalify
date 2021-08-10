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
            <div class="card">
                <div class="card-body d-flex " style="padding: 1.5rem 3rem !important;">
                    <div class="card p-0 col-4 border-radius-0 m-2 border-0">
                        <div class="card-body p-0 pt-2 m-1 border">
                            <div class=" btn-group-vertical col-12 text-left" role="group">
                                <button type="button" class="btn btn-info mb-2">Video 1</button>
                                <button type="button" class="btn btn-info mb-2">Video 2</button>
                                <button type="button" class="btn btn-info mb-2">Video 3</button>
                                <button type="button" class="btn btn-info mb-2">Video 4</button>
                                <button type="button" class="btn btn-info mb-2">Video 5</button>
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
                        <div class="btn-toolbar d-flex justify-content-between border " role="toolbar"
                            aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2 large " role="group" aria-label="First group">
                                <button type="button" class="btn  btn-info">
                                    <span class="material-icons-outlined   ">play_arrow</span>
                                </button>
                                <button type="button" class="btn btn-secondary">
                                    <span class=" material-icons md-light   ">format_align_center</span>
                                </button>

                                <button type="button" class="btn btn-secondary">
                                    <span class="material-icons">home_work</span>
                                </button>

                            </div>
                            <small>
                                <button type="button" class="btn btn-info btn-pill m-1 float-right ">
                                    Add Video
                                </button>
                            </small>

                        </div>
                        <video width="400" height="240" poster="{{asset('assets/images/course_4.jpg')}}"
                            class="w-100 h-100" controls>

                        </video>
                        <div class="textarea_dt mt-3 ">

                            <div class="ui form swdh339">
                                <label class="control-label">Description</label>
                                <div class="field border border-dark">
                                    <textarea rows="5" name="description" id="id_course_description"
                                        placeholder="Insert your course description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" mrl-3">
                    <button type="button" class="btn btn-info btn-pill float-right col-2 m-3">
                        Upload files
                    </button>
                </div>
                <div class=" mrl-3">
                    <p class="m-3">Upload study Material here</p>
                    <div class=" border rounded">
                        <table class=" table w-100 text-center ">
                            <tr class=" border-bottom">
                                <th scope="col p-1">Title</th>
                                <th scope="col p-1">Link</th>
                                <th scope="col p-1">Format</th>
                                <th scope="col p-1">Date</th>
                            </tr>
                            <tr>
                                <td><br></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><br></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><br></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><br></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div class=" mrl-3 d-flex justify-content-between">
                    <a class="btn btn-info btn-pill  m-1 col-2 " href="{{route('addcourse')}}">
                        Previous
                    </a>
                    <a class="btn btn-info btn-pill  m-1 col-2 " href="{{route('addcover')}}">
                        Next
                    </a>
                </div>

            </div>
        </div>

        @endsection
