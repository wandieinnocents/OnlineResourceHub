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
        
        // fetch visitors and page views
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(5));
        // fetch popular pages
        $popular = Analytics::fetchMostVisitedPages(Period::days(20));
        // total visitors
        $total_visitors = Analytics::fetchTotalVisitorsAndPageViews(Period::days(20))->sortByDesc('date');
        // most top browsers
        $fetch_top_browsers = Analytics::fetchTopBrowsers(Period::days(365));
        // fetch top countries
        // $fetch_top_countries = Analytics::fetchCountries(Period::days(365));
        
        // dd($fetch_top_countries);
        // $analyticsData = Analytics::performQuery(Period::years(1), 'ga:sessions',['metrics' => 'ga:sessions, ga:pageviews','dimensions' => 'ga:country']);
        // dd($analyticsData); 
        return view('backend.pages_backend.analytics.index',compact('analyticsData','popular','total_visitors','fetch_top_browsers'));

    }
}
