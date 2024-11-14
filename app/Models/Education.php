<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dit_site_education';

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
                  'staff_id',
                  'level',
                  'description'
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

    /**
     * Get the Staff for this model.
     */
    public function staff()
    {
        return $this->belongsTo('App\Models\Staff','staff_id','id');
    }



}
