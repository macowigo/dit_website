<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'dit_site_visitor';
    protected $fillable = [
        'ip_address',
        'country',
        'city',
        'region',
        'url',
        'user_agent',
    ];
}
