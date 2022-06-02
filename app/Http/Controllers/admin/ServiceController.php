<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.service.service',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.service_add');
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
            'service_name' => 'required|unique:services,service_name',
            // 'service' => 'required_without:code_service',
            // 'code_service' => 'required_without:service',
        ]);
     

        $service = new Service;
        $service->service_name = $request->input('service_name');
        $service->slug = Str::slug($service->service_name);
        if($request->input('service')){
            $service->description = $request->input('service');
        }
        if($request->input('service_code')){
            $service->code_description = $request->input('service_code');
        }
        $service->save();
        
        return back()->with('success', 'New Service Added Successfull'); 
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
        
        Service::find($id)->delete();

        return back()->with('success', 'Service Deleted Successfull'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::where('id',$id)->first();
        return view('admin.service.service_edit',compact('service'));
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
            'service_name' => 'required',
            // 'service' => 'required_without:code_service',
            // 'code_service' => 'required_without:service',
        ]);
     

        $service = Service::find($id);

        $service->service_name = $request->input('service_name');
        if($request->input('service')){
            $service->description = $request->input('service');
            $service->code_description = "";
        }
        if($request->input('service_code')){
            $service->code_description = $request->input('service_code');
            $service->description = "";
        }
        $service->save();
        
        return back()->with('success', 'New Service Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
