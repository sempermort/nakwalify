@extends('layouts.user-layout')

@section('content')
 <style>

.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}

.shadow-none {
    box-shadow: none!important;
}

 </style>
 <div class="container ">
     <div class="card m-5">
    <div class="card-body">
        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Skills Acquired
        </h6>
        <small>Web Design</small>
        <div class="progress mb-3" style="height: 5px">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <small>Website Markup</small>
        <div class="progress mb-3" style="height: 5px">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <small>jQuery</small>
        <div class="progress mb-3" style="height: 5px">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <small>Mobile Templating</small>
        <div class="progress mb-3" style="height: 5px">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <small>Backend API integration</small>
        <div class="progress mb-3" style="height: 5px">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div></div>



@endsection