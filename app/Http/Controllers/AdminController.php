<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Workshop;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function home(){
        return view("admin.home");
    }

    //User Collection
    public function user(){
        $users = User::all();
        return view('admin.user.list_user',['users'=>$users]);
    }

    public function userCreate(){
        return view("admin.user.create_user");
    }


    //Category Collection
    public function category(){
        $categories = Category::all();
        return view('admin.category.list_category',['categories'=>$categories]);
    }

    public function categoryCreate(){
        return view("admin.category.create_category");
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


    //Post Collection
    public function post(){
        $posts = Post::all();
        return view('admin.post.list_post',['posts'=>$posts]);
    }

    public function postCreate(){
        $users = User::all();
        $categories = Category::all();
        return view("admin.post.create_post",['categories'=>$categories,'users'=>$users]);
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
                "thumbnail"=> $request->get("post_thumbnail")
            ]);
        }catch (\Exception $e){
            dd($e);
//            return redirect()->back();
        }
        return redirect()->to("admin/post");
    }

    public function postEdit($id){
        $users = User::all();
        $categories = Category::all();
        $post = Post::find($id);
        return view("admin.post.edit_post",['categories'=>$categories,'users'=>$users,'post'=>$post]);
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
                "thumbnail"=> $request->get("post_thumbnail")
            ]);
        }catch (\Exception $e){
            dd($e);
//            return redirect()->back();
        }
        return redirect()->to("admin/post");
    }

    //Workshop Collection
    public function workshop(){
        $workshop = Workshop::all();
        return view('admin.workshop.list_workshop',['workshop'=>$workshop]);
    }

    public function workshopCreate(){
        $users = User::all();
        $categories = Category::all();
        return view("admin.workshop.create_workshop",['categories'=>$categories,'users'=>$users]);
    }

    public function workshopStore(Request $request){
        $request->validate([
            "post_title"=> "required|string",
            "post_content"=> "required|string",
        ]);
        try {
            $post = Post::create([
                "title"=> $request->get("post_title"),
                "category_id"=> $request->get("post_category"),
                "user_id"=> $request->get("post_user"),
                "content"=> $_POST['post_content'],
                "shortDesc"=> $request->get("post_desc"),
                "thumbnail"=> $request->get("post_thumbnail")
            ]);
        }catch (\Exception $e){
            dd($e);
//            return redirect()->back();
        }
        try {
            $time = Carbon::parse($request->get("workshop_time"))->format('Y-m-d H:i:s');
            Workshop::create([
                "location" => $request->get("workshop_location"),
                "time" => $time,
                "capacity" => $request->get("workshop_capacity"),
                "fee" => $request->get("workshop_fee"),
                "post_id" => $post -> id,
            ]);
        }catch (\Exception $e){
            dd($e);
        }
        return redirect()->to("admin/workshop");
    }

    public function workshopEdit($id){
        $users = User::all();
        $categories = Category::all();
        $workshop = Workshop::find($id);
        $post = $workshop -> Post;
        $dt = \DateTime::createFromFormat('Y-m-d H:i:s', $workshop->time);
        $date = $dt->format('Y-m-d\TH:i');
        return view("admin.workshop.edit_workshop",['categories'=>$categories,'users'=>$users,
            'workshop'=>$workshop,'post'=>$post,'date'=>$date]);
    }

    //Comment Collection
    public function comment(){
        $comments = Comment::all();
        return view('admin.comment.list_comment',['comments'=>$comments]);
    }

    public function commentCreate(){
        $users = User::all();
        $posts = Post::all();
        return view("admin.comment.create_comment");
    }

    public function commentEdit($id){
        $comment = Post::find($id);
        return view("admin.comment.edit_comment",['comment'=>$comment]);
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
