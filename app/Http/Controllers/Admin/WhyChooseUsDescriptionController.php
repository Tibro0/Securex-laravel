<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllDescription;
use Illuminate\Http\Request;

class WhyChooseUsDescriptionController extends Controller
{
    public function index(){
        $keys = ['why_choose_us_description'];
        $description = AllDescription::whereIn('key', $keys)->pluck('value','key');
        return view('admin.why-choose-us.description.index', compact('description'));
    }

    public function whyChooseUsDescriptionUpdate(Request $request){
        $validatedData = $request->validate([
            'why_choose_us_description' => ['required'],
        ]);

        foreach ($validatedData as $key => $value) {
            AllDescription::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        toastr()->success('Updated Successfully!');
        return redirect()->back();
    }
}
