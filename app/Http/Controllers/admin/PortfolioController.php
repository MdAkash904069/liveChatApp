<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Image;
use App\Models\Contact;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('admin.portfolio.portfolio', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.portfolio_add');
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
            'web_link' => 'required',
            'web_title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $portfolio = new Portfolio;
        if($request->input('menu_name')){
            $portfolio->manu_id = $request->input('menu_name');
        }
        $portfolio->web_title = $request->input('web_title');
        if($request->input('web_type')){
            $portfolio->web_type = $request->input('web_type');
        }
        $portfolio->web_link = $request->input('web_link');

        if($request->hasfile('image')){ 
            $imageName = date('d.m.Y').'_'.rand(10000,99999).'.'.$request->image->extension();  

            // $request->image->move(public_path('frontend/images/course/'), $imageName);

            $destinationPath = public_path('frontend/images/portfolio');
            $file = $request->file('image');
            $img = Image::make($file); 
            $img->save($destinationPath.'/'.$imageName,50);

            $portfolio->image = $imageName;
        }
        $portfolio->save();
        
        return back()->with('success', 'New Portfolio Added Successfull'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //delete section
       
        
        $portfolio = Portfolio::where('id',$id)->first();
        if($portfolio->image){
            unlink('frontend/images/portfolio/'.$portfolio->image);
        }
        Portfolio::find($id)->delete();

        return back()->with('success', 'Portfolio Deleted Successfull'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::where('id',$id)->first();
        return view('admin.portfolio.portfolio_edit',compact('portfolio'));
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
            'web_link' => 'required',
            'web_title' => 'required',
        ]);

        $portfolio = Portfolio::find($id);
        if($request->input('menu_name')){
            $portfolio->manu_id = $request->input('menu_name');
        }
        $portfolio->web_title = $request->input('web_title');
        if($request->input('web_type')){
            $portfolio->web_type = $request->input('web_type');
        }
        $portfolio->web_link = $request->input('web_link');

        if($request->hasfile('image')){ 

            if($portfolio->image){
                unlink('frontend/images/portfolio/'.$portfolio->image);
            }


            $imageName = date('d.m.Y').'_'.rand(10000,99999).'.'.$request->image->extension();  

            // $request->image->move(public_path('frontend/images/course/'), $imageName);

            $destinationPath = public_path('frontend/images/portfolio');
            $file = $request->file('image');
            $img = Image::make($file); 
            $img->save($destinationPath.'/'.$imageName,50);

            $portfolio->image = $imageName;
        }
        $portfolio->save();
        
        return redirect()->route('portfolio.index')->with('success', 'New Portfolio Updated Successfull'); 
    }

    public function admin_contact(){
        $contact = Contact::latest()->get();
        return view('admin.contact', compact('contact'));
    }

    
}
