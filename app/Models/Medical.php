<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use HasFactory;

    protected $fillable = [
        'enfant_id', 
        'antecedent_medicaux', 
        'vaccin', 
        'appareil_medicaux', 
        'soin_speciaux', 
        'groupe_sanguin', 
        'poids', 
        'taille'
    ];

    protected $casts = [
        'antecedent_medicaux' => 'array',
        'vaccin' => 'array',
        'appareil_medicaux' => 'array',
        'soin_speciaux' => 'array',
    ];
    
    public function enfant()
    {
        return $this->belongsTo(Enfant::class, 'enfant_id');
    }

     // Mutateur pour encoder en JSON avant de sauvegarder dans la BD
     public function setAntecedentMedicauxAttribute($value)
     {
         $this->attributes['antecedent_medicaux'] = json_encode($value);
     }
 
     public function setVaccinAttribute($value)
     {
         $this->attributes['vaccin'] = json_encode($value);
     }
 
     public function setAppareilMedicauxAttribute($value)
     {
         $this->attributes['appareil_medicaux'] = json_encode($value);
     }
 
     public function setSoinSpeciauxAttribute($value)
     {
         $this->attributes['soin_speciaux'] = json_encode($value);
     }
 
     // Accesseur pour décoder le JSON lors de la récupération depuis la BD
     public function getAntecedentMedicauxAttribute($value)
     {
         return json_decode($value, true);
     }
 
     public function getVaccinAttribute($value)
     {
         return json_decode($value, true);
     }
 
     public function getAppareilMedicauxAttribute($value)
     {
         return json_decode($value, true);
     }
 
     public function getSoinSpeciauxAttribute($value)
     {
         return json_decode($value, true);
     }
}
