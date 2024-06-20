<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function ordens(){
        return $this->belongsToMany(Orden::class);
    }
}
