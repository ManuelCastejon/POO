<?php
session_start();
// incluir las clases
include ('articulo.php');
include ('usuario.php');
include ('categoria.php');
include ('paginas.php');

// incluir de la plantilla
include ('plantilla/head.php');
include ('plantilla/menu.php');

?>  
<?php

// evaluamos el GET['seccion]
//  ejemplo .: index.php?seccion=articulo
if(isset($_GET['seccion']))
{
    $url = $_GET['seccion'];

    switch ($url) {
        case 'articulo':
            $mi_articulo = new Articulo("Titulo del artículo al alla l a", "Texto alal al al a", "Manuel", "22/01/2019");
            $mi_articulo->getTitulo();
            $_SESSION['titulo'] = "Artículos";
            break;
        case 'usuario':
            # code...
            $mi_usuario = new Usuario();
            $mi_usuario->setNombre("Pepe");
            $mi_usuario->getNombre();
            $_SESSION['titulo'] = "Usuarios";
            break;
        case 'categoria':
            # code...
            $mi_categoria = new Categoria();
            $mi_categoria->setNombre("Coches");
            $mi_categoria->getNombre();
            $_SESSION['titulo'] = "Categoría";
            break;
        case 'pagina':
            # code...
            $mi_pagina = new Pagina();
            $mi_pagina->setNombre("Contacto");
            $mi_pagina->getNombre();
            $_SESSION['titulo'] = "Páginas";

            break;   
        
        default:
            # code... del Index
            echo "Error!! Sección no encontrada";

            break;
    }
}
else
{
    echo "Página de Inicio";
}


include ('plantilla/footer.php');



?>
