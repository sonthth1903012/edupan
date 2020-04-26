<?php

Route::prefix("admin")->middleware("check_admin")->group(function(){
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
    return view('pages.home');
});
Route::get("/","WebController@home");
Route::get("/about_us","WebController@about_us");
Route::get("/post","WebController@post");
Route::get("/post_detail","WebController@post_detail");
Route::get("/blog","WebController@blog");
Route::get("/blog_detail","WebController@blog_detail");
Route::get("/contact","WebController@contact");
Route::get("/thanks", 'WebController@thanks');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/logout', function() {
    Illuminate\Support\Facades\Auth::logout();
    return redirect()->to("/home");
});


Route::get("/donate","WebController@donate");
Route::post("/sendemail", 'WebController@sendemail');






