<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DetailDataTable;
use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DetailDataTable $dataTable)
    {
        return $dataTable->render('admin.detail.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.detail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2000'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'status' => ['required']
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(64,64);
            $img->toJpeg(80)->save(base_path('public/uploads/detail_image/'.$name_gen));
            $save_url = 'uploads/detail_image/'.$name_gen;

            $detail = new Detail();
            $detail->image = $save_url;
            $detail->title = $request->title;
            $detail->description = $request->description;
            $detail->status = $request->status;
            $detail->save();

            toastr()->success('Created Successfully');
            return redirect()->route('admin.detail.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detail = Detail::findOrFail($id);
        return view('admin.detail.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:2000'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'status' => ['required']
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(64,64);
            $img->toJpeg(80)->save(base_path('public/uploads/detail_image/'.$name_gen));
            $save_url = 'uploads/detail_image/'.$name_gen;

            $detail = Detail::findOrFail($id);
            $detail->image = $save_url;
            $detail->title = $request->title;
            $detail->description = $request->description;
            $detail->status = $request->status;
            $detail->save();

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.detail.index');
        }else{
            $detail = Detail::findOrFail($id);
            $detail->title = $request->title;
            $detail->description = $request->description;
            $detail->status = $request->status;
            $detail->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.detail.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = Detail::findOrFail($id);
        unlink($detail->image);
        $detail->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
