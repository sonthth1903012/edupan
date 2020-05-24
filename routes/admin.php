<?php

Route::get('home', "AdminController@home");
//Route::get('/', "AdminController@home");


Route::get('user', "AdminController@user");
Route::post('user/create', "AdminController@createUser");
Route::get('user/create', "AdminController@renderNewUser");
Route::get('user/edit_user/{id}', "AdminController@userEdit");
Route::post('user/update_user/{id}', "AdminController@userUpdate");
Route::get('user/delete_user/{id}', "AdminController@userDelete");


Route::get('category', "AdminController@category");
Route::get('category/create_category', "AdminController@categoryCreate");
Route::post('category/store_category', "AdminController@categoryStore");

Route::get('category/edit_category/{id}', "AdminController@categoryEdit");
Route::post('category/update_category/{id}', "AdminController@categoryUpdate");
Route::get('category/delete_category/{id}', "AdminController@categoryDelete");


Route::get('post', "AdminController@post");
Route::get('post/create_post', "AdminController@postCreate");
Route::post('post/store_post', "AdminController@postStore");

Route::get('post/edit_post/{id}', "AdminController@postEdit");
Route::post('post/update_post/{id}', "AdminController@postUpdate");
Route::get('post/delete_post/{id}', "AdminController@postDelete");

//comment
Route::get('comment', "AdminController@comment");
Route::get('comment/create_comment', "AdminController@commentCreate");
Route::post('comment/store_comment', "AdminController@commentStore");

Route::get('comment/edit_comment/{id}', "AdminController@commentEdit");
Route::post('comment/update_comment/{id}', "AdminController@commentUpdate");
Route::get('comment/delete_comment/{id}', "AdminController@commentDelete");

//school
Route::get('school', "Admin\SchoolController@school");
Route::get('school/create_school', "Admin\SchoolController@schoolCreate");
Route::post('school/store_school', "Admin\SchoolController@schoolStore");

Route::get('school/edit_school/{id}', "Admin\SchoolController@schoolEdit");
Route::post('school/update_school/{id}', "Admin\SchoolController@schoolUpdate");
Route::get('school/delete_school/{id}', "Admin\SchoolController@schoolDelete");

//scholarship
Route::get('scholarship', "Admin\ScholarshipController@scholarship");
Route::get('scholarship/create_scholarship', "Admin\ScholarshipController@scholarshipCreate");
Route::post('scholarship/store_scholarship', "Admin\ScholarshipController@scholarshipStore");

Route::get('scholarship/edit_scholarship/{id}', "Admin\ScholarshipController@scholarshipEdit");
Route::post('scholarship/update_scholarship/{id}', "Admin\ScholarshipController@scholarshipUpdate");
Route::get('scholarship/delete_scholarship/{id}', "Admin\ScholarshipController@scholarshipDelete");
Route::get('scho_student/list_scholarship_student/{id}',"Admin\ScholarshipController@listForm");
Route::get('scho_student/student/approve/{id}',"Admin\ScholarshipController@approveStudent");
Route::get('scho_student/student/remove/{id}',"Admin\ScholarshipController@removeStudent");

//download file
Route::get("download/{filename}", "Admin\DownloadController@download");

//organization
Route::get('organization', "Admin\OrganizationController@organization");
Route::get('organization/create_organization', "Admin\OrganizationController@organizationCreate");
Route::post('organization/store_organization', "Admin\OrganizationController@organizationStore");

Route::get('organization/edit_organization/{id}', "Admin\OrganizationController@organizationEdit");
Route::post('organization/update_organization/{id}', "Admin\OrganizationController@organizationUpdate");
Route::get('organization/delete_organization/{id}', "Admin\OrganizationController@organizationDelete");

//project
Route::get('project', "Admin\ProjectController@project");
Route::get('project/create_project', "Admin\ProjectController@projectCreate");
Route::post('project/store_project', "Admin\ProjectController@projectStore");

Route::get('project/edit_project/{id}', "Admin\ProjectController@projectEdit");
Route::post('project/update_project/{id}', "Admin\ProjectController@projectUpdate");
Route::get('project/delete_project/{id}', "Admin\ProjectController@projectDelete");
Route::get("project/edit_project/{id}/list_donate", "Admin\ProjectController@listDonate");
