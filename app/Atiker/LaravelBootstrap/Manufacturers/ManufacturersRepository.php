<?php namespace Atiker\LaravelBootstrap\Manufacturers;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class ManufacturersRepository extends EloquentBaseRepository implements ManufacturersInterface
{

    use TaggableRepository;

    /**
     * Construct Shit
     * @param Manufacturers $manufacturers
     */
    public function __construct( Manufacturers $manufacturers )
    {
        $this->model = $manufacturers;
    }

    /**
     * Get all the blocks where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key)
    {
        return $this->model->where('key','=',$key)->first();
    }

    public function getManufacturerList()
    {
        return $this->model->lists('title','id');
    }

}