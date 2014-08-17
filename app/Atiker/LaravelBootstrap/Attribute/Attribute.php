<?php namespace Atiker\LaravelBootstrap\Attribute;
use Atiker\LaravelBootstrap\Core\EloquentBaseModel;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;
use Atiker\LaravelBootstrap\Abstracts\Traits\UploadableRelationship;

class Attribute extends EloquentBaseModel
{

    use TaggableRelationship; // Enable The Tags Relationships
    use UploadableRelationship; // Enable The Uploads Relationships

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'attributes';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('entity_id', 'type', 'name', 'order_number');
    protected $visible = array('entity_id', 'type', 'name', 'order_number');

    protected $validationRules = [
        'title'     => 'required',
        'slug'      => 'required',
        'content'   => 'required'
    ];

    public function entity()
    {
        return $this->belongsTo('\Atiker\LaravelBootstrap\Entity');
    }

    public function values()
    {
        return $this->hasMany('\Atiker\LaravelBootstrap\Value');
    }

}
