<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllDescription;
use Illuminate\Http\Request;

class FreeQuoteDescriptionController extends Controller
{
    public function index(){
        $keys = ['free_quote_description'];
        $description = AllDescription::whereIn('key', $keys)->pluck('value','key');
        return view('admin.free-quote.description.index', compact('description'));
    }

    public function freeQuoteDescriptionUpdate(Request $request){
        $validatedData = $request->validate([
            'free_quote_description' => ['required'],
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
