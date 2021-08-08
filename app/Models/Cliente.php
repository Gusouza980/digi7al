<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function elementos(){
        return $this->hasMany(Elementos::class);
    }

    public function leads(){
        return $this->hasMany(Lead::class);
    }
}
