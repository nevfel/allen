<?php namespace Atiker\LaravelBootstrap\Product;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class ProductRepository extends EloquentBaseRepository implements ProductInterface
{

    use TaggableRepository;

    /**
     * Construct Shit
     * @param Products $products
     */
    public function __construct( Product $product )
    {
        $this->model = $product;
    }

    /**
     * Get all the blocks where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key)
    {
        return $this->model->where('key','=',$key)->first();
    }

    public function getLatestProducts($num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

    public function getInterestedProducts($product,$num)
    {
        return $this->model->orderBy("updated_at","desc")->take($num)->get();
    }

    public function getRelatedProducts($product,$num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

}