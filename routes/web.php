<?php

Auth::routes();
/*
// home page for login
Route::get('/home', 'HomeController@index')->name('home');
*/
// index page route
Route::get('/','BlogsController@index' );

//blogs page route
Route::get('/blogs', 'BlogsController@index')->name('blogs'); 
//create
Route::get('/blogs/create', 'BlogsController@create')->name('blogs.create'); 

// to submit blog post
Route::post('/blogs/store', 'BlogsController@store')->name('blogs.store'); 

//keep trashed routes here
Route::get('/blogs/trash', 'BlogsController@trash')->name('blogs.trash');
//restore
Route::get('/blogs/trash{id}/restore', 'BlogsController@restore')->name('blogs.restore');
//permanet delete
Route::delete('/blogs/trash/{id}/permanent-delete', 'BlogsController@permanentDelete')->name('blogs.permanent-delete');

//Make route parameter
Route::get('/blogs/{id}', 'BlogsController@show')->name('blogs.show');  
//Edit route
Route::get('/blogs/{id}/edit', 'BlogsController@edit')->name('blogs.edit'); 
//Update route
Route::patch('/blogs/{id}/update', 'BlogsController@update')->name('blogs.update');
//Delete route
Route::delete('/blogs/{id}/delete', 'BlogsController@delete')->name('blogs.delete'); 

// admin routes
Route::get('/admin', 'AdminController@index')->name('admin.index');

//route resource
Route::resource('categories', 'CategoryController');