@extends('layouts.stu-layout')

@section('content')

    <div class="sa4d25 p-5">
        <div class="row border">
            <div class=" col-md-3">
                <div class="text-center mt-3">
                    <div class="bg-black rounded-circle ml-auto  mr-auto " style="width:100px; height:100px;">
                        <h1 class="text-white m-auto" style="padding-top: 29%;"> J S</h1>
                    </div>

                    <p class="font-weight-bold">Joe Smith</p>
                </div>
                <div class=" nastay nav-tabs" role="tablist">
                    <a class="waves-effect waves-light active"data-toggle="tab" href="#profile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                    <a class="waves-effect waves-light"data-toggle="tab" href="#photo" role="tab" aria-controls="home" aria-selected="false">Photo </a>
                    <a  class="waves-effect waves-light"data-toggle="tab" href="#account" role="tab" aria-controls="home" aria-selected="false">Account</a>
                    <a  class="waves-effect waves-light" data-toggle="tab" href="#payment" role="tab" aria-controls="home" aria-selected="false">Payment Method</a>
                    <a class="waves-effect waves-light" data-toggle="tab" href="#privacy" role="tab" aria-controls="home" aria-selected="false">Privacy</a>
                    <a  class="waves-effect waves-light"data-toggle="tab" href="#notifications" role="tab" aria-controls="home" aria-selected="false">Notification</a>
                    <a  class="waves-effect waves-light"data-toggle="tab" href="#closeacc" role="tab" aria-controls="home" aria-selected="false">Close Account</a>

                </div>
            </div>
            <div class="tab-content col-md-9 border-left p-0" id="myTabContent">
                <div class="tab-pane fade show active Profile "  id="profile"  role="tabpanel" aria-labelledby="profile">
                    <div class="text-center p-2">
                        <h6 class="font-weight-bolder m-0">Profile</h6>
                        <p class=" p-0"> Add information about yourself</p>
                    </div>
                    <div class="border-top">
                        <div class="container">
                            <label for="exampleInputEmail1">Basics:</label>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <div class="input-group ">
                                    <input type="text" class="form-control" placeholder="HeadLine"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">60</span>
                                    </div>
                                </div>
                                <small id="emailHelp" class="form-text text-muted ml-3"> Add a professional headline
                                    like, "Engineer at Udemy" or "Architect."</small>
                            </div>

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
                        <div class="container">
                            <label for="exampleInputEmail1">Links:</label>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Website (http(s)://..)">
                            </div>

                            <div class="form-group">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">http://twitter.com/</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" placeholder="Twitter Profile"
                                        aria-describedby="basic-addon3">
                                </div>
                                <small id="emailHelp" class="form-text text-muted ml-3"> Add your Twitter username (e.g.
                                    johnsmith).</small>
                            </div>
                            <div class="form-group">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">http://www.facebook.com/</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url"
                                        placeholder="Facebook Profile " aria-describedby="basic-addon3">
                                </div>
                                <small id="emailHelp" class="form-text text-muted ml-3"> Input your Facebook username
                                    (e.g. johnsmith)."</small>
                            </div>
                            <div class="form-group">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">http://www.linkedin.com/</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url"
                                        placeholder="Linkedin Profile" aria-describedby="basic-addon3">
                                </div>
                                <small id="emailHelp" class="form-text text-muted ml-3"> Input your LinkedIn resource id
                                    (e.g. in/johnsmith).</small>
                            </div>
                            <div class="form-group">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">http://www.youtube.com/</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" placeholder="Youtube Profile"
                                        aria-describedby="basic-addon3">
                                </div>
                                <small id="emailHelp" class="form-text text-muted ml-3"> Input your Youtube username
                                    (e.g. johnsmith).</small>
                            </div>

                        </div>
                        <hr class="mt-3">
                        <div class="form-group text-center">
                            <button class="btn btn-default bg-purple">Save</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade Photo "  id="photo"  role="tabpanel" >
                    <div class="text-center p-2">
                        <h6 class="font-weight-bolder m-0">Photo</h6>
                        <p class=" p-0"> Add a nice photo of yourself for your profile.</p>
                    </div>
                    <div class="border-top">
                        <div class="container w-50">
                            <label for="exampleInputEmail1">Image preview</label>
                            <div class="form-group  border">

                                <img src="{{asset('assets/images/anonymous.png')}}" alt=""
                                    class=" m-25 w-50 image-fluid">
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-3">
                        <div class="form-group text-center">
                            <button class="btn btn-default bg-purple">Save</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade Account "  id="account"  role="tabpanel" >
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
                <div class="tab-pane fade Privacy "  id="privacy" role="tabpanel">
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
                <div class="tab-pane fade Payment"  id="payment"  role="tabpanel">
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
                <div class="tab-pane fade Notifications"  id="notifications"  role="tabpanel" >
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
                <div class="tab-pane  fade Close_Account" id="closeacc"  role="tabpanel" >
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
            </div>

        </div>
    </div>

    </div>
    @endsection

 