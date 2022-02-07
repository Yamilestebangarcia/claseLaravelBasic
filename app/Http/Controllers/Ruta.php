<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ruta extends Controller
{
    //si solo tinen una 
  
  /*   public function __invoke(){
        return "bienvenido desde controller";
    }  */
 /*    public function __invoke(){
        return view("bienvenido");
    } 
 */
public function __invoke(){
    return view("plantillas/bienvenido");
} 

}
