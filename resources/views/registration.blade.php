@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('assets/images/banner/banner2.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Message Us</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Message Us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        <!-- inner page banner -->
        <div class="page-banner contact-page">
            <div class="container-fuild">
                <div class="row m-lr0">
                    <div class="col-lg-6 col-md-6 section-sp2 p-lr30" style="margin: 0 auto;">
                        <form class="contact-bx" enctype="multipart/form-data" action="/register/submit" method="POST">
                            @csrf
                            <div class="ajax-message"></div>
                            <div class="heading-bx left p-r15">
                                <h2 class="title-head">Text <span>Here</span></h2>
                                <p>ask your querys</p>
                            </div>
                            <div class="row placeani">
                                <div class="col-lg-12 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Your Name</label>
                                            <input name="name" type="text" required
                                                class="form-control valid-character">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Your Email Address</label>
                                            <input name="email" type="email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Your Phone</label>
                                            <input name="phone" type="text" required class="form-control int-value">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Type Message</label>
                                            <textarea name="message" rows="4" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button name="submit" type="submit" class="btn button-md"> Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
    </div>
    <!-- Content END-->
@endsection
