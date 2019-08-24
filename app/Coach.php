<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    //
    protected $fillable=[
        'name',
        'email',
        'phone',
        'besoin'
    ];
}
