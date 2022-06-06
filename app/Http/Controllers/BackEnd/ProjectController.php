<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $count_projects = Project::count();
        $project_categories = ProjectCategory::all();
        return view('backend.pages_backend.projects.index',compact('projects','count_projects','project_categories'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project_categories =  ProjectCategory::all();
        return view('backend.pages_backend.projects.create',compact('project_categories'));
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
            
            'project_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        ]);

    $project = new Project();
    $project->project_category_id = $request->project_category_id;
    $project->project_name        = $request->project_name;
    $project->project_description = $request->project_description;

    // photo
    if($request->hasfile('project_photo')){
        $file               = $request->file('project_photo');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/project_photos/',$filename);
        $project->project_photo   = url('uploads' . '/project_photos/'  . $filename);
    }

    else{
        // return $request;
        $project->project_photo = '';
    }

    // dd($gallery);
    $project->save();

    return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project_single = Project::find($id);
        // dd($foodmenu_single);
        return view('backend.pages_backend.projects.show',compact('project_single'));
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
        $project_update = Project::find($id);
        $project_update->project_category_id    = $request->project_category_id;
        $project_update->project_name           = $request->project_name;
        $project_update->project_description    = $request->project_description;

        // photo
        if($request->hasfile('project_photo')){
            $file               = $request->file('project_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/project_photos/',$filename);
            $project_update->project_photo   = url('uploads' . '/project_photos/'  . $filename);
        }


        // dd($foodmenu);
        $project_update->save();

        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect('/projects')->with('success', 'Project is successfully deleted');
    }
}
