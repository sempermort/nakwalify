@extends('layouts.stu-layout')



@section('content')
<br>
<div class="" style="position:ralative; margin-top:100px; height:600px">
<div class="sa4d25 m-5 bg-white">
    <div class="container bg-white m-5">
        <div class="row">
            <div class="panel panel-info">
            <div class="panel-heading">Results</div>
            <div class="panel-body">
                <div class="text-center">
                    <h4>You got {{$marks}} out of {{$total}}</h4>
                </div>
            </div>
        </div>

    </div>
    </div>

    <a href="{{route('viewcourse',['id'=>$videos->course_id,'name'=>$videos->id])}}" class="btn btn-primary float-right">Go Back To Lessons</a>
</div>
<br>
@endsection