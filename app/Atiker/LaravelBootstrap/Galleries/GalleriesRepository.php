<?php namespace Atiker\LaravelBootstrap\Galleries;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class GalleriesRepository extends EloquentBaseRepository implements GalleriesInterface
{

    use TaggableRepository;

    /**
     * Construct Shit
     * @param Galleries $galleries
     */
    public function __construct( Galleries $galleries )
    {
        $this->model = $galleries;
    }

}