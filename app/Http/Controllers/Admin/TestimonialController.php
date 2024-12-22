<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TestimonialDataTable;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TestimonialDataTable $dataTable)
    {
        return $dataTable->render('admin.testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2000'],
            'client_name' => ['required', 'max:255'],
            'profession' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'status' => ['required'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->toJpeg(80)->save(base_path('public/uploads/testimonial_image/'.$name_gen));
            $save_url = 'uploads/testimonial_image/'.$name_gen;

            $testimonial = new Testimonial();
            $testimonial->image = $save_url;
            $testimonial->client_name = $request->client_name;
            $testimonial->profession = $request->profession;
            $testimonial->description = $request->description;
            $testimonial->status = $request->status;
            $testimonial->save();
        }

        toastr()->success('Created Successfully');
        return redirect()->route('admin.testimonial.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:2000'],
            'client_name' => ['required', 'max:255'],
            'profession' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'status' => ['required'],
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(100,100);
            $img->toJpeg(80)->save(base_path('public/uploads/testimonial_image/'.$name_gen));
            $save_url = 'uploads/testimonial_image/'.$name_gen;

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            $testimonial = Testimonial::findOrFail($id);
            $testimonial->image = $save_url;
            $testimonial->client_name = $request->client_name;
            $testimonial->profession = $request->profession;
            $testimonial->description = $request->description;
            $testimonial->status = $request->status;
            $testimonial->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.testimonial.index');
        }else{
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->client_name = $request->client_name;
            $testimonial->profession = $request->profession;
            $testimonial->description = $request->description;
            $testimonial->status = $request->status;
            $testimonial->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.testimonial.index');
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        unlink($testimonial->image);
        $testimonial->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
