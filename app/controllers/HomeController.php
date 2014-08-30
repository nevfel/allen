<?php

class HomeController extends BaseController {


	public function getContact()
	{
		return View::make('home.contact');
	}

	public function postContact()
	{
		$input = Input::all();

		$validation = Validator::make($input, Contact::$rules);
		
		if ($validation->passes())
		{
			$input["ip_address"] = $_SERVER["REMOTE_ADDR"];

			Contact::create($input);

			return Redirect::to('contact')
				->with("alert","success")
				->with("message","Thank you for filling in this form! Your information has been successfully submitted. We will process its contents and get back to you as soon as possible.");
		}

		return Redirect::to('contact')
			->withInput()
			->withErrors($validation)
			->with('alert','warning')
			->with('message', 'There were validation errors.');
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

	public function storage()
	{
		return View::make("home.storage");
	}
}