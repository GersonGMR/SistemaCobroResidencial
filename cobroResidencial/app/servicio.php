<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    protected $table = 'servicios';
    
    public function cuentas(){
        return $this->hasMany(cuenta::class, 'id_servicio');
    }
}
