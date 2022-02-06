<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        $count_galleries = Gallery::count();
        $gallery_categories = GalleryCategory::all();
        // dd($galleries);

        return view('backend.pages_backend.galleries.index',compact('galleries','count_galleries','gallery_categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery_categories =  GalleryCategory::all();
        return view('backend.pages_backend.galleries.create',compact('gallery_categories'));
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
            
            'gallery_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        ]);

    $gallery = new Gallery();
    $gallery->gallery_category_id = $request->gallery_category_id;
    $gallery->gallery_name = $request->gallery_name;
    $gallery->gallery_description = $request->gallery_description;

    // photo
    if($request->hasfile('gallery_photo')){
        $file               = $request->file('gallery_photo');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/gallery_photos/',$filename);
        $gallery->gallery_photo   = url('uploads' . '/gallery_photos/'  . $filename);
    }

    else{
        // return $request;
        $gallery->gallery_photo = '';
    }

    // dd($gallery);
    $gallery->save();

    return redirect('/galleries');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery_single = Gallery::find($id);
        // dd($foodmenu_single);
        return view('backend.pages_backend.foodmenus.show',compact('gallery_single'));
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
        $gallery_update = Gallery::find($id);
        $gallery_update->gallery_category_id = $request->gallery_category_id;
        $gallery_update->gallery_name = $request->gallery_name;
        $gallery_update->gallery_description = $request->gallery_description;

        // photo
        if($request->hasfile('gallery_photo')){
            $file               = $request->file('gallery_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/gallery_photos/',$filename);
            $gallery_update->gallery_photo   = url('uploads' . '/gallery_photos/'  . $filename);
        }


        // dd($foodmenu);
        $gallery_update->save();

        return redirect('/galleries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect('/galleries')->with('success', 'Photo is successfully deleted');
    }
}
