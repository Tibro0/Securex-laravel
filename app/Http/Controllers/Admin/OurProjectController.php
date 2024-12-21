<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\OurProjectDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OurProject;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class OurProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OurProjectDataTable $dataTable)
    {
        return $dataTable->render('admin.our-project.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.our-project.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumb_image' => ['required', 'image', 'max:2000'],
            'category_id' => ['required', 'integer'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'url' => ['required', 'url', 'max:255'],
            'status' => ['required'],
        ],[
            'category_id.required' => 'The category field is required.'
        ]);

        if ($request->file('thumb_image')) {
            $image = $request->file('thumb_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(408,326);
            $img->toJpeg(80)->save(base_path('public/uploads/our_project_image/'.$name_gen));
            $save_url = 'uploads/our_project_image/'.$name_gen;

            $ourProject = new OurProject();
            $ourProject->thumb_image = $save_url;
            $ourProject->category_id = $request->category_id;
            $ourProject->title = $request->title;
            $ourProject->description = $request->description;
            $ourProject->url = $request->url;
            $ourProject->status = $request->status;
            $ourProject->save();
        }
            toastr()->success('Created Successfully');
            return redirect()->route('admin.our-project.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ourProject = OurProject::findOrFail($id);
        $categories = Category::all();
        return view('admin.our-project.edit', compact('ourProject', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'thumb_image' => ['nullable', 'image', 'max:2000'],
            'category_id' => ['required', 'integer'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'url' => ['required', 'url', 'max:255'],
            'status' => ['required'],
        ],[
            'category_id.required' => 'The category field is required.'
        ]);

        $oldImage = $request->old_image;
        if ($request->file('thumb_image')) {
            $image = $request->file('thumb_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(408,326);
            $img->toJpeg(80)->save(base_path('public/uploads/our_project_image/'.$name_gen));
            $save_url = 'uploads/our_project_image/'.$name_gen;

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            $ourProject = OurProject::findOrFail($id);
            $ourProject->thumb_image = $save_url;
            $ourProject->category_id = $request->category_id;
            $ourProject->title = $request->title;
            $ourProject->description = $request->description;
            $ourProject->url = $request->url;
            $ourProject->status = $request->status;
            $ourProject->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.our-project.index');
        }else{
            $ourProject = OurProject::findOrFail($id);
            $ourProject->category_id = $request->category_id;
            $ourProject->title = $request->title;
            $ourProject->description = $request->description;
            $ourProject->url = $request->url;
            $ourProject->status = $request->status;
            $ourProject->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.our-project.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ourProject = OurProject::findOrFail($id);
        unlink($ourProject->thumb_image);
        $ourProject->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
