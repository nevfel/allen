<?php namespace Atiker\LaravelBootstrap\Posts;

interface PostsInterface {

    /**
     * Get all posts by date published ascending
     * @return Posts
     */
    public function getAllByDateAsc($num);

    /**
     * Get all posts by date published descending
     * @return Posts
     */
    public function getAllByDateDesc($num);

}