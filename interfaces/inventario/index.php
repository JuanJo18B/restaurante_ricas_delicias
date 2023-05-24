<?php require "../../BD/connectDB.php"; ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario</title>
    <link rel="stylesheet" href="./css/bulma.min.css">
    <link rel="stylesheet" href="../../css/style_inventario.css">
    <link rel="stylesheet" href="../../css/style.css">
    </head>
    <body>
        <main>
            <?php
                session_start();
                error_reporting(E_ERROR | E_PARSE);
                    include "./inc/navbar.php";
                    include "./vistas/".$_GET['vista'].".php";
                    include "./inc/script.php";
            ?>
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