<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUs = AboutUs::pluck('value', 'key');
        return view('admin.about-us.index', compact('aboutUs'));
    }
    public function aboutUsPartOneUpdate(Request $request){
        $validateData = $request->validate([
            'about_us_part_one_image' => ['nullable', 'image', 'max:2000']
        ]);

        $oldImage = $request->part_one_old_image;
        if ($request->file('about_us_part_one_image')) {
            $image = $request->file('about_us_part_one_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(800,800);
            $img->toJpeg(80)->save(base_path('public/uploads/about-us/'.$name_gen));
            $save_url = 'uploads/about-us/'.$name_gen;

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            foreach ($validateData as $key => $value) {
                AboutUs::updateOrCreate(
                    ['key' => $key],
                    ['value' => $save_url],
                );
            }
        }

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }

    public function aboutUsPartTwoUpdate(Request $request){
        $validateData = $request->validate([
            'about_us_part_two_title' => ['required'],
            'about_us_part_two_description' => ['required'],
            'about_us_part_two_button_text' => ['required'],
            'about_us_part_two_button_url' => ['required', 'url'],
        ],[
            'about_us_part_two_title.required' => 'Title field is required.',
            'about_us_part_two_description.required' => 'Description field is required.',
            'about_us_part_two_button_text.required' => 'Button Text field is required.',
            'about_us_part_two_button_url.required' => 'Button Url field is required.',
            'about_us_part_two_button_url.url' => 'Button Url must be a valid url.',
        ]);

        foreach ($validateData as $key => $value) {
            AboutUs::updateOrCreate(
                ['key' => $key],
                ['value' => $value],
            );
        }

        toastr()->success('Updated Successfully!');
        return redirect()->back();
    }

    public function aboutUsPartThreeSectionOneUpdate(Request $request){
        $validateData = $request->validate([
            'about_us_part_three_icon_first_image' => ['nullable', 'image', 'max:2000'],
            'about_us_part_three_icon_first_number' => ['required'],
            'about_us_part_three_icon_first_title' => ['required', ],
        ],[
            'about_us_part_three_icon_first_image.image' => 'First Icon Image must be a image',
            'about_us_part_three_icon_first_number.required' => 'First Number field is required.',
            'about_us_part_three_icon_first_title.required' => 'First Title field is required.',
        ]);

        $oldImage = $request->old_about_us_part_three_icon_first_image;
        if ($request->file('about_us_part_three_icon_first_image')) {
            $image = $request->file('about_us_part_three_icon_first_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(800,800);
            $img->toJpeg(80)->save(base_path('public/uploads/about-us/'.$name_gen));
            $save_url = 'uploads/about-us/'.$name_gen;

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            foreach ($validateData as $key) {
                AboutUs::updateOrCreate(
                    ['key' => $key],
                    ['value' => $save_url],
                );

            }
        }

        foreach ($validateData as $key => $value) {
            AboutUs::updateOrCreate(
                ['key' => $key],
                ['value' => $value],
            );
        }
        toastr()->success('Updated Successfully!');
        return redirect()->back();
    }
}
