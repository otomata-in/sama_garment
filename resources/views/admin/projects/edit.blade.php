@extends('layouts.admin')

@section('content')

<div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Edit Product</h4>
    <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Admin</a></li>
        <li>Products</li>
        <li>Edit Product</li>
    </ul>
</div>
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Edit Product</h4>
            </div>
            <div class="widget-inner">
                <form class="edit-profile m-b30" enctype="multipart/form-data" method="POST" action="/admin/project/update/{{$project[0]->id}}">
                @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="ml-auto">
                                <h3>1. Basic info</h3>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Product Name</label>
                            <div>
                                <input name="project_name" class="form-control inputStyle" type="text" value="{{$project[0]->project_name}}">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Product Description</label>
                            <div>
                                <input name="project_desc" class="form-control inputStyle" type="text" value="{{$project[0]->project_desc}}">
                            </div>
                        </div>
                        <div class="seperator"></div>
                        <div class="col-12">
                            <div class="ml-auto">
                                <h3>2. Upload image</h3>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Product image</label>
                            <div>
                                <input class="form-control-file" type="file" name="project_image" accept="image/*">
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