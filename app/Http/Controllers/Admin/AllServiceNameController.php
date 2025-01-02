<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AllServiceNameDataTable;
use App\Http\Controllers\Controller;
use App\Models\AllServiceName;
use Illuminate\Http\Request;

class AllServiceNameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AllServiceNameDataTable $dataTable)
    {
        return $dataTable->render('admin.service-name.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service-name.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => ['required', 'unique:all_service_names,service_name', 'max:255'],
            'status' => ['required', 'boolean'],
        ]);

        $serviceName = new AllServiceName();
        $serviceName->service_name = $request->service_name;
        $serviceName->status = $request->status;
        $serviceName->save();

        toastr()->success('Created Successfully!');
        return redirect()->route('admin.service-name.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $serviceName = AllServiceName::findOrFail($id);
        return view('admin.service-name.edit', compact('serviceName'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'service_name' => ['required','max:255', 'unique:all_service_names,service_name,'.$id],
            'status' => ['required', 'boolean'],
        ]);

        $serviceName = AllServiceName::findOrFail($id);
        $serviceName->service_name = $request->service_name;
        $serviceName->status = $request->status;
        $serviceName->save();

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.service-name.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceName = AllServiceName::findOrFail($id);
        $serviceName->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
