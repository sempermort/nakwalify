@foreach($pptic as $key=>$cozy)

<div class="col-md-4">

<div class="h-250">
<img class="card-img-top  object-contain w-100" src="{{route('get-copic',explode('/',$cozy->file_path)[1])}}"
        alt="Card image cap">

</div>{{$cozy->id}}





    <form action="{{ route('deletepics' , $cozy->id ) }}" class="float-right" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger">Delete pic</button>
    </form>


</div>

@endforeach
