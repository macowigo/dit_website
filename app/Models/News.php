<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dit_site_news';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'title',
                  'urllink',
                  'description',
                  'attachment',
                  'image',
                  'is_public'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];



}
