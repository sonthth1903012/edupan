<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download($filename){
        if (Storage::disk("uploads")->exists($filename)){
            return Storage::disk("uploads")->download($filename);
//            return dd(true);
        }
    }
}
