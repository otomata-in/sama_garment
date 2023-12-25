<?php

namespace App\Http\Controllers;

use App\Models\TestiMonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TestiMonialController extends Controller
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
        $testimonials = TestiMonial::where('t_del_yn','n')->get();
        return view('admin.testimonials.index')->with(['testimonials'=>$testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person_image = ($request->hasFile('person_image')) ? $request->file('person_image')->store('public/person_images') : "images/default_image.png";
        $person_image = str_replace('public/','',$person_image);

        $t = new TestiMonial();
        $t->t_person_name = $request->person_name;
        $t->t_person_image = $person_image;
        $t->t_person_review = $request->person_review;
        $t->save();
        
        return redirect('/admin/testimonial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestiMonial  $testiMonial
     * @return \Illuminate\Http\Response
     */
    public function show(TestiMonial $testiMonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestiMonial  $testiMonial
     * @return \Illuminate\Http\Response
     */
    public function edit(TestiMonial $testiMonial,$id)
    {
        $testimonial = TestiMonial::where('id',$id)->get();
        return view('admin.testimonials.edit')->with(['testimonial'=>$testimonial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestiMonial  $testiMonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $person_image = ($request->hasFile('person_image')) ? $request->file('person_image')->store('public/person_images') : "images/default_image.png";
        $person_image = str_replace('public/','',$person_image);

        if($person_image === 'noimage'){
            TestiMonial::where('id',$id)->update([
                't_person_name' => $request->person_name,
                't_person_review' => $request->person_review,
            ]);
        }
        else{
            TestiMonial::where('id',$id)->update([
                't_person_name' => $request->person_name,
                't_person_review' => $request->person_review,
                't_person_image' => $person_image,
            ]);
        }

        return redirect('/admin/testimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestiMonial  $testiMonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestiMonial $testiMonial,$id)
    {
        TestiMonial::where('id',$id)->update([
            't_del_yn' => 'y',
        ]);

        return Redirect::back();
    }
}
