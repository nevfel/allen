<?php namespace Atiker\LaravelBootstrap\Brands;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class BrandsRepository extends EloquentBaseRepository implements BrandsInterface
{

    use TaggableRepository;

    /**
     * Construct Shit
     * @param Brands $Brands
     */
    public function __construct( Brands $Brand )
    {
        $this->model = $Brand;
    }

    /**
     * Get all the blocks where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key)
    {
        return $this->model->where('key','=',$key)->first();
    }

    public function getLatestBrands($num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

    public function getInterestedBrands($Brand,$num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

    public function getRelatedBrands($Brand,$num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

}