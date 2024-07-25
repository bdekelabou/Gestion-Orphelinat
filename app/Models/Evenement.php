<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'date', 'image', 'status_id'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}

