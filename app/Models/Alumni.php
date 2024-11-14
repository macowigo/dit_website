<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{


        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'dit_site_alumni';

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
                      'first_name',
                      'second_name',
                      'last_name',
                      'email_address',
                      'current_location',
                      'organization',
                      'short_bio',
                      'registration_no',
                      'image_path',
                      'education',
                      'employer'
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


}
