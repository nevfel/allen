<?php namespace Atiker\LaravelBootstrap\Product;
use Atiker\LaravelBootstrap\Core\EloquentBaseModel;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;
use Atiker\LaravelBootstrap\Abstracts\Traits\UploadableRelationship;

class Product extends EloquentBaseModel
{

    use TaggableRelationship; // Enable The Tags Relationships
    use UploadableRelationship; // Enable The Uploads Relationships

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'products';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('title', 'slug', 'description','category_id','brand_id','name','price','saleprice');

    protected $validationRules = [
        'title'     => 'required',
        'slug'      => 'required',
        'description'   => 'required'
    ];

    public function brand()
    {
        return $this->belongsTo('\Atiker\LaravelBootstrap\Brand');
    }

    public function category()
    {
        return $this->belongsTo('\Atiker\LaravelBootstrap\Category');
    }

    public function values()
    {
        return $this->hasMany('\Atiker\LaravelBootstrap\Value');
    }

}
