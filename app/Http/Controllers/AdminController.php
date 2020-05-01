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
        $users = User::all();
        $categories = Category::all();
        $posts = Post::all();
        return view('admin.post.list_post',['categories'=>$categories,'users'=>$users,'posts'=>$posts]);
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
        $users = User::all();
        $categories = Category::all();
        return view("admin.post.create_post",['categories'=>$categories,'users'=>$users]);
    }

    public function commentCreate(){
        $users = User::all();
        $posts = Post::all();
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

    public function postStore(Request $request){
        $request->validate([
            "post_title"=> "required|string",
            "post_content"=> "required|string",
        ]);
        try {
            Post::create([
                "title"=> $request->get("post_title"),
                "category_id"=> $request->get("post_category"),
                "user_id"=> $request->get("post_user"),
                "content"=> $_POST['post_content'],
                "shortDesc"=> $request->get("post_desc"),
                "author"=> $request->get("post_author"),
                "thumbnail"=> $request->get("post_thumbnail")
            ]);
        }catch (\Exception $e){
            dd($e);
//            return redirect()->back();
        }
        return redirect()->to("admin/post");
    }

    public function categoryEdit($id){
        $category = Category::find($id);
        return view("admin.category.edit_category",['category'=>$category]);
    }

    public function postEdit($id){
        $users = User::all();
        $categories = Category::all();
        $post = Post::find($id);
        return view("admin.post.edit_post",['categories'=>$categories,'users'=>$users,'post'=>$post]);
    }

    public function commentEdit($id){
        $comment = Post::find($id);
        return view("admin.comment.edit_comment",['comment'=>$comment]);
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

    public function postUpdate($id,Request $request){
        $post = Post::find($id);
        $request->validate([
            "post_title"=> "required|string",
            "post_content"=> "required|string",
        ]);
        try {
            $post->update([
                "title"=> $request->get("post_title"),
                "category_id"=> $request->get("post_category"),
                "user_id"=> $request->get("post_user"),
                "content"=> $_POST['post_content'],
                "shortDesc"=> $request->get("post_desc"),
                "author"=> $request->get("post_author"),
                "thumbnail"=> $request->get("post_thumbnail")
            ]);
        }catch (\Exception $e){
            dd($e);
//            return redirect()->back();
        }
        return redirect()->to("admin/post");
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

    public function postDelete($id){
        $post = Post::find($id);
        $comment = Comment::all()->where('post_id',$post->id);
        try {
            $comment ->each(function ($c) {
                $c->delete();
            });
            $post->delete();
        }
        catch (\Exception $e){
            dd($e);
            return redirect()->back();
        }

        return redirect()->to("admin/post");
    }

    public function commentDelete($id){
        $comment = Comment::find($id);
        try {
            $comment->delete();
        }
        catch (\Exception $e){
            dd($e);
            return redirect()->back();
        }

        return redirect()->to("admin/comment");
    }

}
