<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $count_services = Service::count();
        $service_categories = ServiceCategory::all();
        return view('backend.pages_backend.services.index',compact('services','count_services','service_categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_categories =  ServiceCategory::all();
        return view('backend.pages_backend.services.create',compact('service_categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            
            'service_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        ]);

    $service = new Service();
    $service->service_category_id = $request->service_category_id;
    $service->service_name        = $request->service_name;
    $service->service_description = $request->service_description;

    // photo
    if($request->hasfile('service_photo')){
        $file               = $request->file('service_photo');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/service_photos/',$filename);
        $service->service_photo   = url('uploads' . '/service_photos/'  . $filename);
    }

    else{
        // return $request;
        $service->service_photo = '';
    }

    // dd($gallery);
    $service->save();

    return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service_single = Service::find($id);
        // dd($foodmenu_single);
        return view('backend.pages_backend.services.show',compact('service_single'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
        $service_update = Service::find($id);
        $service_update->service_category_id    = $request->service_category_id;
        $service_update->service_name           = $request->service_name;
        $service_update->service_description    = $request->service_description;

        // photo
        if($request->hasfile('service_photo')){
            $file               = $request->file('service_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/service_photos/',$filename);
            $service_update->service_photo   = url('uploads' . '/service_photos/'  . $filename);
        }


        // dd($foodmenu);
        $service_update->save();

        return redirect('/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect('/services')->with('success', 'Photo is successfully deleted');
    }
}
