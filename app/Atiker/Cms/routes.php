<?php

// Get the URL segment to use for routing
$urlSegment = Config::get('atiker-cms.access_url');

// Filter all requests ensuring a user is logged in when this filter is called
Route::filter('adminFilter', 'Atiker\LaravelBootstrap\Filters\Admin');

Route::controller( $urlSegment.'/users'     , 'Atiker\Cms\Controllers\UsersController' );
Route::controller( $urlSegment.'/galleries' , 'Atiker\Cms\Controllers\GalleriesController' );
Route::controller( $urlSegment.'/categories', 'Atiker\Cms\Controllers\CategoryController' );
Route::controller( $urlSegment.'/settings'  , 'Atiker\Cms\Controllers\SettingsController' );
Route::controller( $urlSegment.'/blocks'    , 'Atiker\Cms\Controllers\BlocksController' );
Route::controller( $urlSegment.'/posts'     , 'Atiker\Cms\Controllers\PostsController' );
Route::controller( $urlSegment.'/menu'      , 'Atiker\Cms\Controllers\MenuController' );
Route::controller( $urlSegment.'/products'  , 'Atiker\Cms\Controllers\ProductController' );
Route::controller( $urlSegment.'/brands'	, 'Atiker\Cms\Controllers\BrandsController' );
Route::controller( $urlSegment.'/entities'	, 'Atiker\Cms\Controllers\EntitiesController' );
Route::controller( $urlSegment              , 'Atiker\Cms\Controllers\DashController'  );

/** Include IOC Bindings **/
include __DIR__.'/bindings.php';
