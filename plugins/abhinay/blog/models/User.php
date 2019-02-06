<?php namespace Abhinay\Blog\Models;

use Model;

/**
 * User Model
 */
class User extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'abhinay_blog_users';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'posts' => [Post::class, 'table' => 'blog_posts']
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
