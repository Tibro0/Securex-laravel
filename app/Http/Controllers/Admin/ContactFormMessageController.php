<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ContactFormMessageDataTable;
use App\Http\Controllers\Controller;
use App\Models\AllDescription;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ContactFormMessageDataTable $dataTable)
    {
        return $dataTable->render('admin.contact-form-message.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contactFormMessage = ContactForm::findOrFail($id);
        return view('admin.contact-form-message.edit', compact('contactFormMessage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'seen' => ['required'],
        ]);

        $contactFormMessage = ContactForm::findOrFail($id);
        $contactFormMessage->seen = $request->seen;
        $contactFormMessage->save();

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.contact-form-message.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contactFormMessage = ContactForm::findOrFail($id);
        $contactFormMessage->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }

    public function contactFormPageDescriptionIndex(){
        $keys = ['contact_form_page_description'];
        $contactFormPageDescription = AllDescription::whereIn('key', $keys)->pluck('value','key');
        return view('admin.contact-form-message.description.index', compact('contactFormPageDescription'));
    }

    public function contactFormPageDescriptionUpdate(Request $request){
        $validatedData = $request->validate([
            'contact_form_page_description' => ['required'],
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
