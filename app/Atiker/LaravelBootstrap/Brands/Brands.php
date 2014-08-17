<?php namespace Atiker\LaravelBootstrap\Brands;
use Atiker\LaravelBootstrap\Core\EloquentBaseModel;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;
use Atiker\LaravelBootstrap\Abstracts\Traits\UploadableRelationship;

class Brands extends EloquentBaseModel
{

    use TaggableRelationship; // Enable The Tags Relationships
    use UploadableRelationship; // Enable The Uploads Relationships

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'brands';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('name', 'slug');
    protected $visible = array('name', 'slug');

    protected $validationRules = [
        'name'     => 'required',
        'slug'      => 'required'
    ];

    public function products()
    {
        return $this->hasMany('\Atiker\LaravelBootstrap\Product');
    }

}
