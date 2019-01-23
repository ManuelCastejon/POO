<?php

class Oposicion 
{
 // propiedades
public $nombre;
public $fecha;
public $requisitos;
public $plazas;

 // métodos/functions
 // consultar el valor de la propiedad nombre   
public function getNombre(){
    echo $this->nombre;
}
// establecer el valor de la propiedad nombre
public function setNombre($nombre){
    $this->nombre = $nombre;
}

}
?>