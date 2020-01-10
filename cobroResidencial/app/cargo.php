<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    protected $table = 'cargos';
    
    public function usuarios(){
        return $this->hasMany(usuario::class , 'id_cargo');
    }
}
