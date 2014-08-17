<?php
use Atiker\LaravelBootstrap\Posts\PostsInterface;

class PostlarController extends BaseController {

	protected $repo;
	public function __construct(PostsInterface $posts)
	{
		parent::__construct();
		$this->repo = $posts;
	}

	public function getBySlug($slug)
	{
		$model =  $this->repo->getBySlug($slug);
		return View::make("postlar.index",compact("model"));
	}
}