@extends('layouts.admin')

@section('content')

<div class="db-breadcrumb">
    <h4 class="breadcrumb-title"></h4>
    <ul class="db-breadcrumb-list">
        <li><a href="#">Admin</a>
        <li>Product Details</li>
    </ul>
</div>
<div class="content-block">
<a href="/admin/project/edit/{{$project[0]->id}}" class="btn btn-outline-dark btn-sm shadow mb-5">Edit</a>
    <br>
    <h3>{{$project[0]->project_name}}</h3>
    <p>{{$project[0]->project_desc}}</p>
    <br>

    <!-- Blog Grid ==== -->
    <div class="section-area section-sp1 mt-5">
        <div class="container">
            <div class="ttr-blog-grid-3 row" id="masonry">

                <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                    <form action="/admin/project/newimage/{{$project[0]->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group text-center m-5">
                            <img id="project-preview" src="https://fakeimg.pl/400x500" class="mb-2 project-preview-image" alt="Preview Image">
                            <br>
                            <div class="file-input-wrapper">
                                <button class="btn btn-outline-dark btn-sm shadow"><i class="fa fa-cloud-upload-alt"></i>Select Image</button>
                                <input type="file" id="project_image" name="project_image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-outline-dark btn-sm shadow mb-5"><i class="fa fa-cloud-upload-alt"></i>Upload</button>
                        </div>
                    </form>
                </div>

                @foreach($images as $i)
                <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40 text-center">
                    <div class="recent-news">
                        <div class="action-box">
                            <a href="#" class="magnific-anchor"><img class="project-image" src="/storage/{{ $i->project_detl_image }}" alt=""></a>
                        </div>
                        <div class="info-bx mt-3">
                            <ul class="media-post">
                                <li><a class="btn btn-danger" href="/admin/delete/projectimage/{{$project[0]->id}}/{{$i->id}}"><i class="fa fa-delete">Delete</i></a></li>
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