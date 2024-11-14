<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dit_site_department';

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
                  'caption1',
                  'caption2',
                  'hod_name',
                  'hod_imgulr',
                  'hod_academy',
                  'hod_email',
                  'hod_phone',
                  'category'
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
     * Get the Programme for this model.
     */
    public function Programme()
    {
        return $this->hasMany('App\Models\Programme','department_id','id');
    }

    /**
     * Get the ShortCourse for this model.
     */
    public function ShortCourse()
    {
        return $this->hasMany('App\Models\ShortCourse','department_id','id');
    }

    /**
     * Get the Staff for this model.
     */
    public function Staff()
    {
        return $this->hasMany('App\Models\Staff','department_id','id');
    }



}
