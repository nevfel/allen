<?php namespace Atiker\LaravelBootstrap\Manufacturers;

interface ManufacturersInterface {

    /**
     * Get all the Manufacturers where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key);

}