<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterGridTwoDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterGridTwo;
use Illuminate\Http\Request;

class FooterGridTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterGridTwoDataTable $dataTable)
    {
        return $dataTable->render('admin.footer.footer-grid-two.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footer.footer-grid-two.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'url' => ['required', 'url', 'max:255'],
            'priority_number' => ['required', 'integer', 'max:255'],
            'status' => ['required', 'max:255'],
        ]);

        $footerGridTwo = new FooterGridTwo();
        $footerGridTwo->name = $request->name;
        $footerGridTwo->url = $request->url;
        $footerGridTwo->priority_number = $request->priority_number;
        $footerGridTwo->status = $request->status;
        $footerGridTwo->save();

        toastr()->success('Created Successfully!');
        return redirect()->route('admin.footer-grid-two.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $footerGridTwo = FooterGridTwo::findOrFail($id);
        return view('admin.footer.footer-grid-two.edit', compact('footerGridTwo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'url' => ['required', 'url', 'max:255'],
            'priority_number' => ['required', 'integer', 'max:255'],
            'status' => ['required', 'max:255'],
        ]);

        $footerGridTwo = FooterGridTwo::findOrFail($id);
        $footerGridTwo->name = $request->name;
        $footerGridTwo->url = $request->url;
        $footerGridTwo->priority_number = $request->priority_number;
        $footerGridTwo->status = $request->status;
        $footerGridTwo->save();

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.footer-grid-two.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $footerGridTwo = FooterGridTwo::findOrFail($id);
        $footerGridTwo->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
