<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuickLink extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dit_site_quick_links';

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
                  'added_by',
                  'verified_by',
                  'title',
                  'urllink',
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

    /**
     * Get the addedBy for this model.
     */
    public function addedBy()
    {
        return $this->belongsTo('App\Models\User','added_by');
    }

    /**
     * Get the verifiedBy for this model.
     */
    public function verifiedBy()
    {
        return $this->belongsTo('App\Models\User','verified_by');
    }




}
