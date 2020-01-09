<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    public function procesos(){
        return $this->hasMany(proceso::class, 'id_proceso');
    }


    public function tablas(){
        return $this->hasMany(tabla::class, 'id_tabla');
    }

    public function usuarios(){
        return $this->hasMany(usuario::class, 'id_usuario');
    }
}
