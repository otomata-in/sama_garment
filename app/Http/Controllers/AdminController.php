<?php

namespace App\Http\Controllers;

use App\Exports\MessageExport;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Poster;
use App\Models\Project;
use App\Models\Register;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function home()
    {
        return view('admin.home');
    }

}
