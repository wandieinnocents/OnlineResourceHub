<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resource;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Career;
use App\Models\Feedback;
use App\Models\FrontEndContact;
use App\Models\ResourceCategory;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;




class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // fetch count - resurces
        $resources      = Resource::all()->count();

        // resource categories
        $resource_categories = ResourceCategory::all()->count();
        // users 
        $users          =  User::all()->count();

        // photos
        $photos         = Gallery::all()->count();
        // services
        $services       = Service::all()->count();
        // feedback
        $feedbacks      = FrontEndContact::all()->count();

        $roles = Role::all()->count();

        return view('backend.pages_backend.dashboard.index', compact('resources','resource_categories','roles','users','photos','services','feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
