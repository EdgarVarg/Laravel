<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

class Edgar extends Controller
{
  public function index()
  {
  	 return "Hola desde controller";


  }
  public function edad($edad){

        if ($edad == null ){
        	return "ingrese una edad";
        }
        else{
        return "Mi edad es: ".$edad;
      }
   }
    public function nombre($nombre){

        if ($nombre == null ){
        	return "ingrese una edad";
        }
        else{
        return "Mi nombre es: ".$nombre;
      }
   }

}
