<?php
// defino una clase Articulo

class Articulo
{
    // propiedades
    public $titulo;
    public $texto;
    public $autor;
    public $fecha;
    
    // constructores
    // $mi_articulo = new Articulo("Hola Mundo", "Texto alal al al a", "Manuel", "22/01/2019");
    function __construct($titulo, $texto, $autor, $fecha) 
    {
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->autor = $autor;
        $this->fecha = $fecha;
    }  


    // métodos - funciones
    public function getTitulo(){
        echo $this->titulo;
    }

    // métodos - funciones
    public function setTitulo($nom){
        $this->titulo = $nom;
    }

    
}


?>