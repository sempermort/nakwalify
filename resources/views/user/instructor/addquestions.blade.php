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
                                <div class=" btn-group-vertical col-12  text-left" id="ql" role="group">
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

                            <div class="" id="myTabContent">

                                <div class=" " id="question" role="tabpanel" aria-labelledby="question-tab">
                                    <div class="mt-4">

                                        <div class="form-group  d-flex justify-content-between ">
                                            <label for="questiontype">Question Type</label>
                                            <select class="form-rounded form-control  dropdown " id="questiontype"
                                                name="questiontype">
                                                <option value="Multiple">Multiple Choice</option>
                                                <option value="True&false">True & False</option>
                                                <option value="MoreThanOne">More Than One</option>
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

                        <input type="text" name="video_id" value={{$video_id}} id="pdf-btn" hidden />
                        <div class="mt-5 mb-5">
                            <button class="btn btn-success rounded  m-1 col-2 float-right " id="addvid-btn"
                                type="button" onclick="ajaxed3()" type="submit">
                                save Question
                            </button>
                        </div>
                        <div class="mt-5  d-flex justify-content-between clear-both">
                            <a class="btn btn-info btn-pill  m-1 col-2 " href="{{route('addcourse')}}">
                                Previous
                            </a>
                            <a class="btn btn-info btn-pill  m-1 col-2 " href="{{route('addcover')}">
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
        </script>
        @endsection
