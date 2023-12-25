<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class ProjectController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where('project_del_yn','n')->get();

        return view('admin.projects.index')->with(['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project_image = ($request->hasFile('project_image')) ? $request->file('project_image')->store('public/project_images') : "images/default_image.png";
        $project_image = str_replace('public/','',$project_image);

        $p = new Project();
        $p->project_name = $request->project_name;
        $p->project_image = $project_image;
        $p->project_desc = $request->project_desc;
        $p->save();
        
        return redirect('/admin/project');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::where('id',$id)->get();
        $project_images = ProjectImage::where('project_id',$id)->where('project_detl_image_yn','n')->get();
        return view('admin.projects.view')->with(['project'=>$project,'images'=>$project_images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $project = Project::where('id',$id)->get();
        return view('admin.projects.edit')->with(['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project_image = ($request->hasFile('project_image')) ? $request->file('project_image')->store('public/project_images') : "images/default_image.png";
        $project_image = str_replace('public/','',$project_image);

        if($project_image === 'noimage'){
            Project::where('id',$id)->update([
                'project_name' => $request->project_name,
                'project_desc' => $request->project_desc,
            ]);
        }
        else{
            Project::where('id',$id)->update([
                'project_name' => $request->project_name,
                'project_desc' => $request->project_desc,
                'project_image' => $project_image,
            ]);
        }

        return redirect('/admin/project/'.$id.'');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::where('id',$id)->update(['project_del_yn'=>'y']);
        return Redirect::back();
    }

    public function newImage($id,Request $request)
    {
        $project_image = ($request->hasFile('project_image')) ? $request->file('project_image')->store('public/project_images/'.$id.'') : "images/default_image.png";
        $project_image = str_replace('public/','',$project_image);

        $p = new ProjectImage();
        $p->project_id = $id;
        $p->project_detl_image = $project_image;
        $p->save();

        return Redirect::back();
        
    }

    public function delImage($id,$image)
    {
        ProjectImage::where('project_id',$id)->where('id',$image)
                    ->update(['project_detl_image_yn'=>'y']);

        return Redirect::back();
    }
}
