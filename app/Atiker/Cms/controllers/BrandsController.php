<?php namespace Atiker\Cms\Controllers;
use Atiker\LaravelBootstrap\Brands\BrandsInterface;

class BrandsController extends ObjectBaseController {

    /**
     * The place to find the views / URL keys for this controller
     * @var string
     */
    protected $view_key = 'admin.brands';

    /**
     * Construct Shit
     */
    public function __construct(BrandsInterface $brands )
    {
        $this->model = $brands;
        parent::__construct();
        
    }

}