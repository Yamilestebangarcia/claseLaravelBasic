<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rutas extends Controller
{
    
    public function hola(){
        return "hola desde controller";
    }
  /*   public function holaNombre($nombre){
       return "hola: $nombre desde controller";
    } */
 /*    public function holaNombre($nombre){
        return view("holaNombre",["nombre"=>$nombre]);
       
    }  */
/*     public function holaNombre($nombre){
        return view("holaNombre",compact("nombre"));
       
    } */
 /*    public function holaNombre($nombre){
        return view("plantillas/holaNombre",compact("nombre"));
       
    } */
     /*    public function holaNombre($nombre="yamil"){
        return view("plantillas/holaNombre",compact("nombre"));
       
    } */
    public function holaNombre($nombre="yamil"){
        $nombre=array("juan", "manolo","ana","belen");

        return view("plantillas/holaNombre",compact("nombre"));
       
    }
   
}
