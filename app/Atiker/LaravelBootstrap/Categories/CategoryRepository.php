<?php namespace Atiker\LaravelBootstrap\Categories;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class CategoryRepository extends EloquentBaseRepository implements CategoryInterface
{

    use TaggableRepository;

    /**
     * Construct Shit
     * @param Categorys $Categorys
     */
    public function __construct( Category $category )
    {
        $this->model = $category;
    }

    /**
     * Get all the blocks where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key)
    {
        return $this->model->where('key','=',$key)->first();
    }

    public function getBySlug($slug)
    {
        return $this->model->where('slug','=',$slug)->with("products")->first();
    }

    public function getLatestCategories($num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

    public function getInterestedCategories($category,$num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

    public function getRelatedCategories($category,$num)
    {
        return $this->model->orderBy("created_at","desc")->take($num)->get();
    }

    public function getKategoriList()
    {
        return $this->model->lists("name","id");
    }

}