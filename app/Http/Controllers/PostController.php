<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

public function principal(){
    return view('principal');
}

    public function Mensaje(){
        return "Hola desde el controlador de PostController";
}

public function About($param=null, $nombre=null){
    $datos=['parametro'=>$param, 'nombre'=>$nombre];
    return view('about', $datos); //esto da la 2 cosas, una vista y el arreglo de datos 
    //return viwe ('about', compact('param', 'nombre'));
}

public function Contacto(){
    return view ('contacto', ['mensaje'=>"Esto es un mensaje"]);
}

public function llamado_componente(){
    return view('llamadocomponente');
}


}
