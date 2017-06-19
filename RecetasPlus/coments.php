<?php
	if (isset($_POST['Comentario'])) {	
		$host = "sql313.epizy.com";
	$username = "epiz_19830617";
	$db = "epiz_19830617_recetasPlusdb";
	$pass = "miguel1993";
		// Create connection
		$conn= mysql_connect($host, $username, $pass) or die("Error en la conexion");
		mysql_select_db($db, $conn) or die("Base de datos sin seleccionar");
	 	$destinatario="menibapi@gmail.com";
	 	$asunto="notificacion";
	 	$headers = "From: RecetasPlus"; 
	 	$mensaje="Tienes nuevas reacciones en tu receta, ingresa para ver que que hay de nuevo"
	 	$usuario = $_POST['Comentario']['usuario'];
	 	$descripcion = $_POST['Comentario']['descripcion'];
	 	$receta=$_POST['Comentario']['receta'];
	 	$dificultad= $_POST['select1'];
	 	$precio=$_POST['select'];
	 	if($dificultad=="1"){
	 		$sqlqueryetiquetadif = "UPDATE RECETAS SET ETIQUETA_FACIL=IFNULL(ETIQUETA_FACIL,0) + 1  WHERE ID_RECETA=".$receta."";
	 	}
	 	if($dificultad=="2"){
	 		$sqlqueryetiquetadif = "UPDATE RECETAS SET ETIQUETA_DIFICIL=IFNULL(ETIQUETA_DIFICIL,0) + 1  WHERE ID_RECETA=".$receta."";
	 	}
	 	if($precio=="4"){
	 		$sqlqueryetiqueta = "UPDATE RECETAS SET ETIQUETA_COSTOSO=IFNULL(ETIQUETA_COSTOSO,0) + 1  WHERE ID_RECETA=".$receta."";
	 	}
	 	if($precio=="3"){
	 		$sqlqueryetiqueta = "UPDATE RECETAS SET ETIQUETA_ECONOMICO=IFNULL(ETIQUETA_ECONOMICO,0) + 1  WHERE ID_RECETA=".$receta."";
	 	}
	 	$sqlqueryreceta = "INSERT INTO COMENTARIOS (DESCRIPCION, NOMBRE_USUARIO, ID_RECETA) VALUES ('$descripcion', '$usuario', ".$receta.")";
		$insertarComentarios = mysql_query($sqlqueryreceta);
		$insertarEtiqueta = mysql_query($sqlqueryetiqueta);
		$insertarEtiquetadif = mysql_query($sqlqueryetiquetadif);
		
		if (!$insertarComentarios) {
			$mensaje = mysql_error();
			die($mensaje);
		}
		if (!$insertarEtiqueta) {
			$mensaje = mysql_error();
			die($mensaje);
		}
		if (!$insertarEtiquetadif) {
			$mensaje = mysql_error();
			die($mensaje);
		}
		header("Location: recipe1.php?variable=".$receta);
	} 
	else
		header("Location: index.php");
?>