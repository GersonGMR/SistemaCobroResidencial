<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proceso extends Model
{
    public function bitacoras(){
        return $this->hasMany(bitacora::class , 'id_proceso');
    }
}
