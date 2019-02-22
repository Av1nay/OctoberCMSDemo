<?php namespace Abhinay\Form\Models;

use Model;

/**
 * Form Model
 */
class Form extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'abhinay_form_forms';

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
    public $attachOne = [];
    public $attachMany = [];
}
