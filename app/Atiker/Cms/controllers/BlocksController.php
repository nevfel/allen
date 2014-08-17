<?php namespace Atiker\Cms\Controllers;
use Atiker\LaravelBootstrap\Blocks\BlocksInterface;

class BlocksController extends ObjectBaseController {

    /**
     * The place to find the views / URL keys for this controller
     * @var string
     */
    protected $view_key = 'admin.blocks';

    /**
     * Construct Shit
     */
    public function __construct( BlocksInterface $blocks )
    {
        $this->model = $blocks;
        parent::__construct();
    }

}