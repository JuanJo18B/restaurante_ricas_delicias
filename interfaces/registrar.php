<?php
    include("..//BD//connectDB.php");
    if (isset ($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $celular = $_POST["celular"];
        $contraseña = md5($_POST["contraseña"]);
        
        $consulta = "INSERT INTO clientes
        (nombre,apellido,correo,celular,contraseña)
        VALUES ('$nombre','$apellido','$correo','$celular','$contraseña')";
        $resultado = mysqli_query ($con,$consulta);
        header("Location: ../interfaces/iniciar_sesion.html");
    }
    if (isset ($_POST["cod_cocinero"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $celular = $_POST["celular"];
        $contraseña = md5($_POST["contraseña"]);
        $codigo_coc = $_POST["cod_cocinero"];

        
    }
?>