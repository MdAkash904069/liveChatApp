<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Company;

class HomeController extends Controller
{
    
    public function index()
    {
        
        $testimonials = Testimonial::latest()->get();
        return view('frontend.index',compact('testimonials'));
    }

    public function portfolio(){
        $portfolios = Portfolio::latest()->get();
        return view('frontend.portfolio',compact('portfolios'));
    }

    public function service($name){
        $service = Service::where('slug',$name)->first();
        return view('frontend.service',compact('service'));
    }

    public function company($name){
        $company = Company::where('slug',$name)->first();
        return view('frontend.company',compact('company'));
    }

    public function blog(){
        return view('frontend.blog');
    }

    

}
