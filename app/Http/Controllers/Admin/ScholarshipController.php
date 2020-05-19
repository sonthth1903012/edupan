<?php

namespace App\Http\Controllers\Admin;

use App\Mail\SendScholarship;
use App\Scholarship;
use App\School;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ScholarshipController extends Controller
{
    public function scholarship()
    {
        $scholarship = Scholarship::all();
        return view('admin.scholarship.list_scholarship', ['scholarship' => $scholarship]);
    }

    public function scholarshipEdit($id){
        $school = School::all();
        $scholarship = Scholarship::find($id);
        return view('admin.scholarship.edit_scholarship',['school'=>$school,'scholarship'=>$scholarship]);
    }

    public function scholarshipCreate(){
        $p =[
            "allSchools" => School::all()
        ];
        return view('admin.scholarship.create_scholarship')->with($p);
    }

    public function scholarshipDelete($id)
    {
        $scholarship = Scholarship::find($id);
        try {
            $scholarship->delete();
        } catch (\Exception $e) {
            return redirect()->back();
        }

        return redirect()->to("admin/scholarship");
    }

    public function scholarshipUpdate($id, Request $request){
        $scholarship = Scholarship::find($id);
        $request->validate([
            "name"=> "required|string|unique:scholarship,name" .$id ,
            "amount"=> "required|integer",
            "thumbnail"=>"required|string",
            "school_id"=>"required",
            "content"=>"required|string",
            "duedate"=>"required|date",

        ]);

        try {
            $scholarship->update([
                "name" => $request->get("name"),
                "amount" => $request->get("amount"),
                "thumbnail" => $request->get("thumbnail"),
                "school_id" => $request->get("scholarship_school"),
                "content" => $request->get('content'),
                "duedate" => $request->get("duedate"),

            ]);

        }catch (\Exception $e){
            throw $e;
        }
        return redirect()->to("admin/scholarship");
    }

    public function scholarshipStore(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "amount" => "required|string",
            "thumbnail" => "required|file",
            "school_id" => "required|exists:school,id",
            "content" => "required|string",
            "duedate"=>"required|date"
        ]);

        try {
            if ($request->hasFile("thumbnail")) {
                $image = $request->file('thumbnail');
                $name = time() . "-" . $image->getClientOriginalName();
                Storage::disk('uploads')->put($name, File::get($image));
                Scholarship::create([
                    "name" => $request->get("name"),
                    "amount" => $request->get("amount"),
                    "thumbnail" => 'uploads/' . $name,
                    "school_id" => $request->get("school_id"),
                    "content" => $request->get("content"),
                    "duedate" => $request->get("duedate"),
                ]);

            }

        } catch (\Exception $e) {
            throw $e;
//            return redirect()->back();
        }
        return redirect()->to("admin/scholarship");
    }

    public function listForm($id){
        $scholarship = Scholarship::find($id);
        return view('admin.scho_student.list_scho_student', ['scholarship' => $scholarship]);
    }

    public function approveStudent($id){
        $student = Student::find($id);

        $student->status = Student::APPROVED;
        try {
            $student->save();
            Mail::to($student->email)->send(new SendScholarship($student));
        } catch (\Throwable $th){
            throw $th;
        }

        return redirect()->back();
    }

    public function removeStudent($id){
        $student = Student::find($id);
        $student->status = Student::DELETED;
        try {
            $student->save();
        } catch (\Throwable $th){
            throw $th;
        }
        return redirect()->back();
    }

}
