<?php
// defino una clase Articulo

class Pagina
{
    // propiedades
    public $nombre;
    public $texto;
    public $autor;
    public $fecha;
     

    // métodos - funciones
    public function getNombre(){
        echo $this->nombre;
    }

    // métodos - funciones
    public function setNombre($nom){
        $this->nombre = $nom;
    }

    
}


?>