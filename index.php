<?php
session_start();
// incluir datos ( simulamos una conexión a SQL)
include ('datos.php');
 
// incluir las clases
require_once ('articulo.php');
require_once ('usuario.php');
require_once ('categoria.php');
require_once ('paginas.php');

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
        //  ejemplo .: index.php?seccion=articulo&id=33
            if (isset($_GET['id'])) {
                // Consigo los datos del objeto con ID
                $articulo = $articulosArray[$_GET['id']];
                // muestro los datos del artículo ID
                $articulo->getNombre();
                $articulo->getTexto();
                $articulo->getAutor();
                $articulo->getFecha();

            } else {
                # muestro el listado de todos los artículos
                    echo "Listado de todos los artículos";
            }
            

            $_SESSION['titulo'] = "Articulo";

            break;
        case 'usuario':
            # code...
            
            $_SESSION['titulo'] = "Usuarios";
            break;
        case 'categoria':
            # code...
             
            $_SESSION['titulo'] = "Categoría";
            break;
        case 'pagina':
            # code...
            
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
