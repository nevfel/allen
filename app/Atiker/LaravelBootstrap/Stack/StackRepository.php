<?php namespace Atiker\LaravelBootstrap\Stack;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class StackRepository extends EloquentBaseRepository implements StackInterface
{


    /**
     * Construct Shit
     * @param Stacks $Stacks
     */
    public function __construct( Stack $stack )
    {
        $this->model = $stack;
    }

   

}