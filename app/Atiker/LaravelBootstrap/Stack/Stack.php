<?php namespace Atiker\LaravelBootstrap\Stack;
use Atiker\LaravelBootstrap\Core\EloquentBaseModel;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;
use Atiker\LaravelBootstrap\Abstracts\Traits\UploadableRelationship;

class Stack extends EloquentBaseModel
{

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'stacks';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('attribute_id', 'name');
    protected $visible = array('attribute_id', 'name');

    
}
