<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\WhyChooseUsIconBoxDataTable;
use App\Http\Controllers\Controller;
use App\Models\WhyChooseUsIconBox;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class WhyChooseUsIconBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(WhyChooseUsIconBoxDataTable $dataTable)
    {
        return $dataTable->render('admin.why-choose-us.icon-box.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.why-choose-us.icon-box.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2000'],
            'name' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'status' => ['required'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(64,64);
            $img->toJpeg(80)->save(base_path('public/uploads/why_choose_us_image/'.$name_gen));
            $save_url = 'uploads/why_choose_us_image/'.$name_gen;


            $whyChooseUsIconBox = new WhyChooseUsIconBox();
            $whyChooseUsIconBox->image = $save_url;
            $whyChooseUsIconBox->name = $request->name;
            $whyChooseUsIconBox->title = $request->title;
            $whyChooseUsIconBox->status = $request->status;
            $whyChooseUsIconBox->save();

            toastr()->success('Created Successfully');
            return redirect()->route('admin.why-choose-us-icon-box.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $whyChooseUsIconBox = WhyChooseUsIconBox::findOrFail($id);
        return view('admin.why-choose-us.icon-box.edit', compact('whyChooseUsIconBox'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:2000'],
            'name' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'status' => ['required'],
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(64,64);
            $img->toJpeg(80)->save(base_path('public/uploads/why_choose_us_image/'.$name_gen));
            $save_url = 'uploads/why_choose_us_image/'.$name_gen;

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            $whyChooseUsIconBox = WhyChooseUsIconBox::findOrFail($id);
            $whyChooseUsIconBox->image = $save_url;
            $whyChooseUsIconBox->name = $request->name;
            $whyChooseUsIconBox->title = $request->title;
            $whyChooseUsIconBox->status = $request->status;
            $whyChooseUsIconBox->save();

            toastr()->success('Created Successfully');
            return redirect()->route('admin.why-choose-us-icon-box.index');
        }else{
            $whyChooseUsIconBox = WhyChooseUsIconBox::findOrFail($id);
            $whyChooseUsIconBox->name = $request->name;
            $whyChooseUsIconBox->title = $request->title;
            $whyChooseUsIconBox->status = $request->status;
            $whyChooseUsIconBox->save();

            toastr()->success('Created Successfully');
            return redirect()->route('admin.why-choose-us-icon-box.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $whyChooseUsIconBox = WhyChooseUsIconBox::findOrFail($id);
        unlink($whyChooseUsIconBox->image);
        $whyChooseUsIconBox->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
