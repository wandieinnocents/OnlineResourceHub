<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    //analytics
    public function analytics(){
        
        return view('backend.pages_backend.analytics.index');

    }
}
