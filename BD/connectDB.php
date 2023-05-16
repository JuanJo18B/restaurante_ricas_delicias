<?php
    $Chost = 'localhost';
    $Cnombre = 'root';
    $Ccontraseña = '';
    $Cdb = 'restaurante';

    $con = new mysqli($Chost,$Cnombre,$Ccontraseña,$Cdb);

    if ($con->connect_errno){
        die("Ha ocurrido un error");
    }
?>
