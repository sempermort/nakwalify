@extends('layouts.user-layout')

@section('content')

<div class="sa4d25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12  pt-5">
                    <h2 class="st_title"><i class="uil uil-analysis"></i> Analyics</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="card card-mini analysis_card">
                        <div class="card-body">
                            <h2 class="mb-2">839</h2>
                            <p>Subscribers</p>
                            <div class="chartjs-wrapper">
                                <div class="chartjs-size-monitor"
                                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand"
                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink"
                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                    </div>
                                </div>
                                <canvas id="barChart" style="display: block; width: 378px; height: 100px;" width="378"
                                    height="100" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card card-mini analysis_card">
                        <div class="card-body">
                            <h2 class="mb-1">950</h2>
                            <p>Weekly Visitors</p>
                            <div class="chartjs-wrapper">
                                <div class="chartjs-size-monitor"
                                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand"
                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink"
                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                    </div>
                                </div>
                                <canvas id="dual-line" width="378" height="100"
                                    style="display: block; width: 378px; height: 100px;"
                                    class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card card-mini analysis_card">
                        <div class="card-body">
                            <h2 class="mb-1">20</h2>
                            <p>Weekly Sales</p>
                            <div class="chartjs-wrapper">
                                <div class="chartjs-size-monitor"
                                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand"
                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink"
                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                    </div>
                                </div>
                                <canvas id="line" width="378" height="100"
                                    style="display: block; width: 378px; height: 100px;"
                                    class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12">

                    <div class="card card-default analysis_card p-0" data-scroll-height="450">
                        <div class="card-header">
                            <h2>Sales Of The Year</h2>
                        </div>
                        <div class="card-body p-5" style="height: 450px;">
                            <div class="chartjs-size-monitor"
                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="linechart" class="chartjs chartjs-render-monitor" width="1280" height="366"
                                style="display: block; width: 1280px; height: 366px;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="card card-default analysis_card p-0" id="user-activity">
                        <div class="row no-gutters">
                            <div class="col-xl-8">
                                <div class="border-right">
                                    <div class="card-header justify-content-between">
                                        <h2 class="m-0">User Activity</h2>
                                        <div class="date-range-report ">
                                            <span></span>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs justify-content-between justify-content-xl-start nav-fill"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active pb-md-0" data-toggle="tab"
                                                href="instructor_analyics.html#user" role="tab" aria-selected="true">
                                                <span class="type-name">User</span>
                                                <h4 class="views_title d-inline-block mt-2 mr-2 mb-3">5248</h4>
                                                <span class="text-success1">5%
                                                    <i class="uil uil-top-arrow-from-top"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link pb-md-0" data-toggle="tab"
                                                href="instructor_analyics.html#session" role="tab"
                                                aria-selected="false">
                                                <span class="type-name">Sessions</span>
                                                <h4 class="views_title d-inline-block mt-2 mr-2 mb-3">638</h4>
                                                <span class="text-success">20%
                                                    <i class="uil uil-top-arrow-from-top"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link pb-md-0" data-toggle="tab"
                                                href="instructor_analyics.html#bounce" role="tab" aria-selected="false">
                                                <span class="type-name">Bounce Rate</span>
                                                <h4 class="views_title d-inline-block mt-2 mr-2 mb-3">36.9%</h4>
                                                <span class="text-danger">7%
                                                    <i class="uil uil-arrow-to-bottom"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link pb-md-0" data-toggle="tab"
                                                href="instructor_analyics.html#session-duration" role="tab"
                                                aria-selected="false">
                                                <span class="type-name">Session Duration</span>
                                                <h4 class="views_title d-inline-block mt-2 mr-2 mb-3">4m 49s</h4>
                                                <span class="text-success">15%
                                                    <i class="uil uil-top-arrow-from-top"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="user" role="tabpanel">
                                                <div class="chartjs-size-monitor"
                                                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                                    <div class="chartjs-size-monitor-expand"
                                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                        <div
                                                            style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                        </div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink"
                                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                        <div
                                                            style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <canvas id="activity" class="chartjs p-4 chartjs-render-monitor"
                                                    style="height: 350px; display: block; width: 873px;" width="873"
                                                    height="350"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex flex-wrap bg-white border-top">
                                        <a href="instructor_analyics.html#"
                                            class="text-uppercase py-3 ovrvew-1">Audience Overview</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div data-scroll-height="350">
                                    <div class="card-header justify-content-between">
                                        <h2 class="m-0">Current Users</h2>
                                    </div>
                                    <div class="curntusr145">
                                        <p class="my-2">Ave Page views per minute</p>
                                        <h4>09</h4>
                                    </div>
                                    <div class="border-bottom"></div>
                                    <div class="card-body p-5">
                                        <div class="chartjs-size-monitor"
                                            style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div
                                                    style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                </div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink"
                                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                </div>
                                            </div>
                                        </div>
                                        <canvas id="currentUser" class="chartjs chartjs-render-monitor"
                                            style="height: 300px; display: block; width: 371px;" width="371"
                                            height="300"></canvas>
                                    </div>
                                    <div class="card-footer d-flex flex-wrap bg-white">
                                        <a href="instructor_analyics.html#"
                                            class="text-uppercase py-3 ovrvew-1">Audience Overview</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
