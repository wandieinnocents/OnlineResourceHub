<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\ResourceCategory;
use Illuminate\Http\Request;
use App\Models\Resource;
use DB;


class ResourceController extends Controller
{
    public function __construct()
{
ini_set('max_execution_time', 300);
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd("test");
        $categories = DB::table('resource_categories')->get();
        $resources = DB::table('resources')->get();
        // dd($resources);
        // $categories  = ResourceCategory::all();
        // $resources = Resource::all();
        $count_resources = Resource::count();
        return view('backend.pages_backend.resources.index',compact('categories','resources','count_resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ResourceCategory::all();
        return view('backend.pages_backend.resources.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validation
        // validation
        $validatedData = $request->validate([
            'resource_category_id' => 'required',
            'title' => 'required|max:255',
            'audience' => 'required',
            'written_permission' => 'required',
            'written_permission_storage' => 'required',
            'contact_person_written_permission' => 'required',
            'permission_status' => 'required',
            'topic' => 'required',
            'link' => 'required',
            'created_by' => 'required',
            'partner_orgnisations' => 'required',
            'date' => 'required',
            'description' => 'required',
            'attachment' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            'thumbnail' => 'required|mimes:jpeg,jpg,png',

        ]);

        $validatedData = $request->validate([
            
            
            
        ]);

        $resource = new Resource;
        $resource->resource_category_id              = $request->resource_category_id;
        $resource->title                             = $request->title;
        $resource->audience                          = $request->audience;
        $resource->written_permission                = $request->written_permission;
        $resource->written_permission_storage        = $request->written_permission_storage;
        $resource->contact_person_written_permission = $request->contact_person_written_permission;
        $resource->permission_status                 = $request->permission_status;
        $resource->topic                             = $request->topic;
        $resource->link                              = $request->link;
        $resource->created_by                        = $request->created_by;
        $resource->partner_orgnisations              = $request->partner_orgnisations;
        $resource->date                              = $request->date;
        $resource->description                       = $request->description;

    // resource attachment 
    if($request->hasfile('attachment')){
        $file               = $request->file('attachment');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/resource_attachments/',$filename);
        $resource->attachment   = url('uploads' . '/resource_attachments/'  . $filename);
    }

    else{
        // return $request;
        $resource->attachment  = '';
    }

    // Thumbnail 
    // resource thumbnail  
    if($request->hasfile('thumbnail')){
        $file               = $request->file('thumbnail');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/resource_thumbnails/',$filename);
        $resource->thumbnail   = url('uploads' . '/resource_thumbnails/'  . $filename);
    }

    else{
        // return $request;
        $resource->thumbnail  = '';
    }


    // dd("works");
    $resource->save();

    return redirect('/resources');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resource_single = Resource::find($id);
        // dd($foodmenu_single);
        return view('backend.pages_backend.resources.show',compact('resource_single'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        // update resource
        // $validatedData = $request->validate([
            
        //     'attachment' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        // ]);

        $resource = Resource::find($id);
        $resource->resource_category_id              = $request->resource_category_id;
        $resource->title                             = $request->title;
        $resource->audience                          = $request->audience;
        $resource->written_permission                = $request->written_permission;
        $resource->written_permission_storage        = $request->written_permission_storage;
        $resource->contact_person_written_permission = $request->contact_person_written_permission;
        $resource->permission_status                 = $request->permission_status;
        $resource->topic                             = $request->topic;
        $resource->link                              = $request->link;
        $resource->created_by                        = $request->created_by;
        $resource->partner_orgnisations              = $request->partner_orgnisations;
        $resource->date                              = $request->date;
        $resource->description                       = $request->description;

        // resource attachment
        if ($request->hasfile('attachment')) {
            $file               = $request->file('attachment');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/resource_attachments/', $filename);
            $resource->attachment   = url('uploads' . '/resource_attachments/'  . $filename);
        } else {
            // return $request;
            // $resource->attachment  = '';
        }

        // Thumbnail
        // resource thumbnail
        if ($request->hasfile('thumbnail')) {
            $file               = $request->file('thumbnail');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/resource_thumbnails/', $filename);
            $resource->thumbnail   = url('uploads' . '/resource_thumbnails/'  . $filename);
        } else {
            // return $request;
            // $resource->thumbnail  = '';
        }


        // dd("works");
        $resource->save();

        return redirect('/resources');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resource = Resource::findOrFail($id);
        $resource->delete();

        return redirect('/resources')->with('success', 'Resource is successfully deleted');
    }
}
