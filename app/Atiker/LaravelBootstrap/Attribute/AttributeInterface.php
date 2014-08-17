<?php namespace Atiker\LaravelBootstrap\Attribute;

interface AttributeInterface {

    /**
     * Get all the Attributes where the key is equal to the item you mention
     * @return Eloquent
     */
    public function getByKey($key);

}