<?php namespace Atiker\Cms\Controllers;
use Atiker\LaravelBootstrap\Galleries\GalleriesInterface;

class GalleriesController extends ObjectBaseController {

    /**
     * The place to find the views / URL keys for this controller
     * @var string
     */
    protected $view_key = 'admin.galleries';

    /**
     * Construct Shit
     */
    public function __construct( GalleriesInterface $galleries )
    {
        $this->model = $galleries;
        parent::__construct();
    }

}