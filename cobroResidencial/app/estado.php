<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    public function cuentas(){
        return $this->hasMany(cuenta::class, 'id_estado');
    }
}
