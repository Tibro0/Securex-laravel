<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterGridThreeDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterGridThree;
use Illuminate\Http\Request;

class FooterGridThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterGridThreeDataTable $dataTable)
    {
        return $dataTable->render('admin.footer.footer-grid-three.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footer.footer-grid-three.create');
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

        $footerGridThree = new FooterGridThree();
        $footerGridThree->name = $request->name;
        $footerGridThree->url = $request->url;
        $footerGridThree->priority_number = $request->priority_number;
        $footerGridThree->status = $request->status;
        $footerGridThree->save();

        toastr()->success('Created Successfully!');
        return redirect()->route('admin.footer-grid-three.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $footerGridThree = FooterGridThree::findOrFail($id);
        return view('admin.footer.footer-grid-three.edit', compact('footerGridThree'));
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

        $footerGridThree = FooterGridThree::findOrFail($id);
        $footerGridThree->name = $request->name;
        $footerGridThree->url = $request->url;
        $footerGridThree->priority_number = $request->priority_number;
        $footerGridThree->status = $request->status;
        $footerGridThree->save();

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.footer-grid-three.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $footerGridThree = FooterGridThree::findOrFail($id);
        $footerGridThree->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
