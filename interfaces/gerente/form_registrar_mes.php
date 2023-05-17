<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/style_reg.css" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Registrarse</title>
</head>
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
	<main>
		<div class="container mx-auto text-center center card ">
			<div class="card-body">
				<form class="row g-3" method="POST" action="./registrar2.php">
					<div class="col-md-4">
						<label for="nombre" class="form-label">Nombre<small class="text-danger">*</small></label>
						<input type="text" class="form-control" id="nombre" name= "nombre" placeholder="nombre" required >
					</div>
					<div class="col-md-4">
						<label for="apellido" class="form-label">Apellido<small class="text-danger">*</small></label>
						<input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido" required>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="correo" class="form-label">Correo electrónico<small class="text-danger">*</small></label>
							<input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo electrónico" required>
						</div>
					</div>
					<div class="col-md-4">
						<label for="celular" class="form-label">Celular<small class="text-danger">*</small></label>
						<input type="text" class="form-control" id="celular" name= "celular" placeholder="número" required >
					</div>
					<div class="col-md-4">
						<label for="cod_mesero" class="form-label">Código mesero<small class="text-danger">*</small></label>
						<input type="text" class="form-control" id="cod_mesero" name= "cod_mesero" placeholder="código" require>
					</div>

					<div class="col-md-10 mx-auto">
                        <label class="form-label" for="contraseña">
                            Contraseña<small class="text-danger">*</small>
                        </label>
                        <input class="form-control"  type="password" value="" id="contraseña" name="contraseña" required>
                        <div class="card-footer" >
                            <small id="min_max_contraseña" class="text">
                                Debe tener al menos 8 caracteres.<small class="text-danger">*</small>
                            </small><br>
                            <small id="num_contraseña" class="text">
                                Debe tener al menos un numero.<small class="text-danger">*</small>
                            </small><br>
                            <small id="mayus_contraseña" class="text">
                                Debe tener al menos una mayuscula.<small class="text-danger">*</small>
                            </small>
                        </div>
                    </div>
                    <div class="col-md-10 mx-auto">
                        <label class="form-label" for="validacion_contraseña">
                            Confirme su contraseña<small class="text-danger">*</small>
                        </label>
                        <input class="form-control"  type="password" value="" id="validacion_contraseña" required>
                    </div>
                    <div id="error_contraseña" class="text-danger"></div>
					<div class="col-12">
						<button class="btn btn-primary" type="submit">Registrarse</button>
					</div>
				</form>
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
	<script src="../../js/validar_contra.js"></script>
	<script src="https://kit.fontawesome.com/71b9e775fc.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>