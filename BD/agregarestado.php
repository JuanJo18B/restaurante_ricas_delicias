<?php
	$conn = new mysqli("localhost","root","","restaurante");
	$count=0;
	if(!empty($_POST['add'])) {
		$mesa = mysqli_real_escape_string($conn,$_POST["mesa"]);
		$orden = mysqli_real_escape_string($conn,$_POST["orden"]);
		$sql = "INSERT INTO dato_estado (mesa,orden) VALUES('" . $mesa . "','" . $orden . "')";
		mysqli_query($conn, $sql);
	}
	$sql2="SELECT * FROM dato_estado WHERE estado = 0";
	$result=mysqli_query($conn, $sql2);
	$count=mysqli_num_rows($result);

	header( 'Location: ../interfaces/cocinero/estado_orden_cocinero.php' ) ;
?>