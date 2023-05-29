<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/style_login.css">
	<link rel="stylesheet" href="../../css/style_gerente.css">
    <link rel="stylesheet" href="../../css/style_notificacion.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
    <?php
        include('../../BD/connectDB.php');
		session_start();
	?>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">Ricas delicias</h2>
			<nav>
				<a href="../menu.html">Menú</a>
				<a href="../servicios.html">Servicios</a>
				<a href="../contacto.html">Contacto</a>
				<a href="../acerca_de.html">Salir</a>
			</nav>
		</div>
	</header>
    <main>
		<div>
			<div class="div_info_perfil">
				<div >
					<img src="../../images/cocinero.png" alt="">
				</div>
				<div class="div_php_info" >
					<?php
						$usuario = $_SESSION['username'];
						$correo = $_SESSION['correo'];
						$codigo = $_SESSION['codigo'];
						echo "<h2>Mi perfil</h2>";
						echo "<label> Bienvenido $usuario</label><br>";
						echo "<label> código: $codigo</label><br>";
						echo "<label> correo: $correo</label><br>";
					?>
				</div>
				<div class="container" id="div_enviar_noti">
                    <div class="starter-template">
                        <h1>Notificar </h1>
                        <p class="lead">
                            <form name="frmNotification" id="frmNotification" action="../../BD/agregarnotificacion.php" method="post" >
                                <div class="form-group">
                                <label for="autor">Autor:</label>
                                <input type="text" class="form-control" name="autor" id="autor" value = <?php echo $usuario ?> disabled>  
                                </div>
                                <div class="form-group">
                                <label for="mensaje">Mensaje </label>
                                <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Mensaje" required></textarea>
                                </div>
                                <div class="form-group">
                                <input type="submit" name="add" id="btn-send" value="Enviar">
                                </div>
                            </form>            
                        </p>
                    </div>
                </div>
			</div>
		</div>
	</main>
</body>
</html>