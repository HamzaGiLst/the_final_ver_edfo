<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable=[
        'entreprise',
        'local','email',
        'secteur_activity',
        'type_contrat','salaire',
        'describe_entreprise',
        'describe_poste',
        'profil_recherche'];
}
