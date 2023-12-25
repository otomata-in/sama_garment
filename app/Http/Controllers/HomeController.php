<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Course;
use App\Models\Poster;
use App\Models\Project;
use App\Models\TestiMonial;
use App\Models\ProjectImage;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $projects = Project::where('project_del_yn','n')->get();
        $testimonials = TestiMonial::where('t_del_yn','=','n')->get();

        return view('home')->with(['projects'=>$projects,'testimonials'=>$testimonials]);
    }

    public function showProjects()
    {
        $projects = Project::where('project_del_yn','n')->get();
        return view('project')->with(['projects'=>$projects]);
    }

    public function showAbout()
    {
        return view('about');
    }



    public function showUplus()
    {
        return view('uplus');
    }

    public function showUniforms()
    {
        return view('uniforms');
    }

    public function showSpecial()
    {
        return view('special');
    }




    public function showProjectData($id)
    {
        $project = Project::where('id',$id)->get();
        $images = ProjectImage::where('project_detl_image_yn','n')->where('project_id',$id)->get();
        return view('projectdata')->with(['project'=>$project,'images'=>$images]);
    }

    public function showServices()
    {
        return view('services');
    }

    public function showEnquiry()
    {
        return view('enquiry');
    }

    public function storeMessage(Request $request)
    {

        $c = new ContactMessage();
        $c->c_name = $request->name;
        $c->c_last_name = $request->lname;
        $c->c_email = $request->email;
        $c->c_subject = $request->subject;
        $c->c_message = $request->message;
        $c->save();

        return redirect('/');
    }





   
}
