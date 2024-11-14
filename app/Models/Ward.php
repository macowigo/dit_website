<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ward extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'wards';

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
                  'district_id',
                  'name',
                  'code',
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
     * Get the District for this model.
     */
    public function District()
    {
        return $this->belongsTo('App\Models\District','district_id','id');
    }

    /**
     * Get the deathIcr for this model.
     */
    public function deathIcr()
    {
        return $this->hasOne('App\Models\DeathIcr','informant_permanent_residence_ward_id','id');
    }

    /**
     * Get the villages for this model.
     */
    public function villages()
    {
        return $this->hasMany('App\Models\Village','ward_id','id');
    }


}
