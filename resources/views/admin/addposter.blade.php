@extends('layouts.admin')

@section('content')

<div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Add Poster</h4>
    <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Admin</a></li>
        <li>Posters</li>
        <li>Add Poster</li>
    </ul>
</div>
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>New Poster</h4>
            </div>
            <div class="widget-inner">
                <form class="edit-profile m-b30" enctype="multipart/form-data" method="POST" action="/admin/poster/store">
                @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="ml-auto">
                                <h3>1. Basic info</h3>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Title</label>
                            <div>
                                <input name="title" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Description</label>
                            <div>
                                <input name="desc" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Target URL</label>
                            <div>
                                <input name="target_url" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="seperator"></div>
                        <div class="col-12">
                            <div class="ml-auto">
                                <h3>2. Upload image</h3>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Title image</label>
                            <div>
                                <input class="form-control-file" type="file" name="poster_image">
                            </div>
                        </div>

                        <div class="seperator"></div>


                        <div class="col-12">

                            <button type="submit" class="btn">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Your Profile Views Chart END-->
</div>

@endsection