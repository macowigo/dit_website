<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{


      /**
       * The database table used by the model.
       *
       * @var string
       */
      protected $table = 'dit_site_campus';

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
                    'director_name',
                    'director_imgulr',
                    'director_edu',
                    'director_email',
                    'director_phone',
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
      public function Campusprogramme()
      {
          return $this->hasMany('App\Models\Campusprogramme','campus_id','id');
      }

      /**
       * Get the ShortCourse for this model.
       */
        /**public function ShortCourse()
      {
          return $this->hasMany('App\Models\ShortCourse','campus_id','id');
      }

      /**
       * Get the Staff for this model.
       */
        /**public function Staff()
      {
          return $this->hasMany('App\Models\Staff','campus_id','id');
      }*/


}
