<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $table = 'facturas';
    
    public function cuenta(){
        return $this->belongsTo(cuenta::class, 'id_cuenta');
    }
}
