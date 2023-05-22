<?php

namespace App\Http\Controllers\Front;

use App\Models\JobCategory;
use App\Models\PageHomeItem;
use Illuminate\Http\Request;
use App\Models\WhyChooseItem;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $home_page_data = PageHomeItem::where('id', 1)->first();
        $job_categories = JobCategory::orderBy('name','asc')->take(9)->get();
        $why_choose_items = WhyChooseItem::get();
        $testimonials = Testimonial::get();
        $home_page_data = PageHomeItem::where('id', 1)->first();
        $job_categories = JobCategory::orderBy('name','asc')->take(9)->get();
        return view('front.home',compact('home_page_data','job_categories','why_choose_items','testimonials'),compact('home_page_data','job_categories'));
    }
}
