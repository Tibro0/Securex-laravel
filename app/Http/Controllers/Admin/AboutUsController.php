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
        $aboutUs = AboutUs::all()->toArray();
        return view('admin.about-us.index', compact('aboutUs'));
    }

    public function aboutUsUpdate(Request $request){
        $request->validate([
            'right_main_image' => ['nullable', 'image', 'max:2000'],
            'left_title' => ['required', 'max:255'],
            'left_description' => ['required', 'max:255'],
            'left_icon_first_image' => ['nullable', 'image', 'max:2000'],
            'left_icon_first_number' => ['required', 'max:255'],
            'left_icon_first_title' => ['required', 'max:255'],
            'left_icon_second_image' => ['nullable', 'image', 'max:2000'],
            'left_icon_second_number' => ['required', 'max:255'],
            'left_icon_second_title' => ['required', 'max:255'],
            'left_button_title' => ['required', 'max:255'],
            'left_button_url' => ['required', 'url', 'max:255'],
        ]);

        $old_right_main_image = $request->old_right_main_image;
        if ($request->file('right_main_image')) {
            $image = $request->file('right_main_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(946,560);
            $img->toJpeg(80)->save(base_path('public/uploads/about-us/'.$name_gen));
            $save_url_right_main_image = 'uploads/about-us/'.$name_gen;

            if (file_exists($old_right_main_image)) {
                unlink($old_right_main_image);
            }

            AboutUs::updateOrCreate(
                ['id' => 1],
                [
                    'right_main_image' => $save_url_right_main_image,
                    'left_title' => $request->left_title,
                    'left_description' => $request->left_description,
                    'left_icon_first_number' => $request->left_icon_first_number,
                    'left_icon_first_title' => $request->left_icon_first_title,
                    'left_icon_second_number' => $request->left_icon_second_number,
                    'left_icon_second_title' => $request->left_icon_second_title,
                    'left_button_title' => $request->left_button_title,
                    'left_button_url' => $request->left_button_url,
                ]
            );

            toastr('Updated Successfully!');
            return redirect()->back();
        }


        $old_left_icon_first_image = $request->old_left_icon_first_image;
        if ($request->file('left_icon_first_image')) {
            $image = $request->file('left_icon_first_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(64,64);
            $img->toJpeg(80)->save(base_path('public/uploads/about-us/'.$name_gen));
            $save_url_left_icon_first_image = 'uploads/about-us/'.$name_gen;

            if (file_exists($old_left_icon_first_image)) {
                unlink($old_left_icon_first_image);
            }

            AboutUs::updateOrCreate(
                ['id' => 1],
                [
                    'left_title' => $request->left_title,
                    'left_description' => $request->left_description,
                    'left_icon_first_image' => $save_url_left_icon_first_image,
                    'left_icon_first_number' => $request->left_icon_first_number,
                    'left_icon_first_title' => $request->left_icon_first_title,
                    'left_icon_second_number' => $request->left_icon_second_number,
                    'left_icon_second_title' => $request->left_icon_second_title,
                    'left_button_title' => $request->left_button_title,
                    'left_button_url' => $request->left_button_url,
                ]
            );

            toastr('Updated Successfully!');
            return redirect()->back();
        }



        $old_left_icon_second_image = $request->old_left_icon_second_image;
        if ($request->file('left_icon_second_image')) {
            $image = $request->file('left_icon_second_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(64,64);
            $img->toJpeg(80)->save(base_path('public/uploads/about-us/'.$name_gen));
            $save_url_left_icon_second_image = 'uploads/about-us/'.$name_gen;

            if (file_exists($old_left_icon_second_image)) {
                unlink($old_left_icon_second_image);
            }

            AboutUs::updateOrCreate(
                ['id' => 1],
                [
                    'left_title' => $request->left_title,
                    'left_description' => $request->left_description,
                    'left_icon_first_number' => $request->left_icon_first_number,
                    'left_icon_first_title' => $request->left_icon_first_title,
                    'left_icon_second_image' =>  $save_url_left_icon_second_image,
                    'left_icon_second_number' => $request->left_icon_second_number,
                    'left_icon_second_title' => $request->left_icon_second_title,
                    'left_button_title' => $request->left_button_title,
                    'left_button_url' => $request->left_button_url,
                ]
            );

            toastr('Updated Successfully!');
            return redirect()->back();
        }

    }
}
