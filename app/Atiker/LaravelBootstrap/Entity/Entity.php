<?php namespace Atiker\LaravelBootstrap\Entity;
use Atiker\LaravelBootstrap\Core\EloquentBaseModel;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;
use Atiker\LaravelBootstrap\Abstracts\Traits\UploadableRelationship;

class Entity extends EloquentBaseModel
{

    use TaggableRelationship; // Enable The Tags Relationships
    use UploadableRelationship; // Enable The Uploads Relationships

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'entities';

    /**
     * These are the mass-assignable keys
     * @var array
     */
   protected $fillable = array('category_id', 'name', 'order_number');
    protected $visible = array('category_id', 'name', 'order_number');


    protected $validationRules = [
        'name'     => 'required',
        'category_id'      => 'required'
    ];

    public function category()
    {
        return $this->belongsTo('\Atiker\LaravelBootstrap\Category');
    }

    public function attributes()
    {
        return $this->hasMany('\Atiker\LaravelBootstrap\Attribute');
    }

}
