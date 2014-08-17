<?php namespace Atiker\LaravelBootstrap\Brands;

interface BrandsInterface {

    /**
     * Get all the Brands where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key);

}