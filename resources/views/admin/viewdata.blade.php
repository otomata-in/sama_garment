@extends('layouts.admin')

@section('content')


<div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Registration details</h4>
    <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
        <li>Registration Details</li>
    </ul>
</div>


<div class="row">
    <!-- Your Profile Views Chart -->
    <h1>Hello</h1>
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="email-wrapper">
                <div class="email-menu-bar">

                    <div class="email-menu-bar-inner">
                        <ul>
                            <li class="active"><a href="/admin/registration/details"><i class="fa fa-envelope-o"></i>Inbox <span class="badge badge-success">8</span></a></li>

                            <li><a href="/admin/registration/details"><i class="fa fa-trash-o"></i>Trash</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mail-list-container">
                    <div class="mail-toolbar">


                    </div>
                    <div class="mailbox-view">
                        <div class="mailbox-view-title">
                            <h5 class="send-mail-title">Content</h5>
                        </div>
                        <div class="send-mail-details">
                            <div class="d-flex">
                                <div class="send-mail-user">
                                    <div class="send-mail-user-pic">
                                        <img src="assets/images/testimonials/pic3.jpg" alt="">
                                    </div>
                                    <div class="send-mail-user-info">
                                        <h4>{{$regData->r_name}}</h4>
                                        <h5>{{$regData->r_mail}}</h5>
                                    </div>
                                </div>
                                <div class="ml-auto send-mail-full-info">
                                    <div class="time"><span>{{$regData->created_at}}</span></div>

                                    <div class="dropdown all-msg-toolbar ml-auto">
                                        <span class="btn btn-info-icon" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></span>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="read-content-body">
                                <h5 class="read-content-title">Course name</h5>
                                <p class="read-content-name">{{$regData->r_course}}</p>
                                <hr>
                                <h5 class="read-content-title">Message</h5>
                                <p> {{$regData->r_message}}</p>
                                <hr>
                                <h5 class="read-content-title">Contact number</h5>
                                <p class="read-content-name">{{$regData->r_phone}}</p>
                                <hr>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
</div>


<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="email-wrapper">
                <div class="email-menu-bar">

                    <div class="email-menu-bar-inner">
                        <ul>
                            <li class="active"><a href="/admin/registration/details"><i class="fa fa-envelope-o"></i>Inbox <span class="badge badge-success">8</span></a></li>

                            <li><a href="/admin/registration/details"><i class="fa fa-trash-o"></i>Trash</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mail-list-container">
                    <div class="mail-toolbar">


                    </div>
                    <div class="mailbox-view">
                        <div class="mailbox-view-title">
                            <h5 class="send-mail-title">Content</h5>
                        </div>
                        <div class="send-mail-details">
                            <div class="d-flex">
                                <div class="send-mail-user">
                                    <div class="send-mail-user-pic">
                                        <img src="assets/images/testimonials/pic3.jpg" alt="">
                                    </div>
                                    <div class="send-mail-user-info">
                                        <h4>{{$regData->r_name}}</h4>
                                        <h5>{{$regData->r_mail}}</h5>
                                    </div>
                                </div>
                                <div class="ml-auto send-mail-full-info">
                                    <div class="time"><span>{{$regData->created_at}}</span></div>

                                    <div class="dropdown all-msg-toolbar ml-auto">
                                        <span class="btn btn-info-icon" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></span>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="read-content-body">
                                <h5 class="read-content-title">Course name</h5>
                                <p class="read-content-name">{{$regData->r_course}}</p>
                                <hr>
                                <h5 class="read-content-title">Message</h5>
                                <p> {{$regData->r_message}}</p>
                                <hr>
                                <h5 class="read-content-title">Contact number</h5>
                                <p class="read-content-name">{{$regData->r_phone}}</p>
                                <hr>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
</div>

@endsection