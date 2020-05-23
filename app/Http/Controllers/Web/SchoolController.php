<?php

namespace App\Http\Controllers\Web;

use App\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function detailSchool($id)
    {
        $p = [
//            "allSchool"=> School::all(),
            "school" => School:: find($id),
            "relatedSchools" => School::where("id", "!=", $id)->take(4)->get()
        ];

        return view("school")->with($p);
    }


}
