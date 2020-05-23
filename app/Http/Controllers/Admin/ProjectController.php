<?php

namespace App\Http\Controllers\Admin;

use App\Organization;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function project()
    {
        $project = Project::all();
        return view('admin.project.list_project', ['project' => $project]);
    }

    public function projectEdit($id)
    {
        $organization = Organization::all();
        $project = Project::find($id);
        return view('admin.project.edit_project', ['project' => $project, 'organization' => $organization]);
    }

    public function projectCreate()
    {
        $p = [
            "allOrganizations" => Organization::all()
        ];
        return view('admin.project.create_project')->with($p);
    }

    public function projectDelete($id)
    {
        $project = Project::find($id);
        try {
            $project->delete();
        } catch (\Exception $e) {
            return redirect()->back();
        }

        return redirect()->to("admin/project");
    }

    public function projectUpdate($id, Request $request)
    {
        $project = Project::find($id);
        $request->validate([
            "project_name" => "required|string",
            "goal" => "required|integer",
            "thumbnail" => "required|string",
            "organization_id" => "required",
            "content" => "required|string",
            "due_date" => "required|date",

        ]);

        try {
            $project->update([
                "project_name" => $request->get("project_name"),
                "goal" => $request->get("goal"),
                "thumbnail" => $request->get("thumbnail"),
                "school_id" => $request->get("scholarship_school"),
                "content" => $request->get('content'),
                "due_date" => $request->get("due_date"),

            ]);

        } catch (\Exception $e) {
            throw $e;
        }
        return redirect()->to("admin/scholarship");
    }

    public function projectStore(Request $request)
    {
        $request->validate([
            "project_name" => "required|string|unique:project,project_name",
            "goal" => "required|integer",
            "thumbnail" => "required|file",
            "organization_id" => "required|exists:organization,id",
            "content" => "required|string",
            "due_date" => "required|date"
        ]);

        try {
            if ($request->hasFile("thumbnail")) {
                $image = $request->file('thumbnail');
                $name = time() . "-" . $image->getClientOriginalName();
                Storage::disk('uploads')->put($name, File::get($image));
                Project::create([
                    "project_name" => $request->get("project_name"),
                    "goal" => $request->get("goal"),
                    "thumbnail" => 'uploads/' . $name,
                    "organization_id" => $request->get("organization_id"),
                    "content" => $request->get("content"),
                    "due_date" => $request->get("due_date"),
                ]);

            }

        } catch (\Exception $e) {
            throw $e;
        }
        return redirect()->to("admin/project");
    }

    public function listDonate($id)
    {
        $p = [
            "project" => Project::find($id)
        ];

        return view("admin/list_donate/list_donate")->with($p);
    }
}
