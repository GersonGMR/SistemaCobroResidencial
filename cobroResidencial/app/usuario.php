<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public function cargo(){
        return $this->belongsTo(cargo::class, 'id cargo');
    }

    public function bitacoras(){
        return $this->hasMany(bitacora::class , 'id_usuario');
    }

    public function cuenta(){
        return $this->belongsTo(cuenta::class, 'id_cuenta');
    }
}
