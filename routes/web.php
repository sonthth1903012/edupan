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
Route::get("/contact","WebController@contact");
Route::get("/donate","WebController@donate");
Route::get("/thanks", 'WebController@thanks');
//
Route::get("/post","WebController@post");
Route::get("/post_detail","WebController@post_detail");
//
Route::prefix('/blog')->group(function () {
    Route::get("/","WebController@blog");
    Route::get("/{id}","WebController@blog_detail");
});
//
Route::post("/sendemail", 'WebController@sendemail');
Route::post("/sendscholarship", 'WebController@sendscholarship')->middleware("auth");
//
Route::post("/search","WebController@search");
//

Route::get("/scholarships","WebController@scholarships");
Route::get("/scholarships_detail","WebController@scholarships_detail");
Route::get("/form_scholarships","WebController@form_scholarships");
Route::get("/workshop","WebController@workshop");

//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function() {
    Illuminate\Support\Facades\Auth::logout();
    return redirect()->to("/");
});










