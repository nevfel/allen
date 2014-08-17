<?php namespace Atiker\LaravelBootstrap\Value;
use Atiker\LaravelBootstrap\Core\EloquentBaseModel;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;
use Atiker\LaravelBootstrap\Abstracts\Traits\UploadableRelationship;

class Value extends EloquentBaseModel
{

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'values';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('product_id', 'attribute_id', 'stack_id', 'value', 'unit_id', 'order_number');
    protected $visible = array('product_id', 'attribute_id', 'stack_id', 'value', 'unit_id', 'order_number');

    public function attribute()
    {
        return $this->belongsTo('\Atiker\LaravelBootstrap\Attribute');
    }

    public function stack()
    {
        return $this->belongsTo('\Atiker\LaravelBootstrap\Stack');
    }

    public function unit()
    {
        return $this->belongsTo('\Atiker\LaravelBootstrap\Unit');
    }

    
}
