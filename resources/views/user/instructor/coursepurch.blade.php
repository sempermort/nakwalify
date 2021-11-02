@extends('layouts.stu-layout')

@section('content')
<div class=" mt-30">

    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="membership_chk_bg">
                        <div class="checkout_title">
                            <h4>Billing Details</h4>
                            <img src="images/line.svg" alt="">
                        </div>

                        <div class="d-flex flex-nowrap m-2">
                            <div class="card-image ">
                                <img src="{{asset('assets/images/instructor_12.jpg')}}" alt="" class="">
                            </div>
                            <div class="w-100">
                                <div class=" m-1">

                                    <div class="title font-weight-bolder">{{$course->course_title}} <h4 class="float-right">{{$course->price>0?"Tshs   $course->price":"Free"}}</h4>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="membership_chk_bg">
                        <div class="checkout_title">
                            <h4>Select Payment Method</h4>
                            <img src="images/line.svg" alt="">
                        </div>
                        <div class="checkout-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a href="checkout_course.html#credit-method-tab" id="credit-tab"
                                        class="nav-link active" data-toggle="tab"><i
                                            class="uil uil-card-atm check_icon5"></i>Mobile option</a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout_course.html#bank-method-tab" id="bank-tab" class="nav-link"
                                        data-toggle="tab"><i class="uil uil-university check_icon5"></i>Bank
                                        Transfer</a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout_course.html#payapl-method-tab" id="payapl-tab" class="nav-link"
                                        data-toggle="tab"><i class="uil uil-paypal check_icon5"></i>Paypal</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="credit-method-tab" role="tabpanel"
                                aria-labelledby="credit-tab">
                                <form>

                                    <div class="form-group">
                                        <input type="text " class="form-control " placeholder="Name of Holder">
                                    </div>
                                    <div class="form-group">
                                        <input type="text " class="form-control " placeholder="Phone number">
                                    </div>
                                    <div class="form-group d-flex">
                                        <input type="number " class="form-control m-1 " placeholder="Amount">
                                        <select name="" class="m-1" id="">
                                            <option value="">Network Brand</option>
                                            <option value="1">Tigo</option>
                                            <option value="2">Vodacom</option>
                                            <option value="3">Airtel</option>
                                            <option value="4">TTCL</option>
                                            <option value="5">HaloTel</option>
                                        </select>

                                    </div>
                                    <div class="form-group">

                                        <label class="">
                                            <input type="checkbox" class="form-check"> Remember this Account
                                        </label>
                                    </div>




                                </form>
                            </div>
                            <div class="tab-pane fade" id="bank-method-tab" role="tabpanel" aria-labelledby="bank-tab">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Account Holder Name</label>
                                                <div class="ui left icon input swdh11 swdh19">
                                                    <input class="prompt srch_explore" type="text"
                                                        name="account[holdername}" value="" required="" maxlength="64"
                                                        placeholder="Enter Your Full Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Account Number</label>
                                                <div class="ui left icon input swdh11 swdh19">
                                                    <input class="prompt srch_explore" type="text"
                                                        name="Account[number]" maxlength="10"
                                                        placeholder="Enter Account Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="lbel25 mt-30">
                                                <label>Bank Name</label>
                                                <select class="ui hj145 dropdown cntry152 prompt srch_explore"
                                                    name="Bank[name]">
                                                    <option value="">State Bank of India</option>
                                                    <option value="1">Indian Bank</option>
                                                    <option value="2">ICICI Bank</option>
                                                    <option value="3">HDFC Bank</option>
                                                    <option value="4">Yes Bank</option>
                                                    <option value="5">Oriental Bank</option>
                                                    <option value="6">Punjab National Bank</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>IFSC Code</label>
                                                <div class="ui left icon input swdh11 swdh19">
                                                    <input class="prompt srch_explore" type="text" name="IFSC[code]"
                                                        maxlength="10" placeholder="Enter IFSC Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="payapl-method-tab" role="tabpanel"
                                aria-labelledby="payapl-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="t-body">After payment via PayPal's secure checkout, we will send you a
                                            link to download your files.</p>
                                        <div class="media h-mt2">
                                            <div class="media__item -align-center">
                                                <p class="t2-body h-m0">PayPal accepts</p>
                                            </div>
                                            <div class="media__body">
                                                <ul id="paypal-gateway" class="financial-institutes">
                                                    <li class="financial-institutes__logo">
                                                        <img alt="Visa" title="Visa"
                                                            src="images/membership/pyicon-1.svg">
                                                    </li>
                                                    <li class="financial-institutes__logo">
                                                        <img alt="MasterCard" title="MasterCard"
                                                            src="images/membership/pyicon-2.svg">
                                                    </li>
                                                    <li class="financial-institutes__logo">
                                                        <img alt="American Express" title="American Express"
                                                            src="images/membership/pyicon-3.svg">
                                                    </li>
                                                    <li class="financial-institutes__logo">
                                                        <img alt="Discover" title="Discover"
                                                            src="images/membership/pyicon-4.svg">
                                                    </li>
                                                    <li class="financial-institutes__logo">
                                                        <img alt="China UnionPay" title="China UnionPay"
                                                            src="images/membership/pyicon-5.svg">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="membership_chk_bg rght1528">
                        <div class="checkout_title">
                            <h4>Order Summary</h4>
                            <img src="images/line.svg" alt="">
                        </div>
                        <div class="order_dt_section">
                            <div class="order_title">
                                <h4>Orignal Price</h4>
                                <div class="order_price">
                                    {{$course->price>0?"Tshs ".($course->price+(5 / 100) * $course->price):"Free"}}</div>
                            </div>
                            <div class="order_title">
                                <h4 class="font-weight-bold">Discount Price</h4>
                                <div class="order_price">
                                    {{$course->price>0?"Tshs ".((5 / 100) * $course->price):"0"}}</div>
                            </div>
                            <div class="order_title">
                                <h2>Total</h2>
                                <div class="order_price5">
                                    {{$course->price>0?"Tshs   $course->price":"Free"}}</div>
                            </div>
                            <div class="scr_text"><i class="uil uil-lock-alt">
                            @if($course->price==0)
                            <a class="btn  btn-info text-white  p-2  col-md-12 mt-1 mb-3 "
                                    href="{{route('viewcourse',$course->id)}}">Go to  free course</a>
                               @else
                                Tshs
                                <button class="chckot_btn" type="submit">Confirm Checkout</button>
                                @endif
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
