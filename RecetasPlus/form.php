<?php
	if (isset($_POST['enviar'])) {	
		$host = "sql313.epizy.com";
		$username = "epiz_19830617";
		$db = "epiz_19830617_recetasPlusdb";
		$pass = "miguel1993";
		// Create connection
		$conn= mysql_connect($host, $username, $pass) or die("Error en la conexion");
		mysql_select_db($db, $conn) or die("Base de datos sin seleccionar");
	 	$usuario = $_POST['usuario'];
	 	$receta = $_POST['receta'];
	 	$imagen = $_POST['imagen'];
	 	$categoria = $_POST['categorias'];
	 	$ingredientes = $_POST['ingredientes'];
	 	$preparacion = $_POST['preparacion'];
		$sqlqueryuser = "INSERT INTO USUARIOS (NOMBRE_USUARIO) VALUES('$usuario')";
		$sqlqueryreceta = "INSERT INTO RECETAS (NOMBRE_RECETA,INGREDIENTE,IMAGEN_RECETA,PREPARACION,TIPO_RECETA) VALUES ('$receta','$ingredientes','$imagen','preparacion','$categoria')";
		$insertarReceta = mysql_query($sqlqueryreceta);
		$insertarUsuario = mysql_query($sqlqueryuser);
		if (!$insertarReceta) {
			$mensaje = mysql_error();
			die($mensaje);
		}if (!$insertarUsuario) {
			$mensaje2 = mysql_error();
			die($mensaje2);
		}echo '<script language="javascript">alert("Receta guardada!");</script>'; 
		echo '<script language="javascript">location.href="index.php";</script>';
	 } 
?>