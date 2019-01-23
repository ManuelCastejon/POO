<?php
// defino la clase Moto
class Moto 
{
    // propiedades
    public $nombre;
    public $marca;
    public $cv;
    public $color;


    // consigo el nombre  
    public function getNombre(){
        echo $this->nombre;
    }
    // establecer el nombre
    public function setNombre($nom){
        $this->nombre = $nom;
    }



    // consigo el Marca  
    public function getMarca(){
        echo $this->marca;
    }
    // establecer el Marca
    public function setMarca($marc){
        $this->marca = $marc;
    }
    
    
}


?>