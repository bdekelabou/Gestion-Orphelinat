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
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bilansMedicaux()
    {
        return $this->hasMany(Medical::class);
    }

    public function bilansScolaires()
    {
        return $this->hasMany(Scolaire::class);
    }
}