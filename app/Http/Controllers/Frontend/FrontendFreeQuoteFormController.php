<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FreeQuoteForm;
use Illuminate\Http\Request;

class FrontendFreeQuoteFormController extends Controller
{
    public function freeQuoteFormStore(Request $request){
        $request->validate([
            'your_name' => ['required', 'max:255'],
            'your_email' => ['required', 'email', 'max:255'],
            'your_mobile' => ['required', 'max:255'],
            'all_service_name_id' => ['required', 'integer'],
        ],[
            'all_service_name_id.required' => 'the service field is required'
        ]);

        $serviceForm = new FreeQuoteForm();
        $serviceForm->your_name = $request->your_name;
        $serviceForm->your_email = $request->your_email;
        $serviceForm->your_mobile = $request->your_mobile;
        $serviceForm->all_service_name_id = $request->all_service_name_id;
        $serviceForm->special_note = $request->special_note;
        $serviceForm->save();

        toastr()->success('Your Message has been Send');
        return redirect()->back();
    }
}
