<?php
use Atiker\LaravelBootstrap\Categories\CategoryInterface;

class CategoryController extends BaseController {

	protected $repo;
	public function __construct(CategoryInterface $kategoriler)
	{
		parent::__construct();
		$this->repo = $kategoriler;
	}

	public function getBySlug($slug)
	{
		$model =  $this->repo->getBySlug($slug);
		$SideNav = App::make('Atiker\LaravelBootstrap\Menu\MenuInterface')->getSideNav();

		return View::make("category.index",compact("model","SideNav"));
	}
}