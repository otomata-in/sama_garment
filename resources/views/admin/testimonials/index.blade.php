@extends('layouts.admin')

@section('content')

<div class="db-breadcrumb">
    <h4 class="breadcrumb-title"></h4>
    <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Admin</a>
        <li>Testimonials</li>
    </ul>
</div>
<div class="content-block">

    <a href="/admin/testimonial/create" class="btn btn-success">New Testimonial</a>
    <!-- Blog Grid ==== -->
    <div class="section-area section-sp1 mt-5">
        <div class="container">
            <div class="ttr-blog-grid-3 row" id="masonry">

                @foreach($testimonials as $t)
                <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40 text-center">
                    <div class="recent-news">
                        <div class="action-box">
                            <a href="#" class="magnific-anchor"><img class="testimonial-image" src="/storage/{{ $t->t_person_image }}" alt=""></a>
                        </div>
                        <div class="info-bx mt-3">
                            <p>{{$t->t_person_review}}</p>
                            <h6>{{$t->t_person_name}}</h6>
                            <ul class="media-post">
                                <li><a class="btn btn-danger" href="/admin/testimonial/delete/{{$t->id}}"><i class="fa fa-delete">Delete</i></a>
                                    <a class="btn btn-warning" href="/admin/testimonial/edit/{{$t->id}}"><i class="fa fa-delete">Edit</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
        <!-- Blog Grid END ==== -->
    </div>
</div>



@endsection