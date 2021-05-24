<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    use HasFactory;

    public function clicks(){
        return $this->hasMany(Click::class);
    }

    public function visitante(){
        return $this->belongsTo(Visitante::class);
    }
}
