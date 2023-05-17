<?php
    require '..//BD//connectDB.php';
    session_start();
    echo "estas dentro";
    // INICIO DE SESION GERENTE //
    if(isset($_POST['nombre_user']) && isset($_POST['contraseña']) && isset($_POST['codigo'])){
        echo "sigue funcionando";
        $usuario_ger = $_POST['nombre_user'];
        $contraseña  = $_POST['contraseña'];
        $codigo_ger  = $_POST['codigo'];
        $sql         = "SELECT COUNT(*) as contar FROM gerente WHERE codigo_ger = '$codigo_ger'";
        $sql1        = "SELECT * FROM gerente WHERE codigo_ger = '$codigo_ger'";
        $consulta    = mysqli_query($con,$sql);
        $consulta1    = mysqli_query($con,$sql1);
        $array       = mysqli_fetch_array($consulta);
        $array1       = mysqli_fetch_array($consulta1);
        if ($array['contar']>0){
            echo("fucniona");
            $_SESSION['username'] = $usuario_ger;
            $_SESSION['correo'] = $array1['correo'];
            $_SESSION['codigo'] = $codigo_ger;
            header("location: ../interfaces/gerente/perfil_gerente.php");
        }else{
            echo("no esta funcionando");
        }
    }
?>