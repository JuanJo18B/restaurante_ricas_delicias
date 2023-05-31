<div class="container is-fluid mb-6">
    <h1 class="title">Recetas</h1>
    <h2 class="subtitle">Lista de recetas</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        if(!isset($_GET['page'])){
            $pagina=1;
        }else{
            $pagina=(int) $_GET['page'];
            if($pagina<=1){
                $pagina=1;
            }
        }

        $pagina=limpiar_cadena($pagina);
        $url="index.php?vista=product_recetas&page="; /* <== */
        $registros=15;
        $busqueda="";
        require "./php/recetas_lista.php";
    ?>

</div>