<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function orden(){
        return $this->hasOne(Orden::class);
    }
}
