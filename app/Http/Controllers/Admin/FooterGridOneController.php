<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterGridOne;
use Illuminate\Http\Request;

class FooterGridOneController extends Controller
{
    public function index(){
        $footerGridOne = FooterGridOne::first();
        return view('admin.footer.footer-grid-one.index', compact('footerGridOne'));
    }

    public function FooterGridOneUpdate(Request $request){
        $request->validate([
            'website_name' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'store_open_time' => ['required', 'max:255'],
        ]);

        FooterGridOne::updateOrCreate(
            ['id' => 1],
            [
                'website_name' => $request->website_name,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'store_open_time' => $request->store_open_time,
            ]
        );


        toastr()->success('Updated Successfully!');
        return redirect()->back();
    }
}
