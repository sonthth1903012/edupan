<?php

namespace App\Http\Controllers\Admin;

use App\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SchoolController extends Controller
{
    //
    public function school()
    {
        $school = School::all();
        return view('admin.school.list_school', ['school' => $school]);
    }

    public function schoolEdit($id)
    {
        $school = school::find($id);
        return view("admin.school.edit_school", ['school' => $school]);
    }

    public function schoolCreate()
    {
        return view("admin.school.create_school");
    }

    public function schoolDelete($id)
    {
        $school = School::find($id);
        try {
            $school->delete();
        } catch (\Exception $e) {
            return redirect()->back();
        }

        return redirect()->to("admin/school");
    }

    public function schoolUpdate($id, Request $request)
    {
        $school = School::find($id);
        $request->validate([
            "school_name" => "required|string|unique:school,school_name," . $id,
            "email" => "required|string",
            "address" => "required|string",
            "image" => "required|string",
            "desc" => "required|string",
        ]);
        try {
            $school->update([
                "school_name" => $request->get('school_name'),
                "email" => $request->get('email'),
                "address" => $request->get('address'),
                "image" => $request->get('image'),
                "desc" => $request->get('desc'),
            ]);
        } catch (\Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/school");
    }

    public function schoolStore(Request $request)
    {
        $request->validate([
            "school_name" => "required|string",
            "email" => "required|string|unique:school",
            "address" => "required|string|unique:school",
            "desc" => "required|string",
            "image" => "required|file"
        ]);

        try {
            if ($request->hasFile("image")) {
                $image = $request->file('image');
                $name = time() . "-" . $image->getClientOriginalName();
                Storage::disk('uploads')->put($name, File::get($image));
                School::create([
                    "school_name" => $request->get("school_name"),
                    "email" => $request->get("email"),
                    "address" => $request->get("address"),
                    "image" => 'uploads/' . $name,
                    "desc" => $request->get("desc")
                ]);
            }

        } catch (\Exception $e) {
            throw $e;
        }
        return redirect()->to("admin/school");
    }


}
