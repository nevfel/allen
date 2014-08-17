<?php namespace Atiker\Cms\Controllers;
use Atiker\LaravelBootstrap\Entity\EntityInterface;

class EntitiesController extends ObjectBaseController {

    /**
     * The place to find the views / URL keys for this controller
     * @var string
     */
    protected $view_key = 'admin.entities';

    /**
     * Construct Shit
     */
    public function __construct(EntityInterface $entity )
    {
        $this->model = $entity;
        parent::__construct();
        
    }

}