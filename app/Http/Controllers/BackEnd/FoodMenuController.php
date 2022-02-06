<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodMenu;
use App\Models\FoodMenuCategory;

class FoodMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodmenus = FoodMenu::all();
        $count_foodmenus = FoodMenu::count();
        $foodmenu_categories = FoodMenuCategory::all();
        return view('backend.pages_backend.foodmenus.index',compact('foodmenus','foodmenu_categories','count_foodmenus'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          // pick food menu categories
          
          $foodmenu_categories = FoodMenuCategory::all();
        return view('backend.pages_backend.foodmenus.create',compact('foodmenu_categories'));
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
            
                'foodmenu_photo' => 'required|mimes:doc,pdf,docx,zip,jpeg,jpg,csv,txt,xlx,xls,png',
                
            ]);

        $foodmenu = new FoodMenu;
        $foodmenu->foodmenu_category_id = $request->foodmenu_category_id;
        $foodmenu->foodmenu_name = $request->foodmenu_name;
        $foodmenu->foodmenu_status = $request->foodmenu_status;
        $foodmenu->foodmenu_price = $request->foodmenu_price;
        $foodmenu->foodmenu_description = $request->foodmenu_description;

        // photo
        if($request->hasfile('foodmenu_photo')){
            $file               = $request->file('foodmenu_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/foodmenu_photos/',$filename);
            $foodmenu->foodmenu_photo   = url('uploads' . '/foodmenu_photos/'  . $filename);
        }

        else{
            // return $request;
            $foodmenu->foodmenu_photo = '';
        }

        // dd($foodmenu);
        $foodmenu->save();

        return redirect('/foodmenus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $foodmenu_single = FoodMenu::find($id);
        // dd($foodmenu_single);
        return view('backend.pages_backend.foodmenus.show',compact('foodmenu_single'));

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
        
        $foodmenu_update = FoodMenu::find($id);
        $foodmenu_update->foodmenu_category_id = $request->foodmenu_category_id;
        $foodmenu_update->foodmenu_name = $request->foodmenu_name;
        $foodmenu_update->foodmenu_status = $request->foodmenu_status;

        $foodmenu_update->foodmenu_price = $request->foodmenu_price;
        $foodmenu_update->foodmenu_description = $request->foodmenu_description;

        // photo
        if($request->hasfile('foodmenu_photo')){
            $file               = $request->file('foodmenu_photo');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/foodmenu_photos/',$filename);
            $foodmenu_update->foodmenu_photo   = url('uploads' . '/foodmenu_photos/'  . $filename);
        }


        // dd($foodmenu);
        $foodmenu_update->save();

        return redirect('/foodmenus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foodmenu = FoodMenu::findOrFail($id);
        $foodmenu->delete();

        return redirect('/foodmenus')->with('success', 'Food is successfully deleted');
    }
}
