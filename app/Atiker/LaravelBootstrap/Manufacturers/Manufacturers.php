<?php namespace Atiker\LaravelBootstrap\Manufacturers;
use Atiker\LaravelBootstrap\Core\EloquentBaseModel;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;

class Manufacturers extends EloquentBaseModel
{

    use TaggableRelationship; // Enable The Tags Relationships

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'manufacturers';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('title', 'slug');

    protected $validationRules = [
        'title'     => 'required',
        'slug'      => 'required'
    ];

    public function products()
    {
        return $this->hasMany("Atiker\LaravelBootstrap\Products\Products");
    }
}
