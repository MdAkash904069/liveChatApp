<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Str;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::latest()->get();
        return view('admin.company.company',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.company_add');
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
            'company_service' => 'required|unique:companies,company_service',
        ]);
     

        $company = new Company;
        $company->company_service = $request->input('company_service');
        $company->slug = Str::slug($company->company_service);
        if($request->input('details')){
            $company->description = $request->input('details');
        }
        if($request->input('company_code')){
            $company->code_description = $request->input('company_code');
        }
        $company->save();
        
        return back()->with('success', 'New Company Added Successfull'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Company::find($id)->delete();

        return back()->with('success', 'Company Deleted Successfull'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::where('id',$id)->first();
        return view('admin.company.company_edit',compact('company'));
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
            'company_service' => 'required',
        ]);
     

        $company = Company::find($id);
        $company->company_service = $request->input('company_service');
        $company->slug = Str::slug($company->company_service);
        if($request->input('details')){
            $company->description = $request->input('details');
            $company->code_description = "";
        }
        if($request->input('company_code')){
            $company->code_description = $request->input('company_code');
            $company->description = "";
        }
        $company->save();
        
        return back()->with('success', 'Company Updated Added Successfull'); 
    }

    
}
