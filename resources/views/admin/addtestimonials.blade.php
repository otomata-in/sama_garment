@extends('layouts.admin')

@section('content')

<div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Add Testimonial</h4>
    <ul class="db-breadcrumb-list">
        <li><a href="index.html"><i class="fa fa-home"></i>Admin</a></li>
        <li>Testimonials</li>
        <li>Add</li>
    </ul>
</div>
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>New Testimonial</h4>
            </div>
            <div class="widget-inner">
                <form class="edit-profile m-b30" enctype="multipart/form-data" method="POST" action="/admin/testimonial/store">
                @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="ml-auto">
                                <h3>1. Basic info</h3>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Name</label>
                            <div>
                                <input name="name" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Statement</label>
                            <div>
                                <input name="statement" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Student/Parent</label>
                            <div>
                                <select name="student_parent">
                                    <option value="Student">Student</option>
                                    <option value="Parent">Parent</option>
                                </select>
                            </div>
                        </div>
                        <div class="seperator"></div>
                        <div class="col-12">
                            <div class="ml-auto">
                                <h3>2. Upload image</h3>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Image</label>
                            <div>
                                <input class="form-control-file" type="file" name="face_image">
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