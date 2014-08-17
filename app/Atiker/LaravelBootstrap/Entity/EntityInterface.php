<?php namespace Atiker\LaravelBootstrap\Entity;

interface EntityInterface {

    /**
     * Get all the Entitys where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key);

}