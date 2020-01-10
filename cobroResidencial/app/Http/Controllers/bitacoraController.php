<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bitacora;
class bitacoraController extends Controller
{
    public function create(Request $request){
        $bitacora = new bitacora();

        $bitacora-> fecha = $request -> fecha;


    //Terminar luego, cuendo esten las vistas. 
    
    }
}
