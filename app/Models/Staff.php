<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dit_site_staff';

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
                  'prefix',
                  'fname',
                  'mname',
                  'lname',
                  'imgurl',
                  'email',
                  'phone',
                  'designation',
                  'title',
                  'bio_paragraph1',
                  'bio_paragraph2',
                  'bio_paragraph3',
                  'staff_type',
                  'status',
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
     * Get the Department for this model.
     */
    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id','id');
    }

    /**
     * Get the StaffEducation for this model.
     */
    public function staffEducation()
    {
        return $this->hasMany('App\Models\StaffEducation','staff_id','id');
    }

    /**
     * Get the StaffExperience for this model.
     */
    public function staffExperience()
    {
        return $this->hasMany('App\Models\StaffExperience','staff_id','id');
    }

    /**
     * Get the StaffSkill for this model.
     */
    public function staffSkill()
    {
        return $this->hasMany('App\Models\StaffSkill');
    }


}
