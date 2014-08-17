<?php
use Atiker\LaravelBootstrap\Galleries\GalleriesInterface;

class UygulamalarController extends BaseController {

	protected $repo;
	public function __construct(GalleriesInterface $galleries)
	{
		parent::__construct();
		$this->repo = $galleries;
	}

	public function getBySlug($slug)
	{
		$model =  $this->repo->getBySlug($slug);

		return View::make("uygulamalar.index",compact("model"));
	}
}