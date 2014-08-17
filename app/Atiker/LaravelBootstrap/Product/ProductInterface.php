<?php namespace Atiker\LaravelBootstrap\Product;

interface ProductInterface {

    /**
     * Get all the Products where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key);

}