@extends('layouts.admin')
@section('content')

<div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Dashboard</h4>
    <ul class="db-breadcrumb-list">
        <li><a href="index.html"><i class="fa fa-home"></i>Dashboard</a></li>

    </ul>
</div>
<!-- Card -->
<div class="row">
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg1">
            <div class="wc-item">
                <h4 class="wc-title">
                    Total Trafic
                </h4>
                <span class="wc-des">
                    All time
                </span>
                <span class="wc-stats">
                    <span class="counter">18</span>K
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        Change
                    </span>
                    <span class="wc-number ml-auto">
                        78%
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg2">
            <div class="wc-item">
                <h4 class="wc-title">
                    New Enrolment
                </h4>
                <span class="wc-des">
                    Registeration count
                </span>
                <span class="wc-stats counter">
                    120
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        Change
                    </span>
                    <span class="wc-number ml-auto">
                        88%
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg3">
            <div class="wc-item">
                <h4 class="wc-title">
                    WhatsApp
                </h4>
                <span class="wc-des">
                    Interactions
                </span>
                <span class="wc-stats counter">
                    772
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        Change
                    </span>
                    <span class="wc-number ml-auto">
                        65%
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
        <div class="widget-card widget-bg4">
            <div class="wc-item">
                <h4 class="wc-title">
                    Course Views
                </h4>
                <span class="wc-des">
                    Course reach
                </span>
                <span class="wc-stats counter">
                    12
                </span>
                <div class="progress wc-progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="wc-progress-bx">
                    <span class="wc-change">
                        Change
                    </span>
                    <span class="wc-number ml-auto">
                        90%
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Card END -->
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-8 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Site Views</h4>
            </div>
            <div class="widget-inner">
                <canvas id="chart" width="100" height="45"></canvas>
            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
    <div class="col-lg-4 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Notifications</h4>
            </div>
            <div class="widget-inner">
                <div class="noti-box-list">
                    <ul>

                        <li>
                            <span class="notification-icon dashbg-red">
                                <i class="fa fa-bullhorn"></i>
                            </span>
                            <span class="notification-text">
                                <span>12 new registeration</span>
                            </span>
                            <span class="notification-time">

                                <span> 2 May</span>
                            </span>
                        </li>
                        <li>
                            <span class="notification-icon dashbg-red">
                                <i class="fa fa-bullhorn"></i>
                            </span>
                            <span class="notification-text">
                                <span>last logined @11:30pm</span>
                            </span>
                            <span class="notification-time">

                                <span> 2 May</span>
                            </span>
                        </li>
                        <li>
                            <span class="notification-icon dashbg-red">
                                <i class="fa fa-bullhorn"></i>
                            </span>
                            <span class="notification-text">
                                <span>up time</span>
                            </span>
                            <span class="notification-time">

                                <span> 97%</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection