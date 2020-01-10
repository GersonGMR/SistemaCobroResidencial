<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuenta extends Model
{
    protected $table = 'cuentas';
    
    public function usuarios(){
        return $this->hasMany(usuario::class, 'id_usuario');
    }

    public function facturas(){
        return $this->hasMany(factura::class, 'id_cuenta');
    }

    public function servicios(){
        return $this->hasMany(servicio::class, 'id_servicio');
    }

    public function mess(){
        return $this->hasMany(mes::class , 'id_mes');
    } 

    public function estado(){
        return $this->belongsTo(estado::class, 'id_estado');
    }
}
