<?php

namespace App\Http\Controllers\Web;

use App\School;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Scholarship;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ScholarshipController extends Controller
{
    public function archiveScholarship()
    {
        $p = [
            "allScholarships" => Scholarship::whereDate("duedate", ">=", Carbon::today())->take(4)->get()
        ];

        return view('scholarships')->with($p);
    }

    public function singleScholarship($id)
    {
        $p = [
            "scholarship" => Scholarship::find($id)
        ];
        return view('scholarship-detail')->with($p);
    }

    public function registerScholarship($id){
        $p = [
            "scholarship" => Scholarship::find($id)
        ];
        return view("form_scholarship")->with($p);
    }

    public function storeForm(Request $request, $id){

        $request->validate([
            "student_name" => "required|string",
            "email" => "required|string",
            "address" => "required|string",
            "date_of_birth" => "required|date",
            "phone" => "required",
            "skill"=>"required|file"
        ]);

        try {
            if ($request->hasFile("skill")) {

                $skill = $request->file('skill');
                $filename = $this->convertSpecialCharacters($skill->getClientOriginalName());
                $name = time() . "-" . $filename;
                Storage::disk('uploads')->put($name, File::get($skill));
                $student = Student::create([
                    "student_name" => $request->get("student_name"),
                    "email" => $request->get("email"),
                    "address" => $request->get("address"),
                    "date_of_birth" => $request->get("date_of_birth"),
                    "phone" => $request->get("phone"),
                    "skill" => 'download/' . $name,
                ]);
                $scholarship = Scholarship::find($id);
                $scholarship->Student()->sync($student->id);
            }

        } catch (\Exception $e) {
            throw $e;
        }
        return redirect("scholarship/congratulations");
    }

    private function convertSpecialCharacters(string $str)
    {
        $str = preg_replace("/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/", "a", $str);
        $str = preg_replace("/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/", "e", $str);
        $str = preg_replace("/ì|í|ị|ỉ|ĩ/", "i", $str);
        $str = preg_replace("/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/", "o", $str);
        $str = preg_replace("/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/", "u", $str);
        $str = preg_replace("/ỳ|ý|ỵ|ỷ|ỹ/", "y", $str);
        $str = preg_replace("/đ/", "d", $str);
        $str = preg_replace("/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/", "A", $str);
        $str = preg_replace("/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/", "E", $str);
        $str = preg_replace("/Ì|Í|Ị|Ỉ|Ĩ/", "I", $str);
        $str = preg_replace("/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/", "O", $str);
        $str = preg_replace("/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/", "U", $str);
        $str = preg_replace("/Ỳ|Ý|Ỵ|Ỷ|Ỹ/", "Y", $str);
        $str = preg_replace("/Đ/", "D", $str);
        $str = preg_replace("/\s/", "-", $str);
        return $str;
    }

    public function congratulationsScholarship(){

        return view("congratulations");
    }
}
