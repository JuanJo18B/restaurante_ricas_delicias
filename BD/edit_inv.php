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
    $consulta = mysqli_query($pdo,$sql_pan);
    $array_pan = mysqli_fetch_array($consulta); 
    $Np = $array_pan['producto_stock']-1;
    $sql = "UPDATE producto SET producto_stock = '$Np' WHERE producto_nombre = '$pan'";
    mysqli_query($pdo,$sql);
    
    $sql_lechuga = "SELECT * FROM producto WHERE producto_nombre = '$lechuga'";
    $consulta1 = mysqli_query($pdo,$sql_lechuga);
    $array_lechuga = mysqli_fetch_array($consulta1); 
    $Np1 = $array_lechuga['producto_stock']-1;
    $sql1 = "UPDATE producto SET producto_stock = '$Np' WHERE producto_nombre = '$lechuga'";
    mysqli_query($pdo,$sql1);
    
    $sql_mayonesa = "SELECT * FROM producto WHERE producto_nombre = '$mayonesa'";
    $consulta2 = mysqli_query($pdo,$sql_mayonesa);
    $array_mayonesa = mysqli_fetch_array($consulta2); 
    $Np2 = $array_mayonesa['producto_stock']-1;
    $sql2 = "UPDATE producto SET producto_stock = '$Np2' WHERE producto_nombre = '$mayonesa'";
    mysqli_query($pdo,$sql2);
    
    $sql_tomate = "SELECT * FROM producto WHERE producto_nombre = '$tomate'";
    $consulta3 = mysqli_query($pdo,$sql_tomate);
    $array_tomate = mysqli_fetch_array($consulta3); 
    $Np3 = $array_tomate['producto_stock']-1;
    $sql3 = "UPDATE producto SET producto_stock = '$Np3' WHERE producto_nombre = '$tomate'";
    mysqli_query($pdo,$sql3);
    
    $sql_carne = "SELECT * FROM producto WHERE producto_nombre = '$carne'";
    $consulta4 = mysqli_query($pdo,$sql_carne);
    $array_carne = mysqli_fetch_array($consulta4); 
    $Np4 = $array_carne['producto_stock']-1;
    $sql4 = "UPDATE producto SET producto_stock = '$Np4' WHERE producto_nombre = '$carne'";
    mysqli_query($pdo,$sql4);
    
    $sql_cebolla = "SELECT * FROM producto WHERE producto_nombre = '$cebolla'";
    $consulta5 = mysqli_query($pdo,$sql_cebolla);
    $array_cebolla = mysqli_fetch_array($consulta5); 
    $Np5 = $array_cebolla['producto_stock']-1;
    $sql5 = "UPDATE producto SET producto_stock = '$Np5' WHERE producto_nombre = '$cebolla'";
    mysqli_query($pdo,$sql5);

    
    header("location: ../interfaces/menu.html");
?>