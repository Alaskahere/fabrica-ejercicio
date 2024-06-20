<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function platos(){
        return $this->belongsToMany(Plato::class);
    }

    public function mesa(){
        return $this->hasOne(Mesa::class);
    }
    public function estado(){
        return $this->belongsTo(Estado::class);
    }
}
