<?php

Route::get('/',"AdminController@home");

Route::get('category',"AdminController@category");

Route::get('category/create_category',"AdminController@categoryCreate");
Route::post('category/store',"AdminController@categoryStore");

Route::get('category/edit_category/{id}',"AdminController@categoryEdit");
Route::post('category/update/{id}',"AdminController@categoryUpdate");
