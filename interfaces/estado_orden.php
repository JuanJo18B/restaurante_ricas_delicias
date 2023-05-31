<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style_reg.css">
	<link rel="stylesheet" href="../css/style_servicios.css"><link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Ricas Delicias - Estado_Orden</title>
</head>
<?php
	error_reporting(E_ERROR | E_PARSE);
	$mesa = $_POST['mesa'];
	$orden = $_POST['orden'];
?>
<body>
    <header>
		<div class="contenedor">
			<h2 class="logotipo">Ricas delicias</h2>
			<nav>
				<a href="./index.html">Inicio</a>
				<a href="./menu.html">Menú</a>
				<a href="./servicios.html">Servicios</a>
				<a href="./contacto.html">Contacto</a>
				<a href="./acerca_de.html">Acerca de</a>
				<a href="./iniciar_sesion.html">Iniciar sesión</a>
			</nav>
		</div>
	</header>
	<div class="card text-center">
		<div class="card-header">
			ESTADO DE LA ORDEN
		</div>
		<p>Mesa: <?php echo $mesa;?> </p>
		<p>Estado orden: <?php echo $orden;?> </p>
	</div>
		
		<div class="card-footer text-muted">
			PROGRESO
		</div>
	  </div>
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
			<p class="derechos">Torobajo | Calle18 - Carrera 50</p>
			<p class="derechos">© 2023 Ricas Delicias. Todos los derechos reservados.</p>
		</div>
		</div>
	</footer>
	<script src="https://kit.fontawesome.com/71b9e775fc.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>