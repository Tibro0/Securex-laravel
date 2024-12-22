<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TeamMemberDataTable;
use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TeamMemberDataTable $dataTable)
    {
        return $dataTable->render('admin.team-member.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team-member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2000'],
            'name' => ['required', 'max:255'],
            'designation' => ['required', 'max:255'],
            'facebook_url' => ['required', 'url', 'max:255'],
            'linkedin_url' => ['required', 'url', 'max:255'],
            'whatsapp_url' => ['required', 'url', 'max:255'],
            'status' => ['required'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(300,300);
            $img->toJpeg(80)->save(base_path('public/uploads/team_member_image/'.$name_gen));
            $save_url = 'uploads/team_member_image/'.$name_gen;

            $teamMember = new TeamMember();
            $teamMember->image = $save_url;
            $teamMember->name = $request->name;
            $teamMember->designation = $request->designation;
            $teamMember->facebook_url = $request->facebook_url;
            $teamMember->linkedin_url = $request->linkedin_url;
            $teamMember->whatsapp_url = $request->whatsapp_url;
            $teamMember->status = $request->status;
            $teamMember->save();
        }

        toastr()->success('Created Successfully!');
        return redirect()->route('admin.team-member.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teamMember = TeamMember::findOrFail($id);
        return view('admin.team-member.edit', compact('teamMember'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:2000'],
            'name' => ['required', 'max:255'],
            'designation' => ['required', 'max:255'],
            'facebook_url' => ['required', 'url', 'max:255'],
            'linkedin_url' => ['required', 'url', 'max:255'],
            'whatsapp_url' => ['required', 'url', 'max:255'],
            'status' => ['required'],
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(300,300);
            $img->toJpeg(80)->save(base_path('public/uploads/team_member_image/'.$name_gen));
            $save_url = 'uploads/team_member_image/'.$name_gen;

            $teamMember = TeamMember::findOrFail($id);
            $teamMember->image = $save_url;
            $teamMember->name = $request->name;
            $teamMember->designation = $request->designation;
            $teamMember->facebook_url = $request->facebook_url;
            $teamMember->linkedin_url = $request->linkedin_url;
            $teamMember->whatsapp_url = $request->whatsapp_url;
            $teamMember->status = $request->status;
            $teamMember->save();

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Updated Successfully!');
            return redirect()->route('admin.team-member.index');
        }else{
            $teamMember = TeamMember::findOrFail($id);
            $teamMember->name = $request->name;
            $teamMember->designation = $request->designation;
            $teamMember->facebook_url = $request->facebook_url;
            $teamMember->linkedin_url = $request->linkedin_url;
            $teamMember->whatsapp_url = $request->whatsapp_url;
            $teamMember->status = $request->status;
            $teamMember->save();

            toastr()->success('Updated Successfully!');
            return redirect()->route('admin.team-member.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teamMember = TeamMember::findOrFail($id);
        unlink($teamMember->image);
        $teamMember->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
