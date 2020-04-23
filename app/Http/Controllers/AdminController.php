<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminController extends Controller
{
    public function home(){
        return view("admin.home");
    }

    public function category(){
        $categories = Category::all();
        return view('admin.category',['categories'=>$categories]);
    }

    public function categoryCreate(){
        return view("admin.create_category");
    }

    public function categoryStore(Request $request){
        $request->validate([
            "category_name"=> "required|string|unique:category"
        ]);
        try {
            Category::create([
                "category_name"=> $request->get("category_name")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function categoryEdit($id){
        $category = Category::find($id);
        return view("admin.edit_category",['category'=>$category]);
    }

    public function categoryUpdate($id,Request $request){
        $category = Category::find($id);
        $request->validate([
            "category_name"=> "required|string|unique:category,category_name,".$id
        ]);
        try {
            $category->update([
                "category_name"=> $request->get('category_name')
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

}
