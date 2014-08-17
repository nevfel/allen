<?php namespace Atiker\LaravelBootstrap\Value;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class ValueRepository extends EloquentBaseRepository implements ValueInterface
{


    /**
     * Construct Shit
     * @param Values $Values
     */
    public function __construct( Value $value )
    {
        $this->model = $value;
    }

   

}