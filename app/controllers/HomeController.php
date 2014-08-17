<?php

class HomeController extends BaseController {


	public function getContact()
	{
		return View::make('home.contact');
	}

	public function postIletisim()
	{
		echo "<pre>";
		print_r(Input::all());
	}

	public function getIk()
	{
		return View::make('home.ik');
	}

	public function postIk()
	{
		echo "<pre>";
		print_r(Input::all());
	}

	public function getAbout()
	{
		return View::make('home.about');
	}

	public function blog()
	{
		$posts = App::make("Atiker\LaravelBootstrap\Posts\PostsInterface")->getAllByDateDesc(5);
		return View::make('home.blog',compact("posts"));
	}

	public function post($slug)
	{
		$post =  App::make("Atiker\LaravelBootstrap\Posts\PostsInterface")->getBySlug($slug);

		return View::make('home.post',compact("post"));
	}
}