<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use HasFactory;
    protected $fillable=[
        'antécédents_familiaux',
        'vaccinations',
        'maladies_antérieures',
        'examen_physique',
        'etat_mental',
        'autres_examens',
        'appareils_medicaux',
        'soins_speciaux',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
