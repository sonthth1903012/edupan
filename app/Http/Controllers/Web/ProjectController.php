<?php

namespace App\Http\Controllers\Web;

use App\Project;
use App\Scholarship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function archiveProject()
    {
        $p = [
            "allProjects" => Project::whereDate("due_date", ">=", Carbon::today())->take(4)->get()
        ];
        return view("project")->with($p);
    }

    public function singleProject($id)
    {
        $p = [
            "project" => Project::find($id)
        ];
        return view("project_detail")->with($p);
    }

    public function projectForm($id)
    {
        $p = [
            "project" => Project::find($id)
        ];
        return view("project_form")->with($p);
    }

    public function storeProject(Request $request, $id)
    {
        $request->validate([
            "amount" => "required|integer",
            "method" => "required|string"
        ]);
        $project = Project::find($id);
        try {
            $project->Users()->attach(Auth::user()->id, [
                "amount" => $request->get("amount"),
                "method" => $request->get("method"),
            ]);
        } catch (\Exception $e) {
            throw $e;
        };
//        return dd($project);
        return redirect("/project/detail/{id}/register/success");
    }

    public function registerSuccess($id)
    {
        return view("congratulations");
    }
}
