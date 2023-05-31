<?php
    $Chost = 'localhost';
    $Cnombre = 'root';
    $Ccontraseña = '';
    $Cdb = 'inventario';
    $pdo = new mysqli($Chost,$Cnombre,$Ccontraseña,$Cdb);

    $pan = $_POST['pan'];
    $lechuga = $_POST['lechuga'];
    $mayonesa = $_POST['mayonesa'];
    $tomate = $_POST['tomate'];
    $carne = $_POST['carne'];
    $cebolla = $_POST['cebolla'];


    $sql_pan = "SELECT * FROM producto WHERE producto_nombre = '$pan'";
    
    $sql_lechuga = "SELECT * FROM producto WHERE producto_nombre = '$lechuga'";
    
    $sql_mayonesa = "SELECT * FROM producto WHERE producto_nombre = '$mayonesa'";
    
    $sql_tomate = "SELECT * FROM producto WHERE producto_nombre = '$tomate'";
    
    $sql_carne = "SELECT * FROM producto WHERE producto_nombre = '$carne'";
    
    $sql_cebolla = "SELECT * FROM producto WHERE producto_nombre = '$cebolla'";

    $consulta = mysqli_query($pdo,$sql_pan);
    $array_pan = mysqli_fetch_array($consulta); 
    $Np = $array_pan['producto_stock']-1;
    $sql = "UPDATE `producto` SET `producto_stock` = '$Np' WHERE `producto`.`producto_id` = 10";
    mysqli_query($pdo,$sql);
    header("location: ../interfaces/menu.html");
?>