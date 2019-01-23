<?php

    require_once ('articulo.php');
    require_once ('usuario.php');
    require_once ('categoria.php');
    require_once ('paginas.php');
 

    //carga de datos de artículo
    
    $a1 = new Articulo("Tunel dificil", "El saliente, llamado técnicamente tetón, se ha localizado a 50 metros", "Manuel", "22/01/2019");
    $a2 = new Articulo("Los Taxistas", "Los taxistas de Madrid convocan otra marcha  lenta  por la M-40 y los de Barcelona votan la propuesta del Govern", "José", "12/11/2019");
    $a3 = new Articulo("PP y PSOE ", "PSOE y PP remontan su caída y VOX se estabiliza", "Fabián", "22/05/2019");
    $a4 = new Articulo("Reto de famosos", "Los famosos que se han unido al reto del TenYearsChallenge", "Alejandro", "13/01/2019");
    $a5 = new Articulo("Curiosidades de la vida", "Diez curiosidades que probablemente no sepas de la vida diaria", "Manuel", "02/03/2019");

    // carga del array con todos los datos de los artículos

    $articulosArray = array($a1,$a2,$a3,$a4,$a5);






    // SELECT * from Usuarios
    // carga de datos de Usuario
    $u1 = new Usuario("");
    $u2 = new Usuario("");
    $u3 = new Usuario("");
    $u4 = new Usuario("");
    $u5 = new Usuario("");

    $UsuariosArray = array($u1,$u2,$u3,$u4,$u5);

    // carga de datos de páginas

    // carga de datos de categorías


 
?>