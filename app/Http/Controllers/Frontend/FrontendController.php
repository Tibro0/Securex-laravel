<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Detail;
use App\Models\OurService;
use App\Models\Slider;
use App\Models\WhyChooseUsIconBox;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->get();
        $facts = Detail::where('status', 1)->orderBy('id', 'DESC')->get();
        $aboutUs = AboutUs::all()->toArray();
        $ourServices = OurService::where('status', 1)->orderBy('id', 'DESC')->get();
        $whyChooseUsIconBoxes = WhyChooseUsIconBox::where('status', 1)->orderBy('id', 'DESC')->get();
        $categories = Category::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.home.home', compact('sliders', 'facts', 'aboutUs', 'ourServices', 'whyChooseUsIconBoxes', 'categories'));
    }
}
