<?php
    include("../../BD/connectDB.php");
    if (isset ($_POST["nombre"]) && isset($_POST['cod_cocinero']) == false && isset($_POST['cod_mesero']) == false ){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $celular = $_POST["celular"];
        $contraseña = md5($_POST["contraseña"]);
        
        $consulta = "INSERT INTO clientes
        (nombre,apellido,correo,celular,contraseña)
        VALUES ('$nombre','$apellido','$correo','$celular','$contraseña')";
        $resultado = mysqli_query ($con,$consulta);
        header("Location: ./perfil_gerente.php");
    }
    if (isset ($_POST["cod_cocinero"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $celular = $_POST["celular"];
        $contraseña = md5($_POST["contraseña"]);
        $codigo_coc = $_POST["cod_cocinero"];

        $consulta = "INSERT INTO cocineros
        (cod_coci,nombre,apellido,correo,celular,clave)
        VALUES ('$codigo_coc','$nombre','$apellido','$correo','$celular','$contraseña')";
        $resultado = mysqli_query ($con,$consulta);
        header("Location: ./perfil_gerente.php");
    }

    if (isset ($_POST["cod_mesero"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $celular = $_POST["celular"];
        $contraseña = md5($_POST["contraseña"]);
        $codigo_mes = $_POST["cod_mesero"];

        $consulta = "INSERT INTO meseros
        (cod_mes,nombre,apellido,correo,celular,clave)
        VALUES ('$codigo_mes','$nombre','$apellido','$correo','$celular','$contraseña')";
        $resultado = mysqli_query ($con,$consulta);
        header("Location: ./perfil_gerente.php");
    }
?>