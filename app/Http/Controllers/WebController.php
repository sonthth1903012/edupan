<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function home(){
        return view ("home");
    }

    public function about_us(){
        return view ("about_us");
    }

    public function blog(){
        return view ("blog");
    }

    public function contact(){
        return view ("contact");
    }

    public function post(){
        return view ("post");
    }


}
