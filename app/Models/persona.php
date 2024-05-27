<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    public function vehiculos()
    {
        return $this->belongsToMany(vehiculo::class);
    }

    public function accidentes()
    {
        return $this->hasMany(accidente::class);
    }
}
