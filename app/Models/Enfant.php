<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'date_naissance',
        'situationMedicale',
        'situationScolaire',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
