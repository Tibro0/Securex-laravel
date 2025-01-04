<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllPage;
use Illuminate\Http\Request;

class FrontendAllPageController extends Controller
{
    public function aboutUsIndex(){
        $keys = ['about_us_page_content'];
        $aboutUsPageContent = AllPage::whereIn('key', $keys)->pluck('value','key');
        return view('frontend.pages.about-us', compact('aboutUsPageContent'));
    }

    public function ourServiceIndex(){
        $keys = ['service_page_content'];
        $ourServicePageContent = AllPage::whereIn('key', $keys)->pluck('value','key');
        return view('frontend.pages.our-service', compact('ourServicePageContent'));
    }

    public function termsAndConditionIndex(){
        $keys = ['terms_and_condition_page_content'];
        $termsAndConditionPageContent = AllPage::whereIn('key', $keys)->pluck('value','key');
        return view('frontend.pages.terms-and-condition', compact('termsAndConditionPageContent'));
    }

    public function supportIndex(){
        $keys = ['support_page_content'];
        $supportPageContent = AllPage::whereIn('key', $keys)->pluck('value','key');
        return view('frontend.pages.support', compact('supportPageContent'));
    }
}
