<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SocialLinkDataTable;
use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SocialLinkDataTable $dataTable)
    {
        return $dataTable->render('admin.social-link.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.social-link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => ['required', 'max:255'],
            'name' => ['required', 'max:255'],
            'link' => ['required', 'url', 'max:255'],
            'status' => ['required', 'boolean'],
        ]);

        $socialLink = new SocialLink();
        $socialLink->icon = $request->icon;
        $socialLink->name = $request->name;
        $socialLink->link = $request->link;
        $socialLink->status = $request->status;
        $socialLink->save();

        toastr()->success('Created Successfully!');
        return redirect()->route('admin.social-link.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $socialLink = SocialLink::findOrFail($id);
        return view('admin.social-link.edit', compact('socialLink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'icon' => ['required', 'max:255'],
            'name' => ['required', 'max:255'],
            'link' => ['required', 'url', 'max:255'],
            'status' => ['required', 'boolean'],
        ]);

        $socialLink = SocialLink::findOrFail($id);
        $socialLink->icon = $request->icon;
        $socialLink->name = $request->name;
        $socialLink->link = $request->link;
        $socialLink->status = $request->status;
        $socialLink->save();

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.social-link.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $socialLink = SocialLink::findOrFail($id);
        $socialLink->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
