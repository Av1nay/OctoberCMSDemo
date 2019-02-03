<?php namespace Abhinay\Posts\Models;

use Model;

/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'abhinay_posts_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
