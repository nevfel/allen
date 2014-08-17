<?php namespace Atiker\LaravelBootstrap\Categories;

interface CategoryInterface {

    /**
     * Get all the Categorys where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key);

}