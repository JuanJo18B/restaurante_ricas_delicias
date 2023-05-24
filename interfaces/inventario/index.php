<?php require "../../BD/connectDB.php"; ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CURSO de PHP y MySQL</title>
    <link rel="stylesheet" href="./css/bulma.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    </head>
    <body>
        <?php
			session_start();
            error_reporting(E_ERROR | E_PARSE);
                include "./inc/navbar.php";
                include "./vistas/".$_GET['vista'].".php";
                include "./inc/script.php";
        ?>
        <div class="container pb-6 pt-6">
            <?php
                require_once "./php/main.php";

                # Eliminar producto #
                if(isset($_GET['product_id_del'])){
                    require_once "./php/producto_eliminar.php";
                }

                if(!isset($_GET['page'])){
                    $pagina=1;
                }else{
                    $pagina=(int) $_GET['page'];
                    if($pagina<=1){
                        $pagina=1;
                    }
                }

                $categoria_id = (isset($_GET['category_id'])) ? $_GET['category_id'] : 0;

                $pagina=limpiar_cadena($pagina);
                $url="index.php?vista=product_list&page="; /* <== */
                $registros=15;
                $busqueda="";

                # Paginador producto #
                require_once "./php/producto_lista.php";
            ?>
        </div>
    </body>
</html>