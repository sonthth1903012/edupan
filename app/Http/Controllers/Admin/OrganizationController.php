<?php

namespace App\Http\Controllers\Admin;

use App\Organization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{
    public function organization()
    {
        $organization = Organization::all();
        return view('admin.organization.list_organization', ['organization' => $organization]);
    }

    public function organizationEdit($id)
    {
        $organization = Organization::find($id);
        return view("admin.organization.edit_organization", ['organization' => $organization]);
    }

    public function organizationCreate()
    {
        return view("admin.organization.create_organization");
    }

    public function organizationDelete($id)
    {
        $organization = Organization::find($id);
        try {
            $organization->delete();
        } catch (\Exception $e) {
            return redirect()->back();
        }

        return redirect()->to("admin/organization");
    }

    public function organizationUpdate($id, Request $request)
    {
        $organization = Organization::find($id);
        $request->validate([
            "organization_name" => "required|string|unique:organization,organization_name," . $id,
            "email" => "required|string|unique:organization",
            "address" => "required|string",
            "thumbnail" => "required|string",
            "desc" => "required|string",
        ]);
        try {
            $organization->update([
                "organization_name" => $request->get('organization_name'),
                "email" => $request->get('email'),
                "address" => $request->get('address'),
                "thumbnail" => $request->get('thumbnail'),
                "desc" => $request->get('desc'),
            ]);
        } catch (\Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/organization");
    }

    public function organizationStore(Request $request)
    {
        $request->validate([
            "organization_name" => "required|string",
            "email" => "required|string|unique:school",
            "address" => "required|string|unique:school",
            "thumbnail" => "required|file",
            "desc" => "required|string",

        ]);

        try {
            if ($request->hasFile("thumbnail")) {
                $image = $request->file('thumbnail');
                $name = time() . "-" . $image->getClientOriginalName();
                Storage::disk('uploads')->put($name, File::get($image));
                Organization::create([
                    "organization_name" => $request->get("organization_name"),
                    "email" => $request->get("email"),
                    "address" => $request->get("address"),
                    "thumbnail" => 'uploads/' . $name,
                    "desc" => $request->get("desc")
                ]);
            }

        } catch (\Exception $e) {
            throw $e;
        }
        return redirect()->to("admin/organization");
    }
}
