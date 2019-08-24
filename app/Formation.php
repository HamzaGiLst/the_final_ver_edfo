<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    //
    protected $primaryKey = 'formationid';
    protected $fillable = [
        'entreprise',
        'email',
        'phone',
        'choix_formation',
        'besoinf',
        'sms'
    ];

}
