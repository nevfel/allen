<?php namespace Atiker\LaravelBootstrap\Entity;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class EntityRepository extends EloquentBaseRepository implements EntityInterface
{

    use TaggableRepository;

    /**
     * Construct Shit
     * @param Entitys $Entitys
     */
    public function __construct( Entity $Entity )
    {
        $this->model = $Entity;
    }

    /**
     * Get all the entities where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key)
    {
        return $this->model->where('key','=',$key)->first();
    }
   

}