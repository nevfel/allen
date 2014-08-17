<?php namespace Atiker\LaravelBootstrap\Tags;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use DB;

class TagsRepository extends EloquentBaseRepository implements TagsInterface
{

    /**
     * Construct Shit
     * @param Tags $tags
     */
    public function __construct( Tags $tags )
    {
        $this->model = $tags;
    }

    public function getTagsRandom($number)
    {
    	return $this->model->orderBy(DB::raw('RAND()'))->take($number)->lists("tag");
    }
}