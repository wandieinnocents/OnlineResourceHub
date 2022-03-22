<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Analytics\Period;
// use Spatie\Analytics\Analytics;
use Analytics;

class AnalyticsController extends Controller
{
    //analytics
    public function analytics(){

        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(5));
        $popular = Analytics::fetchMostVisitedPages(Period::days(7), 5);
        // dd($popular);

        //dd($analyticsData);
        return view('backend.pages_backend.analytics.index',compact('analyticsData','popular'));

    }
}
