<?php namespace Atiker\LaravelBootstrap\Attribute;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class AttributeRepository extends EloquentBaseRepository implements AttributeInterface
{

    use TaggableRepository;

    /**
     * Construct Shit
     * @param Attributes $Attributes
     */
    public function __construct( Attribute $attribute )
    {
        $this->model = $attribute;
    }

    /**
     * Get all the blocks where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key)
    {
        return $this->model->where('key','=',$key)->first();
    }

    public function getLatestAttributes($num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

    public function getInterestedAttributes($Attribute,$num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

    public function getRelatedAttributes($Attribute,$num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

}