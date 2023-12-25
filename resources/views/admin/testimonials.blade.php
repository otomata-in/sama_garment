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

    <a href="/admin/testimonials/add" class="btn btn-success">New Testimonial</a>
    <!-- Blog Grid ==== -->
    <div class="section-area section-sp1">
        <div class="container">
            <div class=" ttr-blog-grid-3  col-12 p-lr0">
                
            
                @foreach($datas as $d)
                <div class="item m-2">
                    <div class="testimonial-bx">
                        <div class="testimonial-thumb">
                            @if($d->t_image == "noimage")
                                <img src="{{ asset('assets/images/testimonials/profile.png') }}" alt="">
                            @else
                                <img src="/storage/{{ $d->t_image }}" alt="">
                            @endif
                        </div>
                        <div class="testimonial-info">
                            <h5 class="name">{{$d->t_name}}</h5>
                            <p>{{$d->t_student_parent}}</p>
                            <a class="btn pull-right" href="/admin/delete/testimonial/{{$d->id}}">Delete</a>
                        </div>
                        <div class="testimonial-content">
                            <p>{{$d->t_review}}</p>
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