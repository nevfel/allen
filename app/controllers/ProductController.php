<?php
use Atiker\LaravelBootstrap\Product\ProductInterface;

class ProductController extends BaseController {

	protected $repo;
	public function __construct(ProductInterface $product)
	{
		$this->repo = $product;
		parent::__construct();
	}

	public function showIndex()
	{
		$new_products = $this->repo->getLatestProducts(8);
		$new_posts = App::make("Atiker\LaravelBootstrap\Posts\PostsInterface")->getNewPosts(2);

		return View::make('home.index',compact("new_products","new_posts"));
	}

	public function cart()
	{
		return View::make("product.cart");
	}

	public function getBySlug($slug)
	{
		$product = $this->repo->getBySlug($slug);
		

		$interested_products = $this->repo->getInterestedProducts($product,3);
		$related_products = $this->repo->getRelatedProducts($product,3);
		$SideNav = App::make('Atiker\LaravelBootstrap\Menu\MenuInterface')->getSideNav();

		return View::make("product.index",compact("product","interested_products","related_products","SideNav"));
	}
}