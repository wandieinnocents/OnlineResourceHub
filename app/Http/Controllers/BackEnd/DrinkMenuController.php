<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\DrinkMenu;
use Illuminate\Http\Request;
use App\Models\DrinkMenuCategory;


class DrinkMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinkmenus = DrinkMenu::all();
        $count_drinkmenus = DrinkMenu::count();
        $drinkmenu_categories = DrinkMenuCategory::all();
        // dd($drinkmenu_categories);
        return view('backend.pages_backend.drinkmenus.index',compact('drinkmenus','count_drinkmenus','drinkmenu_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drinkmenu_categories = DrinkMenuCategory::all();
        return view('backend.pages_backend.drinkmenus.create',compact('drinkmenu_categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $validatedData = $request->validate([
            
            'drinkmenu_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
            
        ]);

    $drinkmenu = new DrinkMenu;
    $drinkmenu->drinkmenu_category_id = $request->drinkmenu_category_id;
    $drinkmenu->drinkmenu_name = $request->drinkmenu_name;
    $drinkmenu->drinkmenu_status = $request->drinkmenu_status;
    $drinkmenu->drinkmenu_price = $request->drinkmenu_price;
    $drinkmenu->drinkmenu_description = $request->drinkmenu_description;

    // photo
    if($request->hasfile('drinkmenu_photo')){
        $file               = $request->file('drinkmenu_photo');
        $extension          = $file->getClientOriginalExtension();  //get image extension
        $filename           = time() . '.' .$extension;
        $file->move('uploads/drinkmenu_photos/',$filename);
        $drinkmenu->drinkmenu_photo   = url('uploads' . '/drinkmenu_photos/'  . $filename);
    }

    else{
        // return $request;
        $drinkmenu->drinkmenu_photo = '';
    }

    // dd($drinkmenu);
    $drinkmenu->save();

    return redirect('/drinkmenus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //

        
        $drinkmenu_update = DrinkMenu::find($id);
        $drinkmenu_update->drinkmenu_category_id = $request->drinkmenu_category_id;
        $drinkmenu_update->drinkmenu_name = $request->drinkmenu_name;
        $drinkmenu_update->drinkmenu_status = $request->drinkmenu_status;

        $drinkmenu_update->drinkmenu_price = $request->drinkmenu_price;
        $drinkmenu_update->drinkmenu_description = $request->drinkmenu_description;

        // photo
        if($request->hasfile('drinkmenu_photo')){
            $file               = $request->file('drinkmenu_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/drinkmenu_photos/',$filename);
            $drinkmenu_update->drinkmenu_photo   = url('uploads' . '/drinkmenu_photos/'  . $filename);
        }

      

        // dd($foodmenu);
        $drinkmenu_update->save();

        return redirect('/drinkmenus');
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
        $drinkmenu = DrinkMenu::findOrFail($id);
        $drinkmenu->delete();

        return redirect('/drinkmenus')->with('success', 'Drink is successfully deleted');
    }
}
