<?php

Route::prefix("admin")->middleware("check_admin")->group(function () {
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
Route::get("/", "WebController@home");
Route::get("/about_us", "WebController@about_us");
Route::get("/contact", "WebController@contact");

Route::get("/thanks", 'WebController@thanks');
//
Route::get("/post", "WebController@post");
Route::get("/post_detail", "WebController@post_detail");
//
Route::prefix('/blog')->group(function () {
    Route::get("/", "WebController@blog");
    Route::get("/{id}", "WebController@blog_detail");
    Route::get("/category/{id}", "Webcontroller@blog_category");
});
//
Route::post("/sendemail", 'WebController@sendemail');
Route::post("/sendscholarship", 'WebController@sendscholarship')->middleware("auth");
//
Route::post("/search", "WebController@search");
//

Route::get("/project/all", "Web\ProjectController@archiveProject");
Route::get("/project/detail/{id}", "Web\ProjectController@singleProject");
Route::get("/project/detail/{id}/register", "Web\ProjectController@projectForm")->middleware("auth");
Route::post("/project/detail/{id}/register", "Web\ProjectController@storeProject")->middleware("auth");
Route::get("/project/detail/{id}/register/success", "Web\ProjectController@registerSuccess")->middleware("auth");
Route::get("/organization/detail/{id}", "Web\OrganizationController@detailOrganization");

//
Route::get("/scholarship/all", "Web\ScholarshipController@archiveScholarship");
Route::get("/scholarship/detail/{id}", "Web\ScholarshipController@singleScholarship");
Route::get("/scholarship/detail/{id}/register", "Web\ScholarshipController@registerScholarship");
Route::post("/scholarship/detail/{id}/register", "Web\ScholarshipController@storeForm");
Route::get("/school/detail/{id}", "Web\SchoolController@detailSchool");
Route::get("/scholarship/congratulations","Web\ScholarshipController@congratulationsScholarship");

Route::get("/workshop", "WebController@workshop");
//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function () {
    Illuminate\Support\Facades\Auth::logout();
    return redirect()->to("/");
});










