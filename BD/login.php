<?php
    require '..//BD//connectDB.php';
    session_start();
    // INICIO DE SESION GERENTE //
    if(isset($_POST['nombre_user']) && isset($_POST['contraseña']) && isset($_POST['codigo']) && isset($_POST['ck_gerente'])){
    
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
            $_SESSION['username'] = $usuario_ger;
            $_SESSION['correo'] = $array1['correo'];
            $_SESSION['codigo'] = $codigo_ger;
            header("location: ../interfaces/gerente/perfil_gerente.php");
        }
    
    }
    // INICIO SESION CLIENTE //
    if (isset ($_POST["nombre_user"]) && isset($_POST['contraseña']) && isset($_POST['ch_empleado']) == false){
        $usuario_cli = $_POST['nombre_user'];
        $contraseña  = $_POST['contraseña'];
        $sql         = "SELECT COUNT(*) as contar FROM clientes WHERE nombre = '$usuario_cli'";
        $sql1        = "SELECT * FROM clientes WHERE nombre = '$usuario_cli'";
        $consulta    = mysqli_query($con,$sql);
        $consulta1    = mysqli_query($con,$sql1);
        $array       = mysqli_fetch_array($consulta);
        $array1       = mysqli_fetch_array($consulta1);
        if ($array['contar']>0){
            $_SESSION['username'] = $usuario_cli;
            $_SESSION['apellido'] = $array1['apellido'];
            $_SESSION['correo'] = $array1['correo'];
            header("location: ../interfaces/cliente/perfil_cliente.php");
        }
    }

    // INICIO SESION COCINERO //
    if (isset($_POST['nombre_user']) && isset($_POST['contraseña']) && isset($_POST['codigo']) && isset($_POST['ck_cocinero'])){
        $usuario_coci = $_POST['nombre_user'];
        $contraseña  = $_POST['contraseña'];
        $cod_coci  = $_POST['codigo'];
        $sql         = "SELECT COUNT(*) as contar FROM cocineros WHERE cod_coci = '$cod_coci'";
        $sql1        = "SELECT * FROM cocineros WHERE cod_coci = '$cod_coci'";
        $consulta    = mysqli_query($con,$sql);
        $consulta1    = mysqli_query($con,$sql1);
        $array       = mysqli_fetch_array($consulta);
        $array1       = mysqli_fetch_array($consulta1);
        if ($array['contar']>0){
            $_SESSION['username'] = $usuario_coci;
            $_SESSION['correo'] = $array1['correo'];
            $_SESSION['codigo'] = $cod_coci;
            header("location: ../interfaces/cocinero/perfil_cocinero.php");
        }
    }
    // INICIO SESION MESERO //
    if (isset($_POST['nombre_user']) && isset($_POST['contraseña']) && isset($_POST['codigo']) && isset($_POST['ck_mesero'])){
        $usuario_mes = $_POST['nombre_user'];
        $contraseña  = $_POST['contraseña'];
        $cod_mes  = $_POST['codigo'];
        $sql         = "SELECT COUNT(*) as contar FROM meseros WHERE cod_mes = '$cod_mes'";
        $sql1        = "SELECT * FROM meseros WHERE cod_mes = '$cod_mes'";
        $consulta    = mysqli_query($con,$sql);
        $consulta1    = mysqli_query($con,$sql1);
        $array       = mysqli_fetch_array($consulta);
        $array1       = mysqli_fetch_array($consulta1);
        if ($array['contar']>0){
            $_SESSION['username'] = $usuario_mes;
            $_SESSION['correo'] = $array1['correo'];
            $_SESSION['codigo'] = $cod_mes;
            header("location: ../interfaces/mesero/perfil_mesero.php");
        }
    }
?>