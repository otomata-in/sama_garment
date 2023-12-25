@extends('layouts.admin')

@section('content')

<div class="db-breadcrumb">
    <h4 class="breadcrumb-title">Add Course</h4>
    <ul class="db-breadcrumb-list">
        <li><a href="index.html"><i class="fa fa-home"></i>Admin</a></li>
        <li>Courses</li>
        <li>Add Course</li>
    </ul>
</div>
<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Course Data</h4>
            </div>
            <div class="widget-inner">
                <form class="edit-profile m-b30" enctype="multipart/form-data" method="POST" action="/admin/course/store">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="ml-auto">
                                <h3>1. Basic info</h3>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Course title</label>
                            <div>
                                <input name="title" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Course type</label>
                            <div>
                                <input name="type" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Course Duration</label>
                            <div>
                                <input name="duration" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Course fee</label>
                            <div>
                                <input name="fee" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Faculty name</label>
                            <div>
                                <input name="faculty" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Faculty qualification</label>
                            <div>
                                <input name="faculty_qualification" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="seperator"></div>

                        <div class="col-12 m-t20">
                            <div class="ml-auto m-b5">
                                <h3>2. Description</h3>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label class="col-form-label">Course description</label>
                            <div>
                                <textarea name="desc" class="form-control"> </textarea>
                            </div>
                        </div>

                        <div class="col-12 m-t20">
                            <div class="ml-auto m-b5">
                                <h3>2. Certification details</h3>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label class="col-form-label">Course certification info</label>
                            <div>
                                <textarea name="cert_det" class="form-control"> </textarea>
                            </div>
                        </div>



                        <div class="col-12">
                            <div class="ml-auto">
                                <h3>4. Overview</h3>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Skill level</label>
                            <div>
                                <input name="skill_level" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Course language</label>
                            <div>
                                <input name="language" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Assessments</label>
                            <div>
                                <input name="assessment" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Certificate</label>
                            <div>
                                <input name="cert" class="form-control" type="text" value="">
                            </div>
                        </div>

                        <div class="seperator"></div>


                        <div class="col-12">
                            <div class="ml-auto">
                                <h3>5. Upload image</h3>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Title image</label>
                            <div>
                                <input class="form-control-file" type="file" name="title_image">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Detailed image</label>
                            <div>
                                <input class="form-control-file" type="file" name="detailed_image">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Faculty image</label>
                            <div>
                                <input class="form-control-file" type="file" name="faculty_image">
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