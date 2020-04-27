<?php

Route::get('home',"AdminController@home");
Route::get('/',"AdminController@home");


Route::get('user',"AdminController@user");
Route::get('user/create_user',"AdminController@userCreate");
Route::post('user/store_user',"AdminController@userStore");

Route::get('user/edit_user/{id}',"AdminController@userEdit");
Route::post('user/update_user/{id}',"AdminController@userUpdate");
Route::get('user/delete_user/{id}',"AdminController@userDelete");


Route::get('category',"AdminController@category");
Route::get('category/create_category',"AdminController@categoryCreate");
Route::post('category/store_category',"AdminController@categoryStore");

Route::get('category/edit_category/{id}',"AdminController@categoryEdit");
Route::post('category/update_category/{id}',"AdminController@categoryUpdate");
Route::get('category/delete_category/{id}',"AdminController@categoryDelete");


Route::get('post',"AdminController@post");
Route::get('post/create_post',"AdminController@postCreate");
Route::post('post/store_post',"AdminController@postStore");

Route::get('post/edit_post/{id}',"AdminController@postEdit");
Route::post('post/update_post/{id}',"AdminController@postUpdate");
Route::get('post/delete_post/{id}',"AdminController@postDelete");


Route::get('comment',"AdminController@comment");
Route::get('comment/create_comment',"AdminController@commentCreate");
Route::post('comment/store_comment',"AdminController@commentStore");

Route::get('comment/edit_comment/{id}',"AdminController@commentEdit");
Route::post('comment/update_comment/{id}',"AdminController@commentUpdate");
Route::get('comment/delete_comment/{id}',"AdminController@commentDelete");
