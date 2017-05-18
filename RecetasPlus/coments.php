<?php
	if (isset($_POST['Comentario'])) {	
		$host = "sql313.epizy.com";
	$username = "epiz_19830617";
	$db = "epiz_19830617_recetasPlusdb";
	$pass = "miguel1993";
		// Create connection
		$conn= mysql_connect($host, $username, $pass) or die("Error en la conexion");
		mysql_select_db($db, $conn) or die("Base de datos sin seleccionar");
	 	
	 	$usuario = $_POST['Comentario']['usuario'];
	 	$descripcion = $_POST['Comentario']['descripcion'];
	 	$receta=$_POST['Comentario']['receta'];
	 	
	 	//var_dump($_POST['Comentario']);

	 	$sqlqueryreceta = "INSERT INTO COMENTARIOS (DESCRIPCION, NOMBRE_USUARIO, ID_RECETA) VALUES ('$descripcion', '$usuario', ".$receta.")";
		$insertarComentarios = mysql_query($sqlqueryreceta);
		if (!$insertarComentarios) {
			$mensaje = mysql_error();
			die($mensaje);
		}
		header("Location: recipe1.php?variable=".$receta);
	} 
	else
		header("Location: index.php");
?>