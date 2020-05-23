<?php

namespace App\Http\Controllers\Web;


use App\Organization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganizationController extends Controller
{
    public function detailOrganization($id){
        $p = [
//            "allSchool"=> School::all(),
            "organization" => Organization:: find($id),
            "relatedOrganizations" => School::where("id", "!=", $id)->take(4)->get()
        ];
        return view("organization")->with($p);
    }
}
