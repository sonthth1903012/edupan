<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\SendEmail;
use App\Mail\SendTicket;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function home(){
        $news = Post::orderBy('created_at', 'desc')->paginate(4);
        return view("home",['news'=>$news]);
    }

    public function about_us(){
        return view ("about_us");
    }

//    public function blog(){
//        if(!Cache::has("blog") ) {
//            $cache['news'] = Post::orderBy('created_at', 'desc')->paginate(5);
//            $cache['category'] = Category::orderBy('created_at', 'desc')->take(4)->get();
//            $cache['link'] = Post::orderBy('created_at', 'desc')->take(4)->get();
//
//            $news= $cache['news'];
//            $category= $cache['category'];
//            $link= $cache['link'];
//
//            $view = view("blog", ['news' => $news, 'category' => $category, 'link' => $link])->render();
//
//            $now=Carbon::now();
//            $expireDate = $now->addMinutes(0);
//
//            Cache::put("blog",$view,$expireDate);
//        }
//        return Cache::get("blog");
//    }

    public function blog() {
        $news = Post::orderBy('created_at', 'desc')->paginate(5);
        $category = Category::orderBy('created_at', 'desc')->take(4)->get();
        $link = Post::orderBy('created_at', 'desc')->take(4)->get();
        return view("blog",['news' => $news, 'category' => $category, 'link' => $link]);
    }

    public function blog_detail($id){
        $post = Post::find($id);
        $category = Category::orderBy('created_at','desc')->take(4)->get();
        $link = Post::orderBy('created_at','desc')->take(4)->get();
        return view ("blog_detail",['post' => $post, 'category'=>$category,'link'=>$link]);
    }

    public function search(Request $request){
        $search = $request -> search;
        $result = Post::where('title','like',"%$search%")->orWhere('shortDesc','like',"%$search%")
            ->orWhere('content','like',"%$search%")->take(20)->paginate(5);
        $category = Category::orderBy('created_at','desc')->take(4)->get();
        $link = Post::orderBy('created_at','desc')->take(4)->get();
        return view("search",['$search' => $search,'category'=>$category,'link'=>$link, 'result' => $result]);
    }


    public function contact(){
        return view ("contact");
    }

    public function post(){
        return view("post");
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
