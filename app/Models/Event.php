<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dit_site_events';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = true;
    protected $dates = [
        'starttime','endtime',
    ];


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'title',
                  'venue',
                  'description',
                  'description2',
                  'description3',
                  'description4',
                  'urllink',
                  'attachment',
                  'image',
                  'image2',
                  'image3',
                  'image4',
                  'starttime',
                  'endtime',
                  'is_public'
              ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];


}
