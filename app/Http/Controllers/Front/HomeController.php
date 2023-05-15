<?php

namespace App\Http\Controllers\Front;

use App\Models\JobCategory;
use App\Models\PageHomeItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $home_page_data = PageHomeItem::where('id', 1)->first();
        $job_categories = JobCategory::withCount('rJob')->orderBy('r_job_count','desc')->take(9)->get();
        $all_job_categories = JobCategory::orderBy('name','asc')->get();
        return view('front.home',compact('home_page_data','job_categories','all_job_categories'));
    }
}
