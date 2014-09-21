<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','ProductController@showIndex');
Route::get('contact','HomeController@getContact');
Route::post('contact','HomeController@postContact')->before("csrf");

Route::get("category/{slug}","CategoryController@getBySlug");
Route::get("product/{slug}","ProductController@getBySlug");
Route::get("post/{slug}", "HomeController@post");



Route::get("cart", "ProductController@cart");
Route::get("text", "HomeController@getAbout");
Route::get("blog", "HomeController@blog");
Route::get("storage", "HomeController@storage");

Route::get('ik','HomeController@getIk');
Route::post('ik','HomeController@postIk')->before("csrf");
Route::get("kurumsal/tarihce","HomeController@getAbout");

Route::get("uygulamalar/{slug}","UygulamalarController@getBySlug");
Route::get("postlar/{slug}","PostlarController@getBySlug");



Route::get('product', function()
{
	return View::make('home.product',array("nav"=>""));
});



Route::get('iletisim/index', function()
{
	return Redirect::to("iletisim",301);
});

Route::get('ik/index', function()
{
	return Redirect::to("ik",301);
});