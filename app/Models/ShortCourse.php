<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortCourse extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dit_site_short_courses';

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
                  'code',
                  'name',
                  'department_id'
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
     * Get the DitSiteDepartment for this model.
     */
    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id','id');
    }




}
