<?php namespace Atiker\LaravelBootstrap\Categories;
use Atiker\LaravelBootstrap\Core\EloquentBaseModel;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;
use Atiker\LaravelBootstrap\Abstracts\Traits\UploadableRelationship;

class Category extends EloquentBaseModel
{

    use TaggableRelationship; // Enable The Tags Relationships
    use UploadableRelationship; // Enable The Uploads Relationships

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'categories';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('name', 'slug','description');
    protected $visible = array('name', 'slug', 'description');

    protected $validationRules = [
        'name'     => 'required',
        'slug'      => 'required'
    ];

    public function entities()
    {
        return $this->hasMany('\Atiker\LaravelBootstrap\Entity');
    }
    
    public function products()
    {
        return $this->hasMany('\Atiker\LaravelBootstrap\Product\Product','category_id');
    }

}
