@extends('layouts.user-layout')

@section('content')

<div class="card" >
    <div class="card-body">
    <h2 class="text-red">Close your account account</h2>
    <p><strong>Warning:</strong> If you close your account, you will be unsubscribed from all your 5 courses, and will lose access forever. The accountcan not be recovered and your cerificates will be lost forever.</p>
  

    
    
    <input class="form-control"  required="" maxlength="64" placeholder="Enter Your Password">
    
    
   
  </div>
    <div class="card-footer">
        <button class="btn btn-danger" type="submit">Close Account</button>
    </div>
    </div>

@endsection