<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function donate(){
        return view ("donate");
    }

    function sendemail()
    {
        Mail::to("sonthth1903012@fpt.edu.vn")->send(new SendEmail());
        return redirect()->to("/");
    }

}
