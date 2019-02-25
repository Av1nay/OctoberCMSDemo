<?php namespace Abhinay\ArticleList\Models;

use Model;

/**
 * article Model
 */
class Article extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'abhinay_articlelist_articles';

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
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];

    /**
     * Realation to the the database
     */
    public $attachOne = [
        'featured_image' => ['System\Models\File']
    ];
    public $attachMany = [];
}
