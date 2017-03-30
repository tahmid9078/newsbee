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

Route::get('/', "IndexController@index");

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/sports', "IndexController@index_sports");

Route::get('/political', "IndexController@index_political");

Route::get('/technology', "IndexController@index_technology");

Route::get('/entertainment', "IndexController@index_entertainment");

Route::get('/login', "IndexController@index_login");

Route::get('/api/facebook/{id}', function($id){

	$fb = DB::table('facebook')->where("catagory", $id) -> get();
	return json_encode($fb);
});


Route::get('/api/hard/{id}', function($id){

	$fb = DB::table('hardcopy')->where("catagory", $id) -> get();
	return json_encode($fb);
});


Route::get('/api/web/{id}', function($id){

	$fb = DB::table('web')->where("catagory", $id) -> get();
	return json_encode($fb);
});

Route::get('/addNews', "IndexController@index_add_news");


Route::get('/redirect', "IndexController@index");

Route::post('/advertise', "IndexController@index_advertise");
