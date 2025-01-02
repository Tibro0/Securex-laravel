<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FreeQuoteFormInformationDataTable;
use App\Http\Controllers\Controller;
use App\Models\FreeQuoteForm;
use Illuminate\Http\Request;

class FreeQuoteFormInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FreeQuoteFormInformationDataTable $dataTable)
    {
        return $dataTable->render('admin.free-quote-form-information.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $freeQuoteFormInformation = FreeQuoteForm::findOrFail($id);
        return view('admin.free-quote-form-information.edit', compact('freeQuoteFormInformation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'seen' => ['required', 'in:yes,no'],
        ]);

        $freeQuoteFormInformation = FreeQuoteForm::findOrFail($id);
        $freeQuoteFormInformation->seen = $request->seen;
        $freeQuoteFormInformation->save();

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.free-quote-form-information.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $freeQuoteFormInformation = FreeQuoteForm::findOrFail($id);
        $freeQuoteFormInformation->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
