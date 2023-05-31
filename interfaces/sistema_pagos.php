<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style_servicios.css">
	<link rel="stylesheet" href="../css/sistema-pago.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Ricas Delicias - sistema_pagos</title>
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
		<div class="celular" >
			<img class="img" src="../images/celularparapag1.png" alt="">
			<div class="text"></div>
		</div>
	</header>
	
	<section class=" container nuestras-promociones">
		<h2 class="titulo-seccion"> Tu forma de pagar</h2>
	   <div class="nuestras-ofertas">
		   <div class="ofertas">
			   <div class="ofertas-imagenes">
				   <img src="../images/pago efectivo.jpg" alt="">
			   </div>
			   <div class="ofertas-precio">
				   
					<a href="#metodo-efectivo"  class="boton5">Efectivo</a> 
				   
			   </div>
		   </div>
		   <div class="ofertas">
			   <div class="ofertas-imagenes">
				   <img src="../images/pago tarjeta.png" alt="">
			   </div>
			   <div class="ofertas-precio">
				   
					<a href="#metodo-tarjeta"  class="boton5"> Tarjeta</a>
				   
			   </div>
		   </div>
		   <div class="ofertas">
			   <div class="ofertas-imagenes">
					<div class="celular" >
						<img class="img" src="../images/celularparapag1.png" alt="">
						<div class="text"></div>
					</div>
				   
			   </div>
			   
		   </div>
		   
	   </div>
	</section>


		<section class="contan">
			<div class="titulo1">
				<h2 id="metodo-tarjeta"> Pago con tarjeta</h2>
			</div>
			<div class="container1">
				
				
				<form action="../BD/edit_inv.php" method="post">
					<?php 
						error_reporting(E_ERROR | E_PARSE);
						$pedido = $_POST['pedido_hambur'];
						$pan = $_POST['Pan'];
						$lechuga = $_POST['Lechuga'];
						$mayonesa = $_POST['Mayonesa'];
						$tomate = $_POST['Tomate'];
						$carne = $_POST['Carne'];
						$cebolla = $_POST['Cebolla'];
					?>
					<?php 
						$numero = $_POST['num_item'];
						echo $numero;
					?>
					<input type="text" value="<?php echo $pedido;?>" style="display: none;" name="pedido">
					<input type="text" value="<?php echo $pan;?>" style="display: none;" name="pan">
					<input type="text" value="<?php echo $lechuga;?>" style="display: none;" name="lechuga">
					<input type="text" value="<?php echo $mayonesa;?>" style="display: none;" name="mayonesa">
					<input type="text" value="<?php echo $tomate;?>" style="display: none;" name="tomate">
					<input type="text" value="<?php echo $carne;?>" style="display: none;" name="carne">
					<input type="text" value="<?php echo $cebolla;?>" style="display: none;" name="cebolla">
					<div class="row">
			
						<div class="col">
			
							<h3 class="title">Direccion de envio</h3>
			
							<div class="inputBox">
								<span>Nombre Completo :</span>
								<input type="text" placeholder="john deo">
							</div>
							<div class="inputBox">
								<span>email :</span>
								<input type="email" placeholder="example@example.com">
							</div>
							<div class="inputBox">
								<span>Direccion :</span>
								<input type="text" placeholder="room - street - locality">
							</div>
							<div class="inputBox">
								<span>Ciudad :</span>
								<input type="text" placeholder="mumbai">
							</div>
			
							<div class="flex">
								<div class="inputBox">
									<span>Estado :</span>
									<input type="text" placeholder="india">
								</div>
								<div class="inputBox">
									<span>Codigo postal :</span>
									<input type="text" placeholder="123 456">
								</div>
							</div>
			
						</div>
			
						<div class="col">
			
							<h3 class="title">Pago</h3>
			
							<div class="inputBox">
								<span>Tarjetas aceptadas :</span>
								<img src="../images/card_img.png" alt="">
							</div>
							<div class="inputBox">
								<span>Nombre tarjeta :</span>
								<input type="text" placeholder="mr. john deo">
							</div>
							<div class="inputBox">
								<span>Numero de tarjeta :</span>
								<input type="number" placeholder="1111-2222-3333-4444">
							</div>
							<div class="inputBox">
								<span>Mes de exp :</span>
								<input type="text" placeholder="january">
							</div>
			
							<div class="flex">
								<div class="inputBox">
									<span>Año exp :</span>
									<input type="number" placeholder="2022">
								</div>
								<div class="inputBox">
									<span>CVV :</span>
									<input type="text" placeholder="1234">
								</div>
							</div>
			
						</div>
				
					</div>
			
					<input type="submit" value="Pasar por caja" class="submit-btn" onclick="alert('transaccion exitosa, revisa tu orden !Gracias¡');">
			
				</form>
			
			</div>    
		</section>



		<section class="icon">
			<div class="imagen">
				<img src="../images/hombre cajero.jpg" alt="">
				<h2 id="metodo-efectivo">Paga en efectivo</h2>
			</div>
			<section class="container2">
			
				<div class="efectivo">
					<div class="form-efectivo">
						<form action="">
				
							<div class="row">
					
								<div class="col">
									<div class="inputBox">
										<span>NUMERO DE LA MESA :</span>
										<input type="text" placeholder="mesa 1">
									</div>
								</div>
					
								<div class="col">
									
									<div class="inputBox">
										<span>NOMBRE PLATO :</span>
										<input type="text" placeholder="bandeja paisa">
									</div>
								</div>
						
							</div>
					
							<input type="submit" value="Pasar por caja" class="submit-btn1" onclick="alert('Revisa tu orden');">
					
						</form>
					</div>
				</div>
			</section>
		</section>

		<section class="pago-nequi">

		</section>
		
	

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
	<script src="../js/sistema_pagos.js"></script>
</body>
</html>