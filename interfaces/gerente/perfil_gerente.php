<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="../../css/style_gerente.css">
	<link rel="stylesheet" href="../../css/style.css">
	<title>Mi perfil</title>
</head>
<body>
	<header>
		<?php
			include('../../BD/connectDB.php');
			session_start();
		?>
		<div class="contenedor">
			<h2 class="logotipo">Ricas delicias</h2>
			<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
					<div class="demo-content">
						<div id="notification-header" class="notification-header">
							<div style="position:relative">
								<button id="notification-icon" name="button" onclick="myFunction()" class="notification-icon"><span id="notification-count" class="notification-count"><?php if($count>0) { echo $count; } ?></span><img class="imagen_ico_noti" src="../../images/logo_notificacion.png" /></button>
								<div id="notification-latest" class="notification-latest"></div>
							</div>          
						</div>
					</div>
				</nav>
			<nav>
				<a href="../menu.html">Menú</a>
				<a href="../servicios.html">Servicios</a>
				<a href="../contacto.html">Contacto</a>
				<a href="../iniciar_sesion.html">Salir</a>
			</nav>
		</div>
</header>
	<main>
		<div>
			<div class="div_info_perfil">
				<div >
					<img src="../../images/logo_gerente.png" alt="">
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
				<div class="div_menu_ge">
					<button class="img_inv"><a href="#">Inventario</a> </button>
					<button class="img_regi"><a href="./menu_registrar.php">Registrar</a></button>
				</div>
			</div>
		</div>
		
	</main>
	<footer style="background-color: #1b1b1b; padding: 20px;">
		<div class="footer-container">
		<div class="footer-section">
			<br>
			<ul class="social-icons">
			<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
			<br>
			<ul class="social-foo">
				<a> Quienes somos</a>
				<a> Preguntas frecuentes</a>
				<a> Contacto</a>
			</ul>
			<br>
			<p class="derechos">© 2023 Ricas Delicias. Todos los derechos reservados.</p>
		</div>
		</div>
	</footer>
	<script src="https://kit.fontawesome.com/71b9e775fc.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../js/jquery.min.js"><\/script>')</script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>

	<script type="text/javascript">
		function myFunction() {
		$.ajax({
			url: "../../BD/notificaciones.php",
			type: "POST",
			processData:false,
			success: function(data){
			$("#notification-count").remove();                  
			$("#notification-latest").show();$("#notification-latest").html(data);
			},
			error: function(){}           
		});
		}                       
		$(document).ready(function() {
		$('body').click(function(e){
			if ( e.target.id != 'notification-icon'){
			$("#notification-latest").hide();
			}
		});
		});                                     
    </script>
</body>
</html>

