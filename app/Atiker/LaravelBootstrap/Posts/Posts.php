<?php namespace Atiker\LaravelBootstrap\Posts;
use Atiker\LaravelBootstrap\Core\EloquentBaseModel;
use Atiker\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;
use Atiker\LaravelBootstrap\Abstracts\Traits\UploadableRelationship;
use Str, Input;

class Posts extends EloquentBaseModel
{

    use TaggableRelationship; // Enable The Tags Relationships
    use UploadableRelationship; // Enable The Uploads Relationships

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'posts';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('title', 'slug','lead', 'content');

    protected $validationRules = [
        'title'     => 'required',
        'slug'      => 'required|unique:posts,id,<id>',
        'lead'      => 'required',
        'content'   => 'required'
    ];

    /**
     * Fill the model up like we usually do but also allow us to fill some custom stuff
     * @param  array $array The array of data, this is usually Input::all();
     * @return void
     */
    public function fill( array $attributes )
    {
        parent::fill( $attributes );
        $this->slug = Str::slug( $this->title , '-' );
    }

}