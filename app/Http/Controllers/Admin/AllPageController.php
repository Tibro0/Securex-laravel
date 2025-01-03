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
}
