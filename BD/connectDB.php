<?php
    $Chost = 'localhost';
    $Cnombre = 'root';
    $Ccontraseña = '';
    $Cdb = 'restaurante';
    $con = new mysqli($Chost,$Cnombre,$Ccontraseña,$Cdb);
    
    $count = 0;
    $sql2 = "SELECT * FROM datos WHERE estado = 0";
    $result = mysqli_query($con, $sql2);
    $count = mysqli_num_rows($result);

    if ($con->connect_errno){
        die("Ha ocurrido un error");
    }
?>
