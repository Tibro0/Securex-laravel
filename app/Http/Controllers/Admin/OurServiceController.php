<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\OurServiceDataTable;
use App\Http\Controllers\Controller;
use App\Models\OurService;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class OurServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OurServiceDataTable $dataTable)
    {
        return $dataTable->render('admin.our-service.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.our-service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:3000'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'button_url' => ['required', 'url', 'max:255'],
            'status' => ['required'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(64,64);
            $img->toJpeg(80)->save(base_path('public/uploads/our-services/'.$name_gen));
            $save_url = 'uploads/our-services/'.$name_gen;

            $service = new OurService();
            $service->image = $save_url;
            $service->title = $request->title;
            $service->description = $request->description;
            $service->button_url = $request->button_url;
            $service->status = $request->status;
            $service->save();

            toastr()->success('Created Successfully');
            return redirect()->route('admin.our-service.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = OurService::findOrFail($id);
        return view('admin.our-service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:3000'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'button_url' => ['required', 'url', 'max:255'],
            'status' => ['required'],
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(64,64);
            $img->toJpeg(80)->save(base_path('public/uploads/our-services/'.$name_gen));
            $save_url = 'uploads/our-services/'.$name_gen;

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            $service = OurService::findOrFail($id);
            $service->image = $save_url;
            $service->title = $request->title;
            $service->description = $request->description;
            $service->button_url = $request->button_url;
            $service->status = $request->status;
            $service->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.our-service.index');
        }else{
            $service = OurService::findOrFail($id);
            $service->title = $request->title;
            $service->description = $request->description;
            $service->button_url = $request->button_url;
            $service->status = $request->status;
            $service->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.our-service.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = OurService::findOrFail($id);
        unlink($service->image);
        $service->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
