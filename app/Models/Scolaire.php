<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scolaire extends Model
{
    use HasFactory;

    protected $fillable =[
        'enfant_id',
        'niveau',
        'etablissement',
        'classe_arrivee',
        'classe_actuelle',
        'redoublement',
    ];

    public function enfant()
    {
        return $this->belongsTo(Enfant::class,'enfant_id');
    }
}