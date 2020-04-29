<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\SendEmail;
use App\Mail\SendTicket;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function home(){
        return view ("home");
    }

    public function about_us(){
        return view ("about_us");
    }

    public function blog(){
        $news = Post::orderBy('created_at','desc')->take(10)->get();
        $category = Category::orderBy('created_at','desc')->take(4)->get();
        $link = Post::orderBy('created_at','desc')->take(4)->get();
        return view ("blog",['news' => $news, 'category'=>$category,'link'=>$link]);
    }

    public function blog_detail($id){
        $post = Post::find($id);
        $category = Category::orderBy('created_at','desc')->take(4)->get();
        $link = Post::orderBy('created_at','desc')->take(4)->get();
        return view ("blog_detail",['post' => $post, 'category'=>$category,'link'=>$link]);
    }


    public function contact(){
        return view ("contact");
    }

    public function post(){
        $news = Post::orderBy('created_at','desc')->take(10)->get();
        return view ("post",['news'=>$news]);
    }

    public function post_detail(){
        return view ("post_detail");
    }

    public function donate(){
        return view ("donate");
    }

    function sendemail(Request $request)
    {
        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
        );

        Mail::to("sonthth1903012@fpt.edu.vn")->send(new SendEmail($data));
//        Mail::to(Auth::user()->email)->send(new SendEmail());
        return redirect()->to("/thanks");
    }

    function sendscholarship(Request $request)
    {
        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'email'   =>   $request->email,
        );

        Mail::to(Auth::user()->email)->send(new SendTicket($data));
        return redirect()->to("/thanks");
    }


    public function thanks(){
        return view ("thanks");
    }
//

    public function scholarships(){
        return view ("scholarships");
    }
    public function scholarships_detail(){
        return view ("scholarships_detail");
    }
    public function workshop(){
        return view ("workshop");
    }
    public function form_scholarships(){
        return view("form_scholarships");
    }

}
