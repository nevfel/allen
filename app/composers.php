<?php

View::composer("layouts._navigation", "Atiker\LaravelBootstrap\Composers\Site");
View::composer("home.index", function($view){
	$blocks = App::make('Atiker\LaravelBootstrap\Blocks\BlocksInterface');
	$about = $blocks->getByKey('about')->content;
	$view->with("about",$about); 
});
View::composer("home.contact", function($view){
	$blocks = App::make('Atiker\LaravelBootstrap\Blocks\BlocksInterface');
	
	$address =	$blocks->getByKey('address')->content;
	$phone 	 = 	$blocks->getByKey('phone')->content;
	$contact_lead =	$blocks->getByKey('contact_lead')->content;
	
	$view->with("address",$address)
		 ->with('phone',$phone)
		 ->with('contact_lead',$contact_lead); 
});
View::composer("home.storage", function($view){
	$blocks = App::make('Atiker\LaravelBootstrap\Blocks\BlocksInterface');
	
	$storage =	$blocks->getByKey('storage');

	$view->with("storage",$storage); 
});
