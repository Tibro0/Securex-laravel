<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllPage;
use Illuminate\Http\Request;

class AllPageController extends Controller
{
    public function aboutUsIndex(){
        $keys = ['about_us_page_content'];
        $aboutUsContent = AllPage::whereIn('key', $keys)->pluck('value','key');
        return view('admin.all-page.about-us', compact('aboutUsContent'));
    }

    public function aboutUsPageUpdate(Request $request){
        $validatedData = $request->validate([
            'about_us_page_content' => ['required']
        ]);

        foreach ($validatedData as $key => $value) {
            AllPage::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        toastr()->success('Updated Successfully!');
        return redirect()->back();
    }

    public function serviceIndex(){
        $keys = ['service_page_content'];
        $serviceContent = AllPage::whereIn('key', $keys)->pluck('value','key');
        return view('admin.all-page.service', compact('serviceContent'));
    }

    public function servicePageUpdate(Request $request){
        $validatedData = $request->validate([
            'service_page_content' => ['required']
        ]);

        foreach ($validatedData as $key => $value) {
            AllPage::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        toastr()->success('Updated Successfully!');
        return redirect()->back();
    }

    public function termsAndConditionIndex(){
        $keys = ['terms_and_condition_page_content'];
        $termsAndConditionContent = AllPage::whereIn('key', $keys)->pluck('value','key');
        return view('admin.all-page.terms-and-condition', compact('termsAndConditionContent'));
    }

    public function termsAndConditionPageUpdate(Request $request){
        $validatedData = $request->validate([
            'terms_and_condition_page_content' => ['required']
        ]);

        foreach ($validatedData as $key => $value) {
            AllPage::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        toastr()->success('Updated Successfully!');
        return redirect()->back();
    }
}
