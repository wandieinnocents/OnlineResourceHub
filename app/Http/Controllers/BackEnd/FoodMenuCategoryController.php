<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodMenuCategory;

class FoodMenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodmenu_categories = FoodMenuCategory::all();
        return view('backend.pages_backend.foodmenu_categories.index',compact('foodmenu_categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages_backend.foodmenu_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foodmenu_category = new FoodMenuCategory;
        $foodmenu_category->foodmenu_category_name = $request->foodmenu_category_name;

        $foodmenu_category->foodmenu_category_description = $request->foodmenu_category_description;
        $foodmenu_category->save();

        return redirect('/foodmenu_categories');

        
        // dd( $foodmenucategory );



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
        $foodmenu_category_update = FoodMenuCategory::find($id);
        $foodmenu_category_update->foodmenu_category_name = $request->foodmenu_category_name;
        $foodmenu_category_update->foodmenu_category_description = $request->foodmenu_category_description;
        // update
        $foodmenu_category_update->save();
        return redirect('/foodmenu_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foodmenu_category = FoodMenuCategory::findOrFail($id);
        $foodmenu_category->delete();

        return redirect('/foodmenu_categories')->with('success', 'Food is successfully deleted');
    }
}
