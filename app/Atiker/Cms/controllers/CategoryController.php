<?php namespace Atiker\Cms\Controllers;
use Atiker\LaravelBootstrap\Categories\CategoryInterface;

class CategoryController extends ObjectBaseController {

    /**
     * The place to find the views / URL keys for this controller
     * @var string
     */
    protected $view_key = 'admin.categories';

    /**
     * Construct Shit
     */
    public function __construct(CategoryInterface $kategoriler )
    {
        $this->model = $kategoriler;
        
        parent::__construct();
    }

}