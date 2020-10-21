<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function inicio(){
        return view('welcome');
    }
    public function fotos(){
         return view('fotos');
    }
    public function blog(){
        return view('blog');
    }
    public function nosotros($nombre = null){
        $equipo = ['Ignacio', 'Juanito', 'Pedrito'];

        // return view('nosotros', ['equipo'=>$equipo, 'nombre'=>$nombre]);
        return view ('nosotros', compact('equipo','nombre')); 
    }   
        
}
