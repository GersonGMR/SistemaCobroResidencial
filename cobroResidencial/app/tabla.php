<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tabla extends Model
{
    protected $table = 'tablas';

    public function bitacoras(){
        return $this->hasMany(bitacora::class, 'id_tabla');
    }
}
