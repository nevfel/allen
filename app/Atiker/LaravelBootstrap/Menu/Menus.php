<?php namespace Atiker\LaravelBootstrap\Menu;
use Atiker\LaravelBootstrap\Core\EloquentBaseModel;
use Atiker\LaravelBootstrap\Abstracts\Traits\MenuableRelationship;

class Menus extends EloquentBaseModel
{
    use MenuableRelationship;
    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'menus';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('title', 'slug', 'description','parent_id','sort','route');

    protected $validationRules = [
        'title'     => 'required',
        'slug'      => 'required'
    ];

   
}
