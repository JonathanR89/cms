<?php

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

//Route::get('/', function () {
//    return view('welcome');
//   #return 'Hello World';
//});

//Route::get('/contact', 'PostsController@contact');

//Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

//Route::get('/insert', function(){
//	DB::insert('insert into posts(title, content) values(?, ?)', ['Laravel Title', 'Laravel bosy text.']);
//});


//Route::get('/read', function() {
//	$results = DB::select('select * from posts where id = ?', [1]);
//
//	foreach($results as $post){
//		return $post->title;
//	}
//});


Route::get('/update', function(){
	$updated = DB::update('update posts set title = "Update Title" where id = ?', [1]);
	return $updated;
});