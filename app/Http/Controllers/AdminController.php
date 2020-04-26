<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;

class AdminController extends Controller
{
    public function home(){
        return view("admin.home");
    }


    public function user(){
        $users = User::all();
        return view('admin.user.list_user',['users'=>$users]);
    }

    public function category(){
        $categories = Category::all();
        return view('admin.category.list_category',['categories'=>$categories]);
    }

    public function post(){
        $posts = Post::all();
        return view('admin.post.list_post',['posts'=>$posts]);
    }

    public function comment(){
        $comments = Comment::all();
        return view('admin.comment.list_comment',['comments'=>$comments]);
    }

    public function userCreate(){
        return view("admin.user.create_user");
    }

    public function categoryCreate(){
        return view("admin.category.create_category");
    }

    public function postCreate(){
        return view("admin.post.create_post");
    }

    public function commentCreate(){
        return view("admin.comment.create_comment");
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
        return view("admin.category.edit_category",['category'=>$category]);
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

    public function categoryDelete($id){
        $category = Category::find($id);
        try {
            $category->delete();
        }
        catch (\Exception $e){
            return redirect()->back();
        }

        return redirect()->to("admin/category");
    }

}
