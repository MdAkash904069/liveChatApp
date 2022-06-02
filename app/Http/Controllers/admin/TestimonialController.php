<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonial.testimonial', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.testimonial_add');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $testimonial = new Testimonial;
      
        $testimonial->name = $request->input('name');
        $testimonial->passion = $request->input('title');
        $testimonial->desc = $request->input('desc');

        if($request->hasfile('image')){ 
            $imageName = date('d.m.Y').'_'.rand(10000,99999).'.'.$request->image->extension();  
            $destinationPath = public_path('frontend/images/testimonial');
            $file = $request->file('image');
            $img = Image::make($file); 
            $img->save($destinationPath.'/'.$imageName,50);

            $testimonial->image = $imageName;
        }
        $testimonial->save();
        
        return back()->with('success', 'New Tesmimonial Added Successfull'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        if($testimonial->image){
            unlink('frontend/images/testimonial/'.$testimonial->image);
        }
        Testimonial::find($id)->delete();

        return back()->with('success', 'Testimonial Deleted Successfull');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        return view('admin.testimonial.testimonial_edit',compact('testimonial'));
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
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'desc' => 'required',
        ]);

        $testimonial = Testimonial::find($id);
      
        $testimonial->name = $request->input('name');
        $testimonial->passion = $request->input('title');
        $testimonial->desc = $request->input('desc');

        if($request->hasfile('image')){ 

            if($testimonial->image){
                unlink('frontend/images/testimonial/'.$testimonial->image);
            }

            $imageName = date('d.m.Y').'_'.rand(10000,99999).'.'.$request->image->extension();  
            $destinationPath = public_path('frontend/images/testimonial');
            $file = $request->file('image');
            $img = Image::make($file); 
            $img->save($destinationPath.'/'.$imageName,50);

            $testimonial->image = $imageName;
        }
        $testimonial->save();
        
        return back()->with('success', 'New Tesmimonial Updated Successfull'); 
    }


}
