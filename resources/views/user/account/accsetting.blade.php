@extends('layouts.stu-layout')

@section('content')

<div class="sa4d25 p-5" style="width: 85%;
margin: 5rem auto;">
    <div class="row border">
        <div class=" col-md-3">
            <div class="text-center mt-3">
                <div class="bg-black rounded-circle ml-auto  mr-auto " style="width:100px; height:100px;">
                @if(isset($muser->profpic->file_path))
                                        @php
                                        $src=$muser->profpic->file_path;
                                        @endphp
                                        <img class="card-img-top"  src="{{route('profpic',explode('/',$src)[1])}}" alt="Card image cap">
                                        @endif

                </div>

                <p class="font-weight-bold">{{$muser->fname}}
                    {{$muser->lname}}</p>
            </div>
            <div class=" nastay nav-tabs" role="tablist">
                <a class="waves-effect waves-light active" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="home" aria-selected="true">Profile</a>
                <a class="waves-effect waves-light" data-toggle="tab" href="#photo" role="tab" aria-controls="home"
                    aria-selected="false">Photo </a>
                <a class="waves-effect waves-light" data-toggle="tab" href="#account" role="tab" aria-controls="home"
                    aria-selected="false">Account</a>
                <a class="waves-effect waves-light" data-toggle="tab" href="#payment" role="tab" aria-controls="home"
                    aria-selected="false">Payment Method</a>
                <a class="waves-effect waves-light" data-toggle="tab" href="#privacy" role="tab" aria-controls="home"
                    aria-selected="false">Privacy</a>
                    <a class="waves-effect waves-light" data-toggle="tab" href="#achieve" role="tab" aria-controls="home"
                    aria-selected="false">Achievements</a>
                <a class="waves-effect waves-light" data-toggle="tab" href="#notifications" role="tab"
                    aria-controls="home" aria-selected="false">Notification</a>
                <a class="waves-effect waves-light" data-toggle="tab" href="#closeacc" role="tab" aria-controls="home"
                    aria-selected="false">Close Account</a>

            </div>
        </div>
        <div class="tab-content col-md-9 border-left p-0" id="myTabContent">
            <div class="tab-pane fade show active Profile " id="profile" role="tabpanel" aria-labelledby="profile">
                <div class="text-center p-2">
                    <h6 class="font-weight-bolder m-0">Profile</h6>
                    <p class=" p-0"> Add information about yourself</p>
                </div>
                <div class="border-top">
                  <form action="" method="post">
                    <div class="container">

                        <label for="exampleInputEmail1">Basics:</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="fname" value="{{$muser->fname}}"
                                aria-describedby="fname" name="fname">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="lname" value="{{$muser->lname}}"
                                aria-describedby="fname" name="lname">
                        </div>
                        <div class="form-group">
                            <div class="input-group ">
                                <input type="email" class="form-control" name="email"
                                value="{{$muser->email}}"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">60</span>
                                </div>
                            </div>                        </div>

                        <div class="form-group shadow-textarea">
                            <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3"
                                placeholder="Write something here..."></textarea>
                        </div>

                        <div class="form-group">

                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>English</option>
                                <option>Kiswahili</option>

                            </select>
                        </div>
                    </div>
                    <hr class="mt-5">


                    <div class="form-group text-center">
                        <button type="button" class="btn btn-default bg-purple" onclick="basic()">Save</button>
                    </div>
                    </form>
                </div>
            </div>

            <div class="tab-pane fade Photo " id="photo" role="tabpanel">
                <div class="text-center p-2">
                    <h6 class="font-weight-bolder m-0">Photo</h6>
                    <p class=" p-0"> Add a nice photo of yourself for your profile.</p>
                </div>
                <div class="border-top">
                    <div class="container w-50">
                        <label for="exampleInputEmail1">Image preview</label>
                        <div class="form-group  border">

                            <img src="{{asset('assets/images/anonymous.png')}}" alt="" class="pico m-25 w-50 image-fluid">
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" hidden class="custom-file-input"
                                    onchange="picu(this)" name="profpic"id="profpic">
                                    <label class="picflabel custom-file-label" for="profpic" id="picflabel" >No Choosen file</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <hr class="mt-3">
                    <div class="form-group text-center">
                        <button type="button" onclick="photo()" class="btn btn-default bg-purple">Save</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade Account " id="account" role="tabpanel">
                <div class="text-center p-2">
                    <h6 class="font-weight-bolder m-0">Account</h6>
                    <p class=" p-0"> Edit Your Account Setting and Change Your Password Here</p>
                </div>
                <div class="border-top">
                    <div class="container">
                        <label for="exampleInputEmail1">Email:</label>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="" Value="joesmith@gmail.com">
                        </div>

                    </div>
                    <hr class="mt-5">
                    <div class="container">
                        <label for="exampleInputEmail1">Password:</label>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Current Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Retype New Password">
                        </div>

                    </div>
                    <hr class="mt-3">
                    <div class="form-group text-center">
                        <button class="btn btn-default bg-purple">Save</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade Privacy " id="privacy" role="tabpanel">
                <div class="text-center p-2">
                    <h6 class="font-weight-bolder m-0">Privacy</h6>
                    <p class=" p-0">Modify Your privacy settings Here</p>
                </div>
                <div class="border-top">
                    <div class="container">
                        <label for="exampleInputEmail1">Profile Page Settings</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Show your profile to logged-in users
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                            <label class="form-check-label" for="defaultCheck2">
                                Show courses you're taking on your profile page
                            </label>
                        </div>

                    </div>

                    <hr class="mt-3">
                    <div class="form-group text-center">
                        <button class="btn btn-default bg-purple">Save</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade Payment" id="payment" role="tabpanel">
                <div class="text-left p-2">
                    <h2 class="font-weight-bolder text-left m-4">Payment Methods</h2>
                    <div class=" m-4 " style="background:#f7f9fa !important;">
                        <div class="form-check p-4 ">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Show my saved payment methods on checkout step
                            </label>
                        </div>
                    </div>

                    <h6 class="font-weight-bold m-4">Your Saved Payment Methods</h6>
                    <div class="text-center m-4" style="border:2px dotted ">
                        <p class=" mt-5 mb-5"><small>You don't have any Saved Payment Methods</small></p>
                    </div>

                </div>

            </div>
            <div class="tab-pane fade Notifications" id="notifications" role="tabpanel">
                <div class="text-center p-2">
                    <h6 class="font-weight-bolder m-0">Notifications</h6>
                    <p class=" p-0">Turn promotional email notifications from Naqualify on or off</p>
                </div>
                <div class="border-top">
                    <div class="container">
                        <label for="exampleInputEmail1">I want to receive:</label>
                        <div class=" border border-dark form-group p-2">
                            <div class="form-check  ">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Promotions,course recommendations, and helpful recommemendations from Naqualify
                                </label>
                            </div>
                        </div>
                        <div class="border border-dark form-group p-2">
                            <div class="form-check  ">
                                <input class="form-check-input p-2" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Dont sent Me any emails. <br>
                                    If this box is checked, please note that you will continue to receive important
                                    transactions emails such like purchase receipts

                                </label>
                            </div>
                        </div>

                    </div>

                    <hr class="mt-3">
                    <div class="form-group text-center">
                        <button class="btn btn-default bg-purple">Save</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane  fade Close_Account" id="closeacc" role="tabpanel">
                <div class="text-center p-2">
                    <h6 class="font-weight-bolder m-0">Close Account</h6>
                    <p class=" p-0">Close Account Pamanently</p>
                </div>
                <div class="border-top">

                    <p class="">Close your account</p>
                    <p class=""><strong>Warning:</strong> If you close your account, you will be unsubscribed from
                        all your courses, and will lose access forever. The account can not be recovered and your
                        cerificates will be lost forever.</p>
                    <div class="m-3">
                        <button class="btn btn-danger" type="submit">Close Account</button>
                    </div>

                    <hr class="mt-3 mb-5">

                </div>
            </div>



            <div class="tab-pane  fade Close_Account p-4" id="achieve" role="tabpanel">
            <div class="hacker-medals m-3 d-flex">
                <div class="hacker-medal "><img
                        src="https://hrcdn.net/community-frontend/assets/badges/gold_small-39fafc44b8.svg"
                        height="25">24</div>
                <div class="hacker-medal"><img
                        src="https://hrcdn.net/community-frontend/assets/badges/silver_small-642ca0f0a7.svg"
                        height="25">0</div>
                <div class="hacker-medal"><img
                        src="https://hrcdn.net/community-frontend/assets/badges/bronze_small-4e1f12bf64.svg"
                        height="25">2</div>
            </div>
            <div class="profile-contests-view">
                <div>
                    <h2 class="month-divider">October, 2018</h2>
                    <div class="d-flex"><a class=""
                           href="/contests/hourrank-30?h_r=profile">HourRank 30</a>
                           <span class="participant-medal">
                               <img
                                src="https://hrcdn.net/social_badges/gold_small.svg"
                                style="position: relative; left: 10px; top: 5px;" alt="social badges"
                                height="25"></span>
                                <a class="history-list-item-link results-link"
                            data-analytics="ContestResultsSocial" data-attr1="hourrank-30" data-attr2="Gennady"
                            data-attr3="profile" href="/results/hourrank-30/Gennady?h_r=profile">View Results</a></div>
                </div>
                <div>
                    <h2 class="month-divider">September, 2018</h2>
                    <div class="history-list-item"><a class="history-list-item-link contest-name"
                            data-analytics="ProfileContestsLink" data-attr1="Gennady"
                            data-attr2="university-codesprint-5" data-attr11="false"
                            href="/contests/university-codesprint-5?h_r=profile">University Codesprint 5</a><span class="participant-medal"><img
                                src="https://hrcdn.net/social_badges/gold_small.svg"
                                style="position: relative; left: 10px; top: 5px;" alt="social badges"
                                height="25"></span><a class="history-list-item-link results-link"
                            data-analytics="ContestResultsSocial" data-attr1="university-codesprint-5"
                            data-attr2="Gennady" data-attr3="profile"
                            href="/results/university-codesprint-5/Gennady?h_r=profile">View Results</a></div>
                </div>
                <div>
                    <h2 class="month-divider">August, 2018</h2>
                    <div class="history-list-item"><a class="history-list-item-link contest-name"
                            data-analytics="ProfileContestsLink" data-attr1="Gennady" data-attr2="hourrank-29"
                            data-attr11="false" href="/contests/hourrank-29?h_r=profile">HourRank 29</a><span class="participant-medal"><img
                                src="https://hrcdn.net/social_badges/gold_small.svg"
                                style="position: relative; left: 10px; top: 5px;" alt="social badges"
                                height="25"></span><a class="history-list-item-link results-link"
                            data-analytics="ContestResultsSocial" data-attr1="hourrank-29" data-attr2="Gennady"
                            data-attr3="profile" href="/results/hourrank-29/Gennady?h_r=profile">View Results</a></div>
                </div>
                <div>
                    <h2 class="month-divider">June, 2018</h2>
                    <div class="history-list-item"><a class="history-list-item-link contest-name"
                            data-analytics="ProfileContestsLink" data-attr1="Gennady" data-attr2="hourrank-28"
                            data-attr11="false" href="/contests/hourrank-28?h_r=profile">HourRank 28</a><span class="participant-medal"><img
                                src="https://hrcdn.net/social_badges/gold_small.svg"
                                style="position: relative; left: 10px; top: 5px;" alt="social badges"
                                height="25"></span><a class="history-list-item-link results-link"
                            data-analytics="ContestResultsSocial" data-attr1="hourrank-28" data-attr2="Gennady"
                            data-attr3="profile" href="/results/hourrank-28/Gennady?h_r=profile">View Results</a></div>
                </div>
                <div>
                    <h2 class="month-divider">May, 2018</h2>
                    <div class="history-list-item"><a class="history-list-item-link contest-name"
                            data-analytics="ProfileContestsLink" data-attr1="Gennady" data-attr2="world-codesprint-13"
                            data-attr11="false" href="/contests/world-codesprint-13?h_r=profile">World CodeSprint
                            13</a><span
                            class="participant-medal"><img src="https://hrcdn.net/social_badges/gold_small.svg"
                                style="position: relative; left: 10px; top: 5px;" alt="social badges"
                                height="25"></span><a class="history-list-item-link results-link"
                            data-analytics="ContestResultsSocial" data-attr1="world-codesprint-13" data-attr2="Gennady"
                            data-attr3="profile" href="/results/world-codesprint-13/Gennady?h_r=profile">View
                            Results</a></div>
                </div><button class="ui-btn ui-btn-normal ui-btn-line-primary history-load-more ui-btn-styled"
                    data-analytics="ProfileContestsLoadMore" data-attr1="Gennady" data-attr11="false">
                    <div class="ui-content align-icon-right">
                        <a class="ui-text btn btn-outline-success" href="#" aria-hidden="false">Load
                            more...</a></div>
                </button>
            </div>

            </div>

        </div>

    </div>
</div>

</div>

<script>

function picu(url){
var label = document.getElementById('picflabel');

label.textContent = url.value;
if (url.files && url.files[0]) {
    var ImageDir = new FileReader();
    ImageDir.onload = function (e) {
        $('.pico').attr('src', e.target.result);
        $('.pico').css('height', 'auto');
        label.textContent = url.value;
    }
    ImageDir.readAsDataURL(url.files[0]);
}
}
function basic()
{

    var form_data = new FormData();

            form_data.append('fname', $('input[name=fname]').val());
            form_data.append('lname', $('input[name=lname]').val());
            form_data.append('email', $('input[name=email]').val());

            $.ajax({
                type: 'POST',
                url: "{{route('edituser') }}",
                data: form_data,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if ((data.errors)) {
                        alert(data.errors);
                    } else {

                         window.location.reload();
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
}
function photo()
{

    var form_data = new FormData();
    form_data.append('profpic', $('#profpic').prop('files')[0]);

    $.ajax({
                type: 'POST',
                url:"{{route('edituserpic') }}",
                data: form_data,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if ((data.errors)) {
                        alert(data.errors);
                    } else {

                        // window.location.reload();
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
}


</script>

@endsection
