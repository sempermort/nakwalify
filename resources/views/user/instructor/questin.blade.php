@extends('layouts.stu-layout')



@section('content')
<br>
<div class="" style="position:ralative; margin-top:100px;">
    <h3 class="mt-5 text-center">{{$vido->course->course_title}} Quiz</h3>

            <form method="post" action="{{ route('quizpost') }}">
                @csrf
                <div class="sa4d25 m-5">


                    <div class="container " style="  margin-top: 3.5rem !important;">
                        <div class="row">
                            <section>
                                <div class="">
                                    <input type="hidden" name="videoid" value="{{$qstn[0]->video_id}}">
                                    <div class="qstni form-group">
                                        @php $n=1 @endphp
                                        @foreach($qstn as $qn)

                                        <p class="lq mb-0 mt-3">{{$n}}. {{$qn->question}}</p>
                                        @if($qn->questiontype=="Multiple")
                                        @php $a='a' @endphp
                                        @foreach($qn->answers as $ans)
                                        <div class="form-check">

                                            <label class="form-check-label">
                                                <span class="mr-3">{{$a}}. </span>
                                                <input type="checkbox" name="{{$qn->id}}[]" class="form-check-input"
                                                    value="{{$ans->id}}">
                                                {{$ans->answer}}
                                            </label>
                                        </div>
                                        @php $a++ @endphp
                                        @endforeach
                                        @endif
                                        @if($qn->questiontype=="true")
                                        @php $a='a' @endphp
                                        @foreach($qn->answers as $ans)
                                        <div class="form-check ml-3">
                                            <input class="form-check-input" type="radio" name="{{$qn->id}}"
                                                value="{{$ans->id}}">
                                            <label class="form-check-label" for="inlineRadio1">{{$a}}.
                                                {{$ans->answer}}</label>
                                        </div>

                                        @php $a++ @endphp
                                        @endforeach
                                        @endif
                                        @if($qn->questiontype=="select")
                                        @php $a='a' @endphp
                                        @foreach($qn->answers as $ans)
                                        <div class="form-check ml-3">
                                            <input class="form-check-input" type="radio" name="{{$qn->id}}"
                                                value="{{$ans->id}}">
                                            <label class="form-check-label" for="inlineRadio1">{{$a}}.
                                                {{$ans->answer}}</label>
                                        </div>

                                        @php $a++ @endphp
                                        @endforeach
                                        @endif
                                        @php $n++ @endphp
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>



            </form>


</div>

@endsection
