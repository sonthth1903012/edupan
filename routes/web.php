<?php

Route::prefix("admin")->group(function(){
    include_once("admin.php");
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('pages.home');
});
Route::get("/","WebController@home");
Route::get("/about_us","WebController@about_us");
Route::get("/course","WebController@course");
Route::get("/blog","WebController@blog");
Route::get("/contact","WebController@contact");
