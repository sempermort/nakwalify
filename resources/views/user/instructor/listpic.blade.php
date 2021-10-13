@foreach($pptic as $key=>$cozy)

<div class="col-md-4">



    <img class="card-img-top  object-cover h-100 w-100" src="{{route('get-copic',explode('/',$cozy->file_path)[1])}}"
        alt="Card image cap">




    <form action="{{ route('deletepics' , $cozy->id ) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button>Delete pic</button>
    </form>


</div>

@endforeach
