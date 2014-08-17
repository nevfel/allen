<?php namespace Atiker\LaravelBootstrap\Posts;
use Atiker\LaravelBootstrap\Core\EloquentBaseRepository;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class PostsRepository extends EloquentBaseRepository implements PostsInterface
{

    use TaggableRepository;

    /**
     * Construct Shit
     * @param Posts $posts
     */
    public function __construct( Posts $posts )
    {
        $this->model = $posts;
    }

    /**
     * Get all posts by date published ascending
     * @return Posts
     */
    public function getAllByDateAsc($num)
    {
        return $this->model->orderBy('created_at','asc')->paginate($num);
    }

    /**
     * Get all posts by date published descending
     * @return Posts
     */
    public function getAllByDateDesc($num)
    {
        return $this->model->orderBy('created_at','desc')->paginate($num);
    }

    public function getNewPosts($num)
    {
        return $this->model->orderBy('created_at','desc')->take($num)->get();
    }

}